@include('layouts.frontheader')

<section class="navi_page">
    <div class="container-fluid">

        <div class="navi_page_child">
            <div>
                <p class="title_24"><a href="{{ url('/') }}" class="text-585">Home</a> /  {{ $category->category }}</p>
                <h2 class="title_60"> {{ $category->category }}</h2>
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

<section class="mt_80 mb_100">
    <div class="container-fluid">
        <div class="sec_hed_top mb_60">
            <h2 class="title_60">Featured Machines</h2>
        </div>

        <div class="row gy-5">
            @foreach($productlist as $product)
            <div class="col-md-4">
                <div class="fea_mac">
                    <div class="fea_mac_img">
                        <img class="img-fluid" src="{{ asset('public/Product/front_image/'.$product->front_image) }}" alt="{{ $product->name }}">
                        <!-- <a href="#" class="fea_mac_icon">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 18.5L18.5 0.5M18.5 0.5H6.5M18.5 0.5V12.5" stroke="#111111"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a> -->
                    </div>
                    <div class="fea_mac_content">
                        <div class="fea_mac_content_inner">
                            <h3 class="title_24">{{ $product->name }}</h3>
                            <a href="#" class="com_btn mt-2">Enquire Now</a>
                            <!-- <span class="fea_mac_content_inner_btn">Cabinet Type Shot Blasting</span> -->
                        </div>
                        <!-- <hr>
                        <p>For batch processing of small to medium components</p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</section>

@include('layouts.frontfooter')