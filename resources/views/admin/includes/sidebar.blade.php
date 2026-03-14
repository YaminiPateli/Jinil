<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">

        <a href="{{ route('home') }}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-bag-check-fill fs-4"></i>
            </span>
            <span class="logo-text">{{ Auth::user()->name }}</span>
        </a>

        <ul class="menu-list flex-grow-1 mt-3">

            <!-- Dashboard -->
            <li>
                <a class="m-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"
                   href="{{ route('admin/dashboard') }}">
                    <i class="icofont-home fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Category -->
            <li>
                <a class="m-link {{ Request::routeIs('category.*') ? 'active' : '' }}"
                   href="{{ route('category.index') }}">
                    <i class="icofont-listing-box fs-5"></i>
                    <span>Category</span>
                </a>
            </li>

            <!-- Industry Category -->
            <li>
                <a class="m-link {{ Request::routeIs('indcategory.*') ? 'active' : '' }}"
                   href="{{ route('indcategory.index') }}">
                    <i class="icofont-industries fs-5"></i>
                    <span>Industry Category</span>
                </a>
            </li>

            <!-- Industry -->
            <li>
                <a class="m-link {{ Request::routeIs('industry.*') ? 'active' : '' }}"
                   href="{{ route('industry.index') }}">
                    <i class="icofont-industry fs-5"></i>
                    <span>Industry</span>
                </a>
            </li>

            <!-- Product -->
            <li>
                <a class="m-link {{ Request::routeIs('product.*') ? 'active' : '' }}"
                   href="{{ route('product.index') }}">
                    <i class="icofont-box fs-5"></i>
                    <span>Product</span>
                </a>
            </li>

            <!-- Blog -->
            <li>
                <a class="m-link {{ Request::routeIs('blog.*') ? 'active' : '' }}"
                   href="{{ route('blog.index') }}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Blog</span>
                </a>
            </li>

            <!-- Clientel -->
            <li>
                <a class="m-link {{ Request::routeIs('clientel.*') ? 'active' : '' }}"
                   href="{{ route('clientel.index') }}">
                    <i class="icofont-users-social fs-5"></i>
                    <span>Clientel</span>
                </a>
            </li>

            <!-- Case Study -->
            <li>
                <a class="m-link {{ Request::routeIs('casestudy.*') ? 'active' : '' }}"
                   href="{{ route('casestudy.index') }}">
                    <i class="icofont-paper fs-5"></i>
                    <span>Case Study</span>
                </a>
            </li>

            <!-- Certificate -->
            <li>
                <a class="m-link {{ Request::routeIs('certificate.*') ? 'active' : '' }}"
                   href="{{ route('certificate.index') }}">
                    <i class="icofont-certificate fs-5"></i>
                    <span>Certificate</span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::routeIs('servicecategory.*') ? 'active' : '' }}"
                   href="{{ route('servicecategory.index') }}">
                    <i class="icofont-certificate fs-5"></i>
                    <span>Service Category</span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::routeIs('service.*') ? 'active' : '' }}"
                   href="{{ route('service.index') }}">
                    <i class="icofont-certificate fs-5"></i>
                    <span>Service</span>
                </a>
            </li>

            <!-- FAQ -->
            <li>
                <a class="m-link {{ Request::routeIs('faq.*') ? 'active' : '' }}"
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