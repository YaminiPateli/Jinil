@include('layouts.frontheader')
<section class="navi_page">
    <div class="container-fluid">

        <div class="navi_page_child">
            <div>
                <p class="title_24"><a href="{{ url('/') }}" class="text-585">Home</a> / <a href="#">Industries</a> {{ $category->indcategory }}</p>
                <h2 class="title_60">{{ $category->indcategory }}</h2>
                <p class="mb-0">{!! $category->cat_description !!}</p>
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

<section class="mt_80">
<div class="container-fluid">
    <div class="industries_details">

        @foreach($industries as $key => $industry)

        @if($key % 2 == 0)

        <div>
            <img class="img-fluid"
            src="{{ asset('public/industryImage/'.$industry->image) }}"
            alt="images">
        </div>

        <div>
            <h2 class="title_60 text-111 mb-3">{{ $industry->title }}</h2>
            <p class="mb-0">{!! $industry->description !!}</p>
            <a href="#" class="com_btn mt_40">Enquire Now</a>
        </div>

        @else

        <div>
            <h2 class="title_60 text-111 mb-3">{{ $industry->title }}</h2>
            <p class="mb-0">{!! $industry->description !!}</p>
            <a href="#" class="com_btn mt_40">Enquire Now</a>
        </div>

        <div>
            <img class="w-100"
            src="{{ asset('public/industryImage/'.$industry->image) }}"
            alt="images">
        </div>

    @endif

    @endforeach

    </div>
</div>
</section>

<section class="mt_100 mb_100">
    <div class="container-fluid">
        <div class="industry_section">
            <div class="d-flex justify-content-between mb_40">
                <div class="col-lg-10">
                    <h2 class="title_60 text-white">Similar Industries You May Like </h2>
                    <p class="mb-0 text-white">Lorem ipsum dolor sit amet consectetur. Orci malesuada dictum quam
                        maecenas
                        bibendum fermentum rhoncus lectus sit. Ut sodales tincidunt felis mattis. Rhoncus condimentum
                        diam
                        sagittis justo nulla fermentum convallis lobortis semper. Placerat arcu eget dignissim
                        ullamcorper
                        gravida lorem aenean. Vitae sodales libero a scelerisque elementum pretium. Posuere ullamcorper
                        cursus ac nunc consequat pellentesque pellentesque.</p>
                </div>
                <div class="slider_arrow">
                    <svg class="prev_arrow" width="68" height="68" viewBox="0 0 68 68" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="68" y="68" width="68" height="68" rx="34" transform="rotate(180 68 68)"
                            fill="#E4ECF4" />
                        <path
                            d="M46.7279 33.9996L21.2721 33.9996M21.2721 33.9996L29.7574 42.4849M21.2721 33.9996L29.7574 25.5143"
                            stroke="#111111" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <svg class="next_arrow" width="68" height="68" viewBox="0 0 68 68" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="68" height="68" rx="34" fill="#E4ECF4" />
                        <path
                            d="M21.2721 34.0004H46.7279M46.7279 34.0004L38.2426 25.5151M46.7279 34.0004L38.2426 42.4857"
                            stroke="#111111" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>
            </div>

            <div class="industry_detals_grid">
                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item"
                        style="background-image: url('{{ asset('public/front/images/industries2.jpg') }}'); mix-blend-mode: lighten;"> </div>

                    <h3 class="title_24">Fabrication</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries3.jpg') }}')"> </div>

                    <h3 class="title_24">Foundry</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries4.jpg') }}')"> </div>

                    <h3 class="title_24">Steel Plants</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries5.jpg') }}')"> </div>

                    <h3 class="title_24">Wire coil</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries6.jpg') }}')"> </div>

                    <h3 class="title_24">Workshops</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries7.jpg') }}')"> </div>

                    <h3 class="title_24">Defense</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries8.jpg') }}')"> </div>

                    <h3 class="title_24">Oil & gas</h3>
                </div>

                <div class="industry_item_wrapper mx-3">
                    <div class="industry_item" style="background-image: url('{{ asset('public/front/images/industries1.jpg') }}')"> </div>

                    <h3 class="title_24">Rail & Heavy Equipment</h3>
                </div>

            </div>
        </div>
    </div>
</section>


@include('layouts.frontfooter')