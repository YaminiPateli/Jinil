@include('layouts.frontheader')
<section class="navi_page">
    <div class="container-fluid">

        <div class="navi_page_child">
            <div>
                <p class="title_24"><a href="{{ url('/') }}" class="text-585">Home</a> / <a href="{{ route('blogs') }}"
                        class="text-585">Blogs</a> / {{ $blogsdetail->title }}</p>
                <h2 class="title_60">{{ $blogsdetail->title }}</h2>
                <p class="mb-0">{{ $blogsdetail->date }}</p>
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

@if($blogsdetail)
<section class="mb_100 blogs_detials">
    <div class="container-fluid">

        <div class="mb_40">
            <img class=" img-fluid" src="{{ asset('public/blogs/detail_image/' . $blogsdetail->detail_image) }}" alt="images">
        </div>

        <div class="mb_40">
            <p>{!! $blogsdetail->short_description!!}</p>
            <!-- <h4>Introduction</h4>
            <p>Surface preparation plays a critical role in heavy fabrication industries where steel components must
                meet
                strict quality and durability standards. Shot blasting is one of the most effective methods for
                achieving a
                clean, uniform surface that enhances both performance and longevity.</p> -->
        </div>

        <div class="mb_40">
            <p>{!! $blogsdetail->description !!}</p>
        </div>
        <!-- <div class="mb_40">
            <h4 class="title_24">Key Benefits of Shot Blasting in Fabrication</h4>
            <ul>
                <li>Improved Coating Adhesion:- Shot blasting creates an optimal surface profile, allowing coatings to
                    adhere more effectively and last longer.</li>
                <li>Enhanced Corrosion Resistance:- Removing mill scale and contaminants significantly reduces corrosion
                    risks in harsh environments.</li>
                <li>Consistent Finish Across Components:- Automated systems deliver repeatable results, ensuring uniform
                    quality across large production batches.</li>
            </ul>
        </div>
        <div class="mb_40">
            <h4 class="title_24">Applications in Heavy Fabrication</h4>
            <p>Shot blasting is widely used for:</p>

            <ul>
                <li>Structural steel beams</li>
                <li>Fabricated frames and assemblies</li>
                <li>Heavy machinery components</li>
                <li>Pre-fabricated metal parts</li>
            </ul>
        </div>
        <div class="mb_40">
            <h4 class="title_24">Choosing the Right Machine</h4>
            <p>Selecting the appropriate shot blasting machine depends on:</p>
            <ul>
                <li>Component size and geometry</li>
                <li>Production volume</li>
                <li>Required surface finish</li>
            </ul>
            <p>Consulting with an experienced manufacturer helps ensure optimal system selection.</p>
        </div> -->
        <div class="mb_40">
            <div class="blog_det_consu">
                <p>{!! $blogsdetail->cta_text !!}</p>
                <!-- <h2 class="title_80">Initiate your Project</h2>
                <p>Consult with our engineering team. Receive a technical <br> proposal within 24 hours.</p> -->
                <!-- <a href="#" class="com_btn com_btn_3">Request Consultation</a> -->
            </div>
        </div>
        <div class="mb_40">
            <h4 class="title_24">Conclusion</h4>
            <p>{!! $blogsdetail->conclusion !!}</p>
        </div>
    </div>
</section>
@endif
<section class="insights_section mt_100 mb_100">
    <div class="container-fluid">
        <div class="row align-items-center mb_40">
            <div class="col-md-7">
                <h2 class="title_60">Insights from the Surface Preparation Industry</h2>
            </div>

            <div class="col-md-5 text-end">
                <a href="{{ route('blogs') }}" class="com_btn com_btn_2">View all</a>
            </div>

        </div>

        <div class="insights_wrapper">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="insight_item">
                            <div class="insight_item_img">
                                <img class="w-100" src="{{ asset('public/blogs/front_image/' . $blog->front_image) }}" alt="{{ $blog->title }}" />
                            </div>
                            <div class="insight_item_content">
                                <hr>
                                <p class="mb-2">{{ $blog->date}}</p>
                                <a href="{{ route('blogdetail', ['url' => $blog->url]) }}"><h3 class="title_24">{{ $blog->title }}</h3></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
               
            </div>
        </div>
    </div>
</section>

@include('layouts.frontfooter')