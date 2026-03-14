@include('layouts.frontheader')

<section class="navi_page">
    <div class="container-fluid">

        <div class="navi_page_child">
            <div class="col-lg-10">
                <p class="title_24"><a href="{{ url('/') }}" class="text-585">Home</a> / Downloads</p>
                <h2 class="title_60">Technical Resources & Downloads</h2>
                <p class="mb-0">Access machine brochures, technical specifications, layout drawings, safety
                    documentation, and compliance certificates for Jinil shot blasting solutions.</p>
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

<section class="mb_100">
    <div class="container-fluid">
        <!-- <div class="search_filter_wrapper mb_80">
            <div class="search_box">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17 17L22 22M19.5 10.75C19.5 15.5825 15.5825 19.5 10.75 19.5C5.91751 19.5 2 15.5825 2 10.75C2 5.91751 5.91751 2 10.75 2C15.5825 2 19.5 5.91751 19.5 10.75Z"
                        stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <input type="text" placeholder="Search by machine name, model, document type, or industry...">
            </div>

            <div class="filter_box">

                <select>
                    <option>All Categories</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                </select>

                <select>
                    <option>All Machine Types</option>
                    <option>Type 1</option>
                    <option>Type 2</option>
                </select>

                <select>
                    <option>All Industries</option>
                    <option>Industry 1</option>
                    <option>Industry 2</option>
                </select>

            </div>

        </div> -->

        <div class="download_cards_main">
            <div class="row">

                @foreach($certificate as $item)

                <div class="col-lg-4">
                    <div class="download_cards">

                        <img class="img-fluid mb_40"
                            src="{{ asset('public/front/images/pdf-img.png') }}"
                            alt="{{ $item->title }}">

                        <h4 class="title_24 text-105">
                            {{ $item->title }}
                        </h4>

                        <hr>

                        <p class="mb-0">
                            {{ $item->description }}
                        </p>

                        <a href="{{ asset('public/certificateFiles/Jinil_Brochure.pdf') }}" 
                            class="com_btn text-111"
                            download="{{ $item->file }}">

                                <span>
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"></svg>
                                </span>

                                <span>Download</span>

                            </a>

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</section>

@include('layouts.frontfooter')