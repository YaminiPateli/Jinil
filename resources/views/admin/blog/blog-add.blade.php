@extends('admin.layouts.app')

@section('title', 'Blog Add')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Blog Add</h3>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('blog.store') }}">
            @csrf
            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Blog Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">

                        <div class="col-md-6">
                            <label class="form-label">Blog Title</label>
                            <input type="text" id="title" name="title" required class="form-control">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="short_description" class="form-label">Blog Short description</label>
                            <textarea id="short_description" name="short_description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Blog Description</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="date" class="form-label">Blog Date</label>
                            <input type="date" id="date" name="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Blog Url</label>
                            <input type="text" id="url" name="url" required class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="front_image">Blog Front Image</label>
                            <input type="file" id="front_image" name="front_image" class="form-control">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label" for="image">Blog Detail Image</label>
                            <input type="file" id="detail_image" name="detail_image" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label for="" class="form-label">Blog CTA Text</label>
                            <textarea id="cta_text" name="cta_text" class="form-control"></textarea>
                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label" for="cta_image">Blog CTA Image</label>
                            <input type="file" id="cta_image" name="cta_image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea id="conclusion" name="conclusion" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
                        </div>
                        
                         <div class="card mb-4 border">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <strong>FAQ Title & Description</strong>
                                    <button type="button" id="addFaqBlock" class="btn btn-sm btn-success">+ Add More</button>
                            </div>
                            <div class="card-body" id="faqRepeater">
                                {{-- One FAQ block --}}
                                <div class="faqGroup border rounded p-3 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="faq_title[]" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description </label>
                                        <textarea name="faq_description[]" class="form-control summernote" rows="4" ></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-danger removeFaq">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
    </form>
</div>
</div>
@endsection

@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

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


<script>
$(document).ready(function() {
    $('#description').summernote({
        placeholder: 'Enter Blog Description here...',
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
    $('#short_description').summernote({
        placeholder: 'Enter Blog Short Description here...',
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
    $('#cta_text').summernote({
        placeholder: 'Enter Blog CTA Text here...',
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
    $('#meta_description').summernote({
        placeholder: 'Enter Meta Description here...',
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
    $('#conclusion').summernote({
        placeholder: 'Enter Conclusion here...',
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
    $('.summernote').summernote({
        placeholder: 'Enter CTA Text here...',
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
<script>
    function addImageInput() {
    const container = document.getElementById('imageInputs');
    const div = document.createElement('div');
    div.classList.add('row', 'mb-3');

    const randomId = 'summernote-' + Math.floor(Math.random() * 100000);

    div.innerHTML = `
        <div class="col-md-6 mb-2">
            <input type="file" name="cta_image[]" class="form-control">
        </div>
        <div class="col-md-6 mb-2">
            <input type="text" name="cta_alt[]" class="form-control" placeholder="Enter Alt Here">
        </div>
        <div class="col-md-6 mb-2">
            <input type="text" name="cta_title[]" class="form-control" placeholder="Enter CTA Title">
        </div>
        <div class="col-md-12 mb-2">
            <textarea id="${randomId}" name="cta_description[]" class="form-control summernote" placeholder="Enter CTA Description" rows="2"></textarea>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-danger" onclick="removeInput(this)">Remove</button>
        </div>
    `;

    container.appendChild(div);

    $('#' + randomId).summernote({
        placeholder: 'Enter CTA Description here...',
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
}

function removeInput(button) {
    const container = document.getElementById('imageInputs');
    const rows = container.querySelectorAll('.row.mb-3');
    if (rows.length > 1) {
        button.closest('.row').remove();
    } else {
        alert("At least one CTA block must remain.");
    }
}

</script>

<script>
    $(document).ready(function () {
        // Initialize Summernote
        $('.summernote').summernote({
            height: 200,
            placeholder: 'Enter Description here...'
        });

        // Add More
        $('#addFaqBlock').click(function () {
            let block = `
                <div class="faqGroup border rounded p-3 mb-3">
                    <div class="mb-3">
                        <label class="form-label">Title </label>
                        <input type="text" name="faq_title[]" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description </label>
                        <textarea name="faq_description[]" class="form-control summernote" rows="4" ></textarea>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-danger removeFaq">Remove</button>
                    </div>
                </div>
            `;
            $('#faqRepeater').append(block);
            
            // Re-init summernote for new textareas
            $('.summernote').summernote({
                height: 200,
                placeholder: 'Enter Description here...'
            });
        });

        // Remove block
        $(document).on('click', '.removeFaq', function () {
            $(this).closest('.faqGroup').remove();
        });
    });
</script>
@endpush