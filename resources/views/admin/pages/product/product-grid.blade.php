@extends(backendView('layouts.app'))

@section('title', 'Products Grid')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Products</h3>
                <div class="btn-group group-link btn-set-task w-sm-100">
                    <a href="{!! backendRoutePut('product-grid') !!}"
                        class="btn active d-inline-flex align-items-center" aria-current="page"><i
                            class="icofont-wall px-2 fs-5"></i>Grid View</a>
                    <a href="{!! backendRoutePut('product-list') !!}" class="btn d-inline-flex align-items-center"><i
                            class="icofont-listing-box px-2 fs-5"></i> List View</a>
                </div>
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3">
        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
            <div class="sticky-lg-top">
                <div class="card mb-3">
                    <div class="reset-block">
                        <div class="filter-title">
                            <h4 class="title">Filter</h4>
                        </div>
                        <div class="filter-btn">
                            <a class="btn btn-primary" href="#">Reset</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="categories">
                        <div class="filter-title">
                            <a class="title" data-bs-toggle="collapse" href="#category" role="button"
                                aria-expanded="true">Categories</a>
                        </div>
                        <div class="collapse show" id="category">
                            <div class="filter-search">
                                <form action="#">
                                    <input type="text" placeholder="Search" class="form-control">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </form>
                            </div>
                            <div class="filter-category">
                                <ul class="category-list">
                                    <li><a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" class="collapsed">Game accessories</a>
                                        <ul id="collapseOne" class="sub-category collapse" data-parent="#category">
                                            <li><a href="#">PlayStation 4</a></li>
                                            <li><a href="#">Oculus VR</a></li>
                                            <li><a href="#">Remote</a></li>
                                            <li><a href="#">Lighting Keyborad</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo">Bags</a>
                                        <ul id="collapseTwo" class="sub-category collapse" data-parent="#category">
                                            <li><a href="#">School Bags</a></li>
                                            <li><a href="#">Traveling Bags</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree">Flower Port</a>
                                        <ul id="collapseThree" class="sub-category collapse" data-parent="#category">
                                            <li><a href="#">Woodan Port</a></li>
                                            <li><a href="#">Pattern Port</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour">Watch</a>
                                        <ul id="collapseFour" class="sub-category collapse" data-parent="#category">
                                            <li><a href="#">Wall Clock</a></li>
                                            <li><a href="#">Smart Watch</a></li>
                                            <li><a href="#">Rado Watch</a></li>
                                            <li><a href="#">Fasttrack Watch</a></li>
                                            <li><a href="#">Noise Watch</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="collapsed" href="#" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive">Accessories</a>
                                        <ul id="collapseFive" class="sub-category collapse" data-parent="#category">
                                            <li><a href="#">Note Diaries</a></li>
                                            <li><a href="#">Fold Diaries</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="size-block">
                        <div class="filter-title">
                            <a class="title" data-bs-toggle="collapse" href="#size" role="button"
                                aria-expanded="true">Select Size</a>
                        </div>
                        <div class="collapse show" id="size">
                            <div class="filter-size" id="filter-size-1">
                                <ul>
                                    <li>XS</li>
                                    <li>S</li>
                                    <li class="">M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="color-block">
                        <div class="filter-title">
                            <a class="title" data-bs-toggle="collapse" href="#color" role="button"
                                aria-expanded="false">Select Color</a>
                        </div>
                        <div class="collapse show" id="color">
                            <div class="filter-color">
                                <ul>
                                    <li>
                                        <div class="color-check">
                                            <p><span style="background-color: #4114e4;"></span> <strong>Blue</strong>
                                            </p>

                                            <input type="checkbox" id="color-1">
                                            <label for="color-1"><span></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="color-check">
                                            <p><span style="background-color: #E14C7B;"></span> <strong>Red</strong></p>

                                            <input type="checkbox" id="color-2">
                                            <label for="color-2"><span></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="color-check">
                                            <p><span style="background-color: #7CB637;"></span> <strong>Green</strong>
                                            </p>

                                            <input type="checkbox" id="color-3">
                                            <label for="color-3"><span></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="color-check">
                                            <p><span style="background-color: #161359;"></span> <strong>Dark</strong>
                                            </p>

                                            <input type="checkbox" id="color-4">
                                            <label for="color-4"><span></span></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="price-range-block">
                        <div class="filter-title">
                            <a class="title" data-bs-toggle="collapse" href="#pricingTwo" role="button"
                                aria-expanded="false">Pricing Range</a>
                        </div>
                        <div class="collapse show" id="pricingTwo">
                            <div class="price-range">
                                <div class="price-amount flex-wrap">
                                    <div class="amount-input mt-1">
                                        <label class="fw-bold">Minimum Price</label>
                                        <input type="text" id="minAmount2" class="form-control">
                                    </div>
                                    <div class="amount-input mt-1">
                                        <label class="fw-bold">Maximum Price</label>
                                        <input type="text" id="maxAmount2" class="form-control">
                                    </div>
                                </div>
                                <div id="slider-range2"
                                    class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="rating-block">
                        <div class="filter-title">
                            <a class="title" data-bs-toggle="collapse" href="#rating" role="button"
                                aria-expanded="false">Select Rating</a>
                        </div>
                        <div class="collapse show" id="rating">
                            <div class="filter-rating">
                                <ul>
                                    <li>
                                        <div class="rating-check">
                                            <input type="checkbox" id="rating-5">
                                            <label for="rating-5"><span></span>

                                            </label>
                                            <p>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rating-check">
                                            <input type="checkbox" id="rating-4">
                                            <label for="rating-4"><span></span></label>
                                            <p>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rating-check">
                                            <input type="checkbox" id="rating-3">
                                            <label for="rating-3"><span></span></label>
                                            <p>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rating-check">
                                            <input type="checkbox" id="rating-2">
                                            <label for="rating-2"><span></span></label>
                                            <p>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rating-check">
                                            <input type="checkbox" id="rating-1">
                                            <label for="rating-1"><span></span></label>
                                            <p>
                                                <i class="icofont-star"></i>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
            <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-3">
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-1.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart-fill text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (145)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Oculus VR </a>
                                <p class="text-muted">Reference 1204</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 149</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3">Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-2.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 3.5
                                    (77)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Wall Clock </a>
                                <p class="text-muted">Reference 1004</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 399</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-3.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 3.5
                                    (98)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Note Diaries </a>
                                <p class="text-muted">Reference 1224</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 149</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-4.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart-fill text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (1455)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Flower Port </a>
                                <p class="text-muted">Reference 1414</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 399</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-5.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (145)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">School Bag </a>
                                <p class="text-muted">Reference 1000</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 149</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-6.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (1245)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Rado Watch </a>
                                <p class="text-muted">Reference 9204</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 399</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-7.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart-fill text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (1045)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Traveling Bag </a>
                                <p class="text-muted">Reference 1155</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 399</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-2.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (77)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Wall Clock </a>
                                <p class="text-muted">Reference 1004</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 399</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="product">
                            <div class="product-image">
                                <div class="product-item active">
                                    <img src="{!! asset('public/backend/dist/assets/images/product/product-3.jpg') !!}"
                                        alt="product" class="img-fluid w-100">
                                </div>
                                <a class="add-wishlist" href="#">
                                    <i class="bi bi-heart text-danger"></i>
                                </a>
                            </div>
                            <div class="product-content p-3">
                                <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5
                                    (98)</span>
                                <a href="{!! backendRoutePut('product-detail') !!}" class="fw-bold">Note Diaries </a>
                                <p class="text-muted">Reference 1224</p>
                                <span class="d-block fw-bold fs-5 text-secondary">$ 149</span>
                                <a href="{!! backendRoutePut('product-cart') !!}" class="btn btn-primary mt-3"> Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <nav class="justify-content-end d-flex">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!-- Row end  -->
</div>
@endsection

@push('styles')
<!--plugin css file -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/nouislider/nouislider.min.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Jquery Plugin -->
<script src="{!! asset('public/backend/dist/assets/plugin/nouislider/nouislider.min.js') !!}"></script>
@endpush

@push('custom_scripts')
<script>
var stepsSlider2 = document.getElementById('slider-range2');
var input3 = document.getElementById('minAmount2');
var input4 = document.getElementById('maxAmount2');
var inputs2 = [input3, input4];
noUiSlider.create(stepsSlider2, {
    start: [149, 399],
    connect: true,
    step: 1,
    range: {
        'min': [0],
        'max': 2000
    },

});

stepsSlider2.noUiSlider.on('update', function(values, handle) {
    inputs2[handle].value = values[handle];
});
</script>
@endpush