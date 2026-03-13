@extends(backendView('layouts.app'))

@section('title', 'Product Edit')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Products Edit</h3>
                <button type="submit"
                    class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
            </div>
        </div>
    </div> <!-- Row end  -->

    <div class="row g-3 mb-3">
        <div class="col-xl-4 col-lg-4">
            <div class="sticky-lg-top">
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Pricing Info</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Product Price Old</label>
                                <input type="text" class="form-control" value="$350">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Product Price New</label>
                                <input type="text" class="form-control" value="$355">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Product Coupon</label>
                                <input type="text" class="form-control" value="BATTT-XA47">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Visibility Status</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="couponsstatus" checked>
                            <label class="form-check-label">
                                Published
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="couponsstatus">
                            <label class="form-check-label">
                                Scheduled
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="couponsstatus">
                            <label class="form-check-label">
                                Hidden
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Size</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sizechek1">
                            <label class="form-check-label" for="sizechek1">
                                XS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sizechek2">
                            <label class="form-check-label" for="sizechek2">
                                S
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sizechek3">
                            <label class="form-check-label" for="sizechek3">
                                M
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sizechek4">
                            <label class="form-check-label" for="sizechek4">
                                L
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sizechek5" checked>
                            <label class="form-check-label" for="sizechek5">
                                XL
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Publish Schedule</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Publish Date</label>
                                <input type="date" class="form-control w-100" value="2021-03-28">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Publish Time</label>
                                <input type="time" class="form-control w-100" value="10:30">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Tags</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group demo-tagsinput-area">
                            <div class="form-line">
                                <input type="text" class="form-control" data-role="tagsinput"
                                    value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Categories</h6>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Categories Select</label>
                        <select class="form-select" size="3" aria-label="size 3 select example">
                            <option selected>Gaming accessories</option>
                            <option value="1">Watch</option>
                            <option value="2">Clothes</option>
                            <option value="3">Toy</option>
                            <option value="4">Cosmetic</option>
                            <option value="5">Laptop</option>
                            <option value="6">Mobile</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div
                        class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Inventory Info</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">SKU</label>
                                <input type="text" class="form-control" value="SKUN111">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Total Stock Quantity</label>
                                <input type="text" class="form-control" value="1455">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="Oculus VR">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Page Title</label>
                                <input type="text" class="form-control" value="Gaming VR">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Product Identifier URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">https://eBazar.com</span>
                                    <input type="text" class="form-control" value="/product/Fossilsmart">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Product Description</label>
                                <div id="editor">
                                    <p>This is some sample content.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Integer vitae leo quis urna pulvinar tristique..</li>
                                        <li>In porttitor sem at ligula vehicula, at scelerisque lectus placerat.</li>
                                        <li>Nullam ornare risus ac tellus ullamcorper rhoncus.</li>
                                        <li>Nam dictum neque et velit fermentum blandit.</li>
                                        <li>Vivamus congue metus sit amet sapien pulvinar tincidunt.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Shipping Country</h6>
                </div>
                <div class="card-body">
                    <select id="optgroup" class="ms w-100" multiple="multiple">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Images</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Product Images Upload</label>
                                <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px
                                    max-height.</small>
                                <input type="file" id="input-file-to-destroy" class="dropify"
                                    data-allowed-formats="portrait square" data-max-file-size="2M"
                                    data-max-height="2000"
                                    data-default-file="{!! asset('public/backend/dist/assets/images/product/product-1.jpg') !!}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label w-100">Select Product Color</label>
                                <input type="color" id="color">
                            </div>
                            <div class="col-md-12">
                                <div class="product-cart">
                                    <div class="checkout-table table-responsive">
                                        <table id="myCartTable" class="table display dataTable table-hover align-middle"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="product">Product</th>
                                                    <th class="product">Product Tag Name</th>
                                                    <th class="quantity">Color</th>
                                                    <th class="quantity">Quantity</th>
                                                    <th class="quantity">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="product-cart d-flex align-items-center">
                                                            <div class="product-thumb">
                                                                <img src="{!! asset('public/backend/dist/assets/images/product/thunb-2.jpg') !!}"
                                                                    class="img-fluid avatar xl" alt="Product">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Oculus VR back">
                                                    </td>
                                                    <td>
                                                        <input type="color" class="form-control" value="#cccccc">
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity d-inline-flex">
                                                            <input type="number" value="1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Basic outlined example">
                                                            <button type="button"
                                                                class="btn btn-outline-secondary deleterow"><i
                                                                    class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="product-cart d-flex align-items-center">
                                                            <div class="product-thumb">
                                                                <img src="{!! asset('public/backend/dist/assets/images/product/thunb-3.jpg') !!}"
                                                                    class="img-fluid avatar xl" alt="Product">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Oculus VR right">
                                                    </td>
                                                    <td>
                                                        <input type="color" class="form-control" value="#426531">
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity d-inline-flex">
                                                            <input type="number" value="1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Basic outlined example">
                                                            <button type="button"
                                                                class="btn btn-outline-secondary deleterow"><i
                                                                    class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="product-cart d-flex align-items-center">
                                                            <div class="product-thumb">
                                                                <img src="{!! asset('public/backend/dist/assets/images/product/thunb-4.jpg') !!}"
                                                                    class="img-fluid avatar xl" alt="Product">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Oculus VR left">
                                                    </td>
                                                    <td>
                                                        <input type="color" class="form-control" value="#547681">
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity d-inline-flex">
                                                            <input type="number" value="1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Basic outlined example">
                                                            <button type="button"
                                                                class="btn btn-outline-secondary deleterow"><i
                                                                    class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="product-cart d-flex align-items-center">
                                                            <div class="product-thumb">
                                                                <img src="{!! asset('public/backend/dist/assets/images/product/thunb-5.jpg') !!}"
                                                                    class="img-fluid avatar xl" alt="Product">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="Oculus VR Front">
                                                    </td>
                                                    <td>
                                                        <input type="color" class="form-control" value="#45df81">
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity d-inline-flex">
                                                            <input type="number" value="1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Basic outlined example">
                                                            <button type="button"
                                                                class="btn btn-outline-secondary deleterow"><i
                                                                    class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header py-3 bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Cropped Images</h6>
                    <small>If You Cropped Images Please Upload and croppd easily.</small>
                </div>
                <div class="card-body">
                    <div class="row g-3 mb-3">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="img-container">
                                <img id="image"
                                    src="{!! asset('public/backend/dist/assets/images/product/product-1.jpg') !!}"
                                    class="img-responsive" alt="Picture">
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="docs-preview clearfix">
                                <div class="img-preview preview-lg"></div>
                                <div class="img-preview preview-md"></div>
                                <div class="img-preview preview-sm"></div>
                                <div class="img-preview preview-xs"></div>
                            </div>
                            <div class="docs-data">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">X</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataX" placeholder="x">
                                    <div class="input-group-append">
                                        <span class="input-group-text">PX</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Y</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataY" placeholder="y">
                                    <div class="input-group-append">
                                        <span class="input-group-text">PX</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Width</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                    <div class="input-group-append">
                                        <span class="input-group-text">PX</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Height</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                    <div class="input-group-append">
                                        <span class="input-group-text">PX</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rotate</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Deg</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">ScaleX</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">ScaleY</span>
                                    </div>
                                    <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                </div>
                                <!-- /.pixels of image -->
                            </div>
                        </div>
                    </div><!-- Row end  -->
                    <div class="row g-3">
                        <div class="col-lg-7 col-md-12 docs-buttons">
                            <!-- .btn groups -->
                            <button type="button" class="btn btn-sm btn-info" data-method="setDragMode"
                                data-option="move" title="Move"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)"> <i
                                        class="icofont-drag1"></i> </span></button>
                            <button type="button" class="btn btn-sm btn-info" data-method="setDragMode"
                                data-option="crop" title="Crop"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)"> <i
                                        class="icofont-crop"></i> </span></button>

                            <button type="button" class="btn btn-sm btn-success" data-method="zoom" data-option="0.1"
                                title="Zoom In"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;zoom&quot;, 0.1)"> <i class="icofont-ui-zoom-in"></i>
                                </span></button>
                            <button type="button" class="btn btn-sm btn-success" data-method="zoom" data-option="-0.1"
                                title="Zoom Out"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;zoom&quot;, -0.1)"> <i class="icofont-ui-zoom-out"></i>
                                </span></button>

                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="-10"
                                data-second-option="0" title="Move Left"> <span class="docs-tooltip"
                                    data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)"> <i
                                        class="icofont-circled-left"></i></span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="10"
                                data-second-option="0" title="Move Right"> <span class="docs-tooltip"
                                    data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)"> <i
                                        class="icofont-circled-right"></i> </span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="0"
                                data-second-option="-10" title="Move Up"> <span class="docs-tooltip"
                                    data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)"> <i
                                        class="icofont-circled-up"></i> </span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="move" data-option="0"
                                data-second-option="10" title="Move Down"> <span class="docs-tooltip"
                                    data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)"> <i
                                        class="icofont-circled-down"></i></span></button>

                            <button type="button" class="btn btn-sm btn-secondary" data-method="rotate"
                                data-option="-45" title="Rotate Left"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;rotate&quot;, -45)"> <i class="icofont-rotation"></i>
                                </span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="rotate" data-option="45"
                                title="Rotate Right"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;rotate&quot;, 45)"> <i class="icofont-rotation"></i>
                                </span></button>

                            <button type="button" class="btn btn-sm btn-secondary" data-method="scaleX" data-option="-1"
                                title="Flip Horizontal"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;scaleX&quot;, -1)"> <i class="icofont-exchange"></i>
                                </span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="scaleY" data-option="-1"
                                title="Flip Vertical"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;scaleY&quot;, -1)"> <i class="icofont-expand-alt"></i>
                                </span></button>

                            <button type="button" class="btn btn-sm btn-secondary" data-method="crop" title="Crop">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                                    <i class="icofont-checked"></i> </span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="clear" title="Clear">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                                    <i class="icofont-ui-delete"></i> </span></button>

                            <button type="button" class="btn btn-sm btn-secondary" data-method="disable"
                                title="Disable"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;disable&quot;)"> <i class="icofont-lock"></i>
                                </span></button>
                            <button type="button" class="btn btn-sm btn-secondary" data-method="enable" title="Enable">
                                <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;enable&quot;)"> <i class="icofont-unlock"></i>
                                </span></button>

                            <button type="button" class="btn btn-sm btn-secondary" data-method="reset" title="Reset">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                                    <i class="icofont-refresh"></i> </span></button>
                            <label class="btn btn-sm btn-secondary btn-upload" for="inputImage"
                                title="Upload image file">
                                <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs"> <i
                                        class="icofont-upload"></i> </span>
                            </label>
                            <button type="button" class="btn btn-sm  btn-secondary" data-method="destroy"
                                title="Destroy"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;destroy&quot;)"> <i class="icofont-power"></i>
                                </span></button>

                            <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas"
                                data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal"> <span
                                    class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;)"> Get Cropped Canvas </span>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas"
                                data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal"
                                data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }"> <span
                                    class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                    160&times;90 </span> </button>
                            <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas"
                                data-bs-toggle="modal" data-bs-target="#getCroppedCanvasModal"
                                data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }"> <span
                                    class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                    320&times;180 </span> </button>

                            <button type="button" class="btn btn-secondary" data-method="getData" data-option
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getData&quot;)"> Get Data </span> </button>
                            <button type="button" class="btn btn-secondary" data-method="setData"
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;setData&quot;, data)"> Set Data </span> </button>
                            <button type="button" class="btn btn-secondary" data-method="getContainerData" data-option
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getContainerData&quot;)"> Get Container Data </span>
                            </button>
                            <button type="button" class="btn btn-secondary" data-method="getImageData" data-option
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getImageData&quot;)"> Get Image Data </span> </button>
                            <button type="button" class="btn btn-secondary" data-method="getCanvasData" data-option
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getCanvasData&quot;)"> Get Canvas Data </span> </button>
                            <button type="button" class="btn btn-secondary" data-method="setCanvasData"
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;setCanvasData&quot;, data)"> Set Canvas Data </span>
                            </button>
                            <button type="button" class="btn btn-secondary" data-method="getCropBoxData" data-option
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;getCropBoxData&quot;)"> Get Crop Box Data </span> </button>
                            <button type="button" class="btn btn-secondary" data-method="setCropBoxData"
                                data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip"
                                    title="$().cropper(&quot;setCropBoxData&quot;, data)"> Set Crop Box Data </span>
                            </button>
                            <button type="button" class="btn btn-secondary" data-method="moveTo" data-option="0"> <span
                                    class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)"> 0,0 </span>
                            </button>
                            <button type="button" class="btn btn-secondary" data-method="zoomTo" data-option="1"> <span
                                    class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)"> 100% </span>
                            </button>
                            <button type="button" class="btn btn-secondary" data-method="rotateTo" data-option="180">
                                <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)"> 180°
                                </span> </button>
                            <input type="text" class="form-control" id="putData"
                                placeholder="Get data to here or set data with this value">
                        </div>
                        <div class="col-lg-5 col-md-12 docs-toggles">
                            <!-- .btn groups -->
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio"
                                        value="1.7777777777777777">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9"> 16:9
                                    </span> </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio"
                                        value="1.3333333333333333">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3"> 4:3
                                    </span> </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1"> 1:1
                                    </span> </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio"
                                        value="0.6666666666666666">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3"> 2:3
                                    </span> </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio"
                                        value="NaN">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN"> Free
                                    </span> </label>
                            </div>
                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0"
                                        checked>
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0"> VM0 </span>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1"> VM1 </span>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2"> VM2 </span>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3"> VM3 </span>
                                </label>
                            </div>
                            <div class="dropdown dropup docs-options">
                                <button type="button" class="btn btn-success btn-block dropdown-toggle"
                                    id="toggleOptions" data-bs-toggle="dropdown" aria-expanded="true"> Toggle Options
                                    <span class="caret"></span> </button>

                                <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="responsive" checked> responsive </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="restore" checked> restore </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="checkCrossOrigin" checked> checkCrossOrigin
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="checkOrientation" checked> checkOrientation
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="modal" checked> modal </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="guides" checked> guides </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="center" checked> center </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="highlight" checked> highlight </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="background" checked> background </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="autoCrop" checked> autoCrop </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="movable" checked> movable </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="rotatable" checked> rotatable </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="scalable" checked> scalable </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="zoomable" checked> zoomable </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="zoomOnTouch" checked> zoomOnTouch </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="zoomOnWheel" checked> zoomOnWheel </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="cropBoxMovable" checked> cropBoxMovable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="cropBoxResizable" checked> cropBoxResizable
                                        </label>
                                    </li>
                                    <li role="presentation">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                                            toggleDragModeOnDblclick </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- Row end  -->
                </div>
            </div>
        </div>
    </div><!-- Row end  -->

</div>
@endsection

@push('modals')
<!-- Modal Cropper-->
<div class="modal docs-cropped" id="getCroppedCanvasModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cropped</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);"
                    download="cropped.jpg') !!}">Download</a>

            </div>
        </div>
    </div>
</div>
@endpush

@push('styles')
<!--plugin css file -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/multi-select/css/multi-select.css') !!}">
<!-- Multi Select Css -->
<link rel="stylesheet"
    href="{!! asset('public/backend/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}">
<!-- Bootstrap Tagsinput Css -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/cropper/cropper.min.css') !!}">
<!--Cropperer Css -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
<!-- Dropify Css -->
<link rel="stylesheet"
    href="{!! asset('public/backend/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<!-- Datatable Css -->
<link rel="stylesheet"
    href="{!! asset('public/backend/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
<!-- Datatable Css -->
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Jquery Plugin -->
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
<script src="{!! asset('public/backend/dist/assets/plugin/multi-select/js/jquery.multi-select.js') !!}"></script>
<!-- Multi Select Plugin Js -->
<script src="{!! asset('public/backend/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>
<!-- Bootstrap Tags Input Plugin Js -->
<script src="{!! asset('public/backend/dist/assets/plugin/cropper/cropper.min.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/plugin/cropper/cropper-init.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/bundles/dataTables.bundle.js') !!}"></script>
@endpush

@push('custom_scripts')

<script>
$(document).ready(function() {
    //Ch-editer
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    //Datatable
    $('#myCartTable')
        .addClass('nowrap')
        .dataTable({
            responsive: true,
            columnDefs: [{
                targets: [-1, -3],
                className: 'dt-body-right'
            }]
        });
    $('.deleterow').on('click', function() {
        var tablename = $(this).closest('table').DataTable();
        tablename
            .row($(this)
                .parents('tr'))
            .remove()
            .draw();

    });
    //Multiselect
    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });
});

$(function() {
    $('.dropify').dropify();

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
            replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'DÃ©solÃ©, le fichier trop volumineux'
        }
    });
});
</script>
@endpush