<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">

        <a href="{!! route('home') !!}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-bag-check-fill fs-4"></i>
            </span>
            <span class="logo-text">{{ Auth::user()->name }}</span>
        </a>

        <ul class="menu-list flex-grow-1 mt-3">

            <li>
                <a class="m-link" href="{!! route('admin/dashboard') !!}">
                    <i class="icofont-home fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('category.index') ? ' active' : '' }}"
                   href="{{ route('category.index') }}">
                    <i class="icofont-industries fs-5"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a class="m-link{{ Request::routeIs('industry.index') ? ' active' : '' }}"
                   href="{{ route('industry.index') }}">
                    <i class="icofont-industries fs-5"></i>
                    <span>Industry</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('product.index') ? ' active' : '' }}"
                   href="{{ route('product.index') }}">
                    <i class="icofont-box fs-5"></i>
                    <span>Product</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('blog.index') ? ' active' : '' }}"
                   href="{{ route('blog.index') }}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Blog</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('clientel.index') ? ' active' : '' }}"
                   href="{{ route('clientel.index') }}">
                    <i class="icofont-users-social fs-5"></i>
                    <span>Clientel</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('casestudy.index') ? ' active' : '' }}"
                   href="{{ route('casestudy.index') }}">
                    <i class="icofont-paper fs-5"></i>
                    <span>CaseStudy</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('certificate.index') ? ' active' : '' }}"
                   href="{{ route('certificate.index') }}">
                    <i class="icofont-certificate fs-5"></i>
                    <span>Certificate</span>
                </a>
            </li>

            <li>
                <a class="m-link{{ Request::routeIs('faq.index') ? ' active' : '' }}"
                   href="{{ route('faq.index') }}">
                    <i class="icofont-question-circle fs-5"></i>
                    <span>Faqs</span>
                </a>
            </li>

        </ul>

        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>

    </div>
</div>