// ================= HAMBURGER MENU =================
const hamburger = document.querySelector(".hamburger");
if (hamburger) {
  hamburger.addEventListener("click", function () {
    this.classList.toggle("active");
  });
}

// ================= SLICK SLIDERS =================
$(document).ready(function () {
  if ($(".desire_slider").length) {
    $(".desire_slider").slick({
      dots: true,
      arrows: false,
      centerMode: true,
      centerPadding: "10%",
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            centerPadding: "40px",
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            centerPadding: "0px",
          },
        },
      ],
    });
  }

  if ($(".corporate_slider").length) {
    $(".corporate_slider").slick({
      slidesToShow: 3,
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 2500,
    });
  }

  if ($(".cor_kits_slider").length) {
    $(".cor_kits_slider").slick({
      slidesToShow: 1,
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 2500,
    });
  }

 if ($(".industry_detals_grid").length) {

  $(".industry_detals_grid").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $('.prev_arrow'),
    nextArrow: $('.next_arrow'),
    autoplay: true,
    dots: false,
    infinite: true,
    speed: 600,

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
    ]

  });

}
});

// set CSS var to header height so fixed header does not overlap content
(function () {
  function updateHeaderHeight() {
    const header = document.querySelector("header");
    if (!header) return;
    const h = header.offsetHeight;
    document.documentElement.style.setProperty("--header-height", h + "px");
  }

  // basic debounce
  function debounce(fn, wait) {
    let t;
    return function () {
      clearTimeout(t);
      t = setTimeout(fn, wait);
    };
  }

  updateHeaderHeight();
  window.addEventListener("resize", debounce(updateHeaderHeight, 150));
})();

// ================= COUNTERS (animate when visible) =================
(function () {
  const counterSection = document.querySelector(".counter");
  if (!counterSection) return;

  const counters = counterSection.querySelectorAll(".count");
  let started = false;

  function animateCounter(el, target, duration = 2000) {
    const startTime = performance.now();

    function step(now) {
      const progress = Math.min((now - startTime) / duration, 1);
      el.textContent = Math.floor(progress * target);
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = target;
    }

    requestAnimationFrame(step);
  }

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !started) {
          started = true;
          counters.forEach((el) => {
            const t = parseInt(el.getAttribute("data-target"), 10);
            if (Number.isFinite(t)) animateCounter(el, t, 2000);
          });
          obs.unobserve(counterSection);
        }
      });
    },
    { threshold: 0.3 },
  );

  observer.observe(counterSection);
})();
