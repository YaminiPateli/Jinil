gsap.registerPlugin(ScrollTrigger);

// add extra scroll space after sequence section
const spacer = document.createElement("div");
spacer.style.height = "200vh"; // adjust for timing
document.querySelector(".sequence_section").after(spacer);

// hero title animation
gsap.from("#hero-title", {
  scrollTrigger: {
    trigger: ".sequence_section",
    start: "top top",
    end: "+=1500",
    scrub: true,
  },
  opacity: 0,
  y: 120,
});

// subtitle = no animation (static)

const frameCount = 142;
const urls = Array.from(
  { length: frameCount },
  (_, i) => `images/hero/parallax_${(i + 1).toString().padStart(4, "0")}.jpg`
);

imageSequence({
  urls,
  img: "#image_sequence",
  scrollTrigger: {
    trigger: ".sequence_section",
    start: "top top",
    end: "+=2000",
    scrub: true,
  },
});

function imageSequence(config) {
  let playhead = { frame: 0 };
  let imgElement = document.querySelector(config.img);
  let images = [];
  let curFrame = -1;

  function updateImage() {
    let f = Math.round(playhead.frame);
    f = Math.max(0, Math.min(f, images.length - 1));
    if (f !== curFrame) {
      imgElement.src = images[f].src;
      curFrame = f;
    }
  }

  config.urls.forEach((url, i) => {
    const img = new Image();
    img.src = url;
    if (i === 0) img.onload = updateImage;
    images.push(img);
  });

  gsap.to(playhead, {
    frame: images.length - 1,
    ease: "none",
    onUpdate: updateImage,
    scrollTrigger: config.scrollTrigger,
  });
}


// page navigate hader



