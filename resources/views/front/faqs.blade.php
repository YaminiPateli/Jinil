@include('layouts.frontheader')

<section class="navi_page">
    <div class="container-fluid">

        <div class="navi_page_child">
            <div class="col-lg-10">
                <p class="title_24"><a href="{{ url('/') }}" class="text-585">Home</a> / FAQs</p>
                <h2 class="title_60">Frequently Asked Questions</h2>
                <p class="mb-0">Clear answers to common questions about Jinil’s shot blasting machines, surface
                    preparation solutions, and engineering support—helping you make informed decisions with confidence.
                </p>
            </div>

            <div class="contact_circle">

                <!-- circular text image -->
                <img src="{{ asset('public/front/images/innder-header-jump.svg') }}" class="circle_text_img">

                <svg class="arrow_img" width="18" height="23" viewBox="0 0 18 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.85653 1.15617L8.85653 20.9552L8.85653 1.15617ZM8.85653 20.9552L16.5562 13.2555L8.85653 20.9552ZM8.85653 20.9552L1.15692 13.2556L8.85653 20.9552Z"
                        fill="#58595B" />
                    <path
                        d="M8.85653 1.15617L8.85653 20.9552M8.85653 20.9552L16.5562 13.2555M8.85653 20.9552L1.15692 13.2556"
                        stroke="#58595B" stroke-width="2.31318" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
        </div>

    </div>
</section>
<section class="faq_main mb_100 mt_100">
<div class="container-fluid">

<!-- Tabs -->
<div class="faq_tabs mb_60">

@foreach($faqs as $key => $faq)

<button class="com_btn {{ $key == 0 ? 'active' : '' }}"
        data-tab="tab{{ $faq->id }}">
    {{ $faq->name }}
</button>

@endforeach

</div>


<!-- FAQ Groups -->

@foreach($faqs as $key => $faq)

<div class="faq_group {{ $key == 0 ? 'active' : '' }}"
     id="tab{{ $faq->id }}">

    @if($faq->title_description)

        @foreach($faq->title_description as $item)

        <div class="faq_item">

            <div class="faq_question">
                <span>{{ $item['faq_title'] }}</span>
                <span class="faq_icon">+</span>
            </div>

            <div class="faq_answer">
                <p>{!! $item['faq_description'] !!}</p>
            </div>

        </div>

        @endforeach

    @endif

</div>

@endforeach

</div>
</section>
<script>

document.addEventListener("DOMContentLoaded", function () {

    const tabs = document.querySelectorAll(".com_btn");
    const groups = document.querySelectorAll(".faq_group");

    /* TAB FUNCTION */

    tabs.forEach(tab => {

        tab.addEventListener("click", function () {

            // remove active from all tabs
            tabs.forEach(t => t.classList.remove("active"));
            tab.classList.add("active");

            // hide all faq groups and close all items
            groups.forEach(group => {
                group.classList.remove("active");

                group.querySelectorAll(".faq_item").forEach(item => {
                    item.classList.remove("active");
                });
            });

            // show selected tab
            const target = document.getElementById(tab.dataset.tab);
            if(target){
                target.classList.add("active");
            }

        });

    });


    /* ACCORDION FUNCTION */

    document.querySelectorAll(".faq_question").forEach(question => {

        question.addEventListener("click", function () {

            const item = question.parentElement;
            const group = item.closest(".faq_group");

            // close other FAQs in same tab
            group.querySelectorAll(".faq_item").forEach(faq => {
                if(faq !== item){
                    faq.classList.remove("active");
                }
            });

            // toggle current faq
            item.classList.toggle("active");

        });

    });

});

</script>
@include('layouts.frontfooter')