@extends('admin.layouts.app')

@section('title', 'Product Edit')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Product Edit</h3>
                <!--<button type="submit"-->
                <!--    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>-->
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('product.update',$product->id) }}">
            @csrf
            @method('PATCH')
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Product Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}" 
                                                {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->category }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $product->title }}" placeholder="Product Title">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                 <div class="col-md-6">
                                    <label class="form-label">Url</label>
                                    <input type="text" id="url" name="url" class="form-control"
                                        value="{{ $product->url }}" placeholder="Product Url">
                                </div>

                                 <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ $product->name }}" placeholder="Product Name">
                                </div>

                                <div class="col-md-6">
                                    <label for="file" class="form-label">Images</label>
                                    <input type="file" class="form-control" name="front_image" id="front_image">
                                    @if ($errors->has('front_image'))
                                    <span class="text-danger">{{ $errors->first('front_image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if($product->front_image)
                                        <img 
                                            src="{{ asset('public/Product/front_image/' . $product->front_image) }}" 
                                            alt="Product Image"
                                            style="width:120px; height:auto; border:1px solid #ddd; padding:5px;">
                                    @endif

                                </div>
                                <div class="col-md-12">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea id="short_description" name="short_description" class="form-control">{!! $product->short_description !!}</textarea>
                                </div>

                                 <div class="col-md-6">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" id="meta_title" name="meta_title" class="form-control"
                                        value="{{ $product->meta_title }}" placeholder="Product Meta Title">
                                </div>
                                <div class="col-md-12">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description" class="form-control">{!! $product->meta_description !!}</textarea>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="yearpicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
<link rel="stylesheet" href="{{ asset('public/admin_public/plugins/daterangepicker/daterangepicker.css') }}">
<!-- Cropper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<!--plugin css file -->
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/multi-select/css/multi-select.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}">
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/multi-select/js/jquery.multi-select.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}">
</script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>

<script src="{{ asset('public/admin_public/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="yearpicker.js" ></script>
<script>
    $(document).ready(function () {
    $('#year').datepicker({
        format: "yyyy",          
        viewMode: "years",       
        minViewMode: "years",    
        autoclose: true,         
        // startDate: "1900",       
        // endDate: new Date().getFullYear().toString(),
        orientation: "bottom",
        container: 'body',
        appendTo: 'body',
    });

    
});
</script>


<script>
$(document).ready(function() {
    $('#meta_description,#short_description').summernote({
        placeholder: 'Enter here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
});


</script>
@endpush
