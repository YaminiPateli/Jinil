@extends('admin.layouts.app')

@section('title', 'Certificate Add')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Certificate Add</h3>
                <!--<button type="submit"-->
                <!--    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>-->
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('certificate.store') }}">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-lg-12Certificate">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Certificate Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Select Main Title</label>
                                    <select class="form-select" name="cat_title" aria-label="Default select example">
                                        <option value="All Categories">All Categories</option>
                                        <option value="All Machine Types">All Machine Types</option>
                                        <option value="All Industries">All Industries</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @if ($errors->has('cat_title'))
                                    <span class="text-danger">{{ $errors->first('cat_title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Certificates Title">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3"
                                        placeholder="Enter certificate description here..."></textarea>
                                    @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <label for="file" class="form-label">Files</label>
                                    <input type="file" class="form-control" name="files" id="files">
                                    @if ($errors->has('files'))
                                    <span class="text-danger">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- Row end  -->
            <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/cropper/cropper.min.css') !!}">
<link rel="stylesheet" href="{!! asset('public/backend/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
<script src="{!! asset('public/backend/dist/assets/plugin/cropper/cropper.min.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/plugin/cropper/cropper-init.js') !!}"></script>
<script src="{!! asset('public/backend/dist/assets/bundles/dropify.bundle.js') !!}"></script>
@endpush

@push('custom_scripts')
<script>
$(document).ready(function() {
    $('#description').summernote({
        placeholder: 'Enter description here...',
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

