@extends(backendView('layouts.app'))

@section('title', 'Shopping Cart')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Cart Detail</h3>
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3 justify-content-center">
        <div class="col-lg-12 col-xl-12 col-xxl-9">
            <div class="card">
                <div
                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Order Summary</h6>
                </div>
                <div class="card-body">
                    <div class="product-cart">
                        <div class="checkout-table">
                            <div class="table-responsive">
                                <table id="myCartTable" class="table display dataTable table-hover align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="product">Product Image</th>
                                            <th>Product Name</th>
                                            <th class="quantity">Quantity</th>
                                            <th class="price">Price</th>
                                            <th class="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{!! asset('public/backend/dist/assets/images/product/product-1.jpg') !!}"
                                                    class="avatar rounded lg" alt="Product">
                                            </td>
                                            <td>
                                                <h6 class="title">Oculus VR <span
                                                        class="d-block fs-6 text-primary">Pr-1204</span></h6>
                                            </td>
                                            <td>
                                                <input type="number" value="1" class="form-control">
                                            </td>
                                            <td>
                                                <p class="price">$149.00</p>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li><a class="favorite"
                                                            href="{!! backendRoutePut('product-detail') !!}"><i
                                                                class="icofont-ui-edit"></i></a></li>
                                                    <li><a class="delete" href="#0"><i
                                                                class="icofont-ui-delete"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{!! asset('public/backend/dist/assets/images/product/product-2.jpg') !!}"
                                                    class="avatar rounded lg" alt="Product">
                                            </td>
                                            <td>
                                                <h6 class="title">Wall Clock <span
                                                        class="d-block fs-6 text-primary">Pr-1004</span></h6>
                                            </td>
                                            <td>
                                                <input type="number" value="1" class="form-control">
                                            </td>
                                            <td>
                                                <p class="price">$399.00</p>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li><a class="favorite"
                                                            href="{!! backendRoutePut('product-detail') !!}"><i
                                                                class="icofont-ui-edit"></i></a></li>
                                                    <li><a class="delete" href="#0"><i
                                                                class="icofont-ui-delete"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{!! asset('public/backend/dist/assets/images/product/product-3.jpg') !!}"
                                                    class="avatar rounded lg" alt="Product">
                                            </td>
                                            <td>
                                                <h6 class="title">Note Diaries <span
                                                        class="d-block fs-6 text-primary">Pr-1224</span></h6>
                                            </td>
                                            <td>
                                                <input type="number" value="1" class="form-control">
                                            </td>
                                            <td>
                                                <p class="price">$149.00</p>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li><a class="favorite"
                                                            href="{!! backendRoutePut('product-detail') !!}"><i
                                                                class="icofont-ui-edit"></i></a></li>
                                                    <li><a class="delete" href="#0"><i
                                                                class="icofont-ui-delete"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{!! asset('public/backend/dist/assets/images/product/product-4.jpg') !!}"
                                                    class="avatar rounded lg" alt="Product">
                                            </td>
                                            <td>
                                                <h6 class="title">Flower Port <span
                                                        class="d-block fs-6 text-primary">Pr-1414</span></h6>
                                            </td>
                                            <td>
                                                <input type="number" value="1" class="form-control">
                                            </td>
                                            <td>
                                                <p class="price">$399.00</p>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li><a class="favorite"
                                                            href="{!! backendRoutePut('product-detail') !!}"><i
                                                                class="icofont-ui-edit"></i></a></li>
                                                    <li><a class="delete" href="#0"><i
                                                                class="icofont-ui-delete"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap mt-2">
                            <div class="checkout-coupon">
                                <span>Apply Coupon to get discount!</span>
                                <form action="#">
                                    <div class="single-form form-default d-inline-flex mt-3">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Coupon Code"
                                                aria-label="Apply Coupon">
                                            <button class="btn btn-primary" type="button">Apply</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="checkout-total">
                                <div class="single-total">
                                    <p class="value">Subotal Price:</p>
                                    <p class="price">$1096.00</p>
                                </div>
                                <div class="single-total">
                                    <p class="value">Shipping Cost (+):</p>
                                    <p class="price">$12.00</p>
                                </div>
                                <div class="single-total">
                                    <p class="value">Discount (-):</p>
                                    <p class="price">$10.00</p>
                                </div>
                                <div class="single-total">
                                    <p class="value">Tax(18%):</p>
                                    <p class="price">$198.00</p>
                                </div>
                                <div class="single-total total-payable">
                                    <p class="value">Total Payable:</p>
                                    <p class="price">$1296.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn d-flex justify-content-between pt-3 flex-wrap mt-2">
                            <div class="single-btn w-sm-100">
                                <a href="{!! backendRoutePut('product-grid') !!}"
                                    class="btn btn-secondary w-sm-100">Continue Shopping</a>
                            </div>
                            <div class="single-btn w-sm-100">
                                <a href="{!! backendRoutePut('checkout') !!}" class="btn btn-primary w-sm-100">Proceed
                                    to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- plugin css file  -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Plugin Js-->
<script src="{!! asset('public/backend/dist/assets/bundles/dataTables.bundle.js') !!}"></script>

@endpush

@push('custom_scripts')
<script>
$(document).ready(function() {
    $('#myCartTable')
        .addClass('nowrap')
        .dataTable({
            responsive: true,
            columnDefs: [{
                targets: [-1, -3],
                className: 'dt-body-right'
            }]
        });
});
</script>
@endpush

@push('modals')
@endpush