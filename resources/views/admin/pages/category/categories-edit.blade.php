@extends(backendView('layouts.app'))

@section('title', 'Categories Edit')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Categories Edit</h3>
                <button type="submit"
                    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
            </div>
        </div>
    </div> <!-- Row end  -->

    <div class="row g-3 mb-3">
        <div class="col-lg-4">
            <div class="sticky-lg-top">
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
                        <h6 class="m-0 fw-bold">Publish Schedule</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Publish Date</label>
                                <input type="date" class="form-control w-100" value="2018-03-13">
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
                        <h6 class="m-0 fw-bold">Categories</h6>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Parent category Select</label>
                        <select class="form-select" size="3" aria-label="size 3 select example">
                            <option selected>Watch</option>
                            <option value="2">Clothes</option>
                            <option value="3">Toy</option>
                            <option value="4">Cosmetic</option>
                            <option value="5">Laptop</option>
                            <option value="6">Mobile</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header py-3 bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Categories Image Upload</h6>
                        <small>With event and default file try to remove the image</small>
                    </div>
                    <div class="card-body">
                        <input type="file" id="dropify-event"
                            data-default-file="assets/images/product/Cropimg.jpg') !!}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Basic information</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="Watch">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Page Title</label>
                                <input type="text" class="form-control" value="Fossil Watch">
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
                                    <h1>Where can I get some?</h1>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Integer vitae leo quis urna pulvinar tristique..</li>
                                        <li>In porttitor sem at ligula vehicula, at scelerisque lectus placerat.</li>
                                        <li>Nullam ornare risus ac tellus ullamcorper rhoncus.</li>
                                        <li>Nam dictum neque et velit fermentum blandit.</li>
                                        <li>Vivamus congue metus sit amet sapien pulvinar tincidunt.</li>
                                        <li>Nullam ornare risus ac tellus ullamcorper rhoncus.</li>
                                    </ul>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries </p>
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
                                    src="{!! asset('public/backend/dist/assets/images/product/Cropimg.jpg') !!}"
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
                        <div class="col-lg-8 col-md-12 docs-buttons">
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
                        <div class="col-lg-4 col-md-12 docs-toggles">
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

@push('styles')
<!--plugin css file -->
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/cropper/cropper.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Jquery Plugin -->
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
<script src="{!! asset('public/backend/dist/assets/plugin/cropper/cropper.min.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/plugin/cropper/cropper-init.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/bundles/dropify.bundle.js') !!}"></script>
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
    //Deleterow
    $("#tbproduct").on('click', '.deleterow', function() {
        $(this).closest('tr').remove();
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