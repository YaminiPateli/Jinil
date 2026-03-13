@extends('admin.layouts.app')

@section('title', 'Certificate Edit')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Certificate Edit</h3>
                <!--<button type="submit"-->
                <!--    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>-->
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('certificate.update',$certificate->id) }}">
            @csrf
            @method('PATCH')
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Certificate Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Select Main Title</label>
                                    <select class="form-select" name="cat_title" aria-label="Default select example">
                                        <option value="All Categories" @if($certificate->cat_title ==
                                            'All Categories') selected="selected" @endif>All Categories</option>
                                        <option value="All Industries" @if($certificate->cat_title == 
                                        'All Industries') selected="selected" @endif>All Industries</option>
                                        <option value="All Machine Types" @if($certificate->cat_title == 'All
                                            Machine Types') selected="selected" @endif>All Machine Types</option>
                                        <option value="Others" @if($certificate->cat_title == 'Others
                                            ') selected="selected" @endif>Others</option>
                                    </select>
                                    @if ($errors->has('cat_title'))
                                    <span class="text-danger">{{ $errors->first('cat_title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $certificate->title }}" placeholder="Certificates Title">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3"
                                        placeholder="Enter certificate description here...">{{ $certificate->description }}</textarea>
                                    @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>    
                                <div class="col-md-6">
                                    <label for="file" class="form-label">Files</label>
                                    <input type="file" class="form-control" name="files" id="files">
                                    @if ($errors->has('files'))
                                    <span class="text-danger">{{ $errors->first('files') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if($certificate->files)
                                    <a href="{!! asset('public/certificateFiles/' . $certificate->files) !!}"
                                        download><img style="width: 10%;"
                                            src="{!! asset('public/front/pdf-img.png') !!}">
                                             <span class="ms-2">{{ $certificate->files }}</span>
                                    </a>
                                    @endif
                                </div>
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
    $('#category_description').summernote({
        placeholder: 'Enter  here...',
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

    var $modal = $('#modalCrop');
    var image = document.getElementById('image');
    var cropper;

    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        if (files && files.length > 0) {
            var reader = new FileReader();
            reader.onload = function(e) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 3 / 2,
            viewMode: 3,
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $modal.modal('hide');
                $('#product_image').val(base64data);
            };
        });
    });
});

$(document).ready(function() {
    ClassicEditor.create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    $('#myCartTable').addClass('nowrap').dataTable({
        responsive: true,
        columnDefs: [{
            targets: [-1, -3],
            className: 'dt-body-right'
        }]
    });

    $('.deleterow').on('click', function() {
        var tablename = $(this).closest('table').DataTable();
        tablename.row($(this).parents('tr')).remove().draw();
    });

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