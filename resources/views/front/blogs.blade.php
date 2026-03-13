@include('layouts.frontheader')

<section class="navi_page">
    <div class="container-fluid">

        <div class="navi_page_child">
            <div>
                <p class="title_24"><a href="{{ url('/')}}" class="text-585">Home</a> / Blog</p>
                <h2 class="title_60">Insights from the Surface Preparation Industry</h2>
                <p class="mb-0">Expert guidance, technical resources, and industry best practices</p>
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
</section>

@include('layouts.frontfooter')