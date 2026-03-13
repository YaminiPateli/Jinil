@extends('admin.layouts.app')

@section('title', 'Edit Faq')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Faq</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('faq.update', $faq->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $faq->id }}"/>

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Faq Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
                        
                        <div class="col-md-6">
                            <label class="form-label">Select Main Title</label>
                                <select class="form-select" name="name" aria-label="Default select example">
                                    <option value="General Information" @if($faq->name ==
                                            'General Information') selected="selected" @endif>General Information</option>
                                    <option value="Machines & Technology" @if($faq->name == 
                                        'Machines & Technology') selected="selected" @endif>Machines & Technology</option>
                                    <option value="Customization & Engineering" @if($faq->name == '
                                            Customization & Engineering') selected="selected" @endif>Customization & Engineering</option>
                                     <option value="Installation & Support" @if($faq->name == '
                                            Installation & Support') selected="selected" @endif>Installation & Support</option>
                                     <option value="Quality, Safety & Compliance" @if($faq->name == '
                                            Quality, Safety & Compliance') selected="selected" @endif>Quality, Safety & Compliance</option>
                                        <option value="Others" @if($faq->name == 'Others
                                            ') selected="selected" @endif>Others</option>
                                    </select>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                        <div class="card-body">
                            @php
                                $faqBlocks = is_array($faq->title_description)
                                    ? $faq->title_description
                                    : json_decode($faq->title_description, true);
                                    
                                $faqBlocks = $faqBlocks ?? [];
                            @endphp
                                <div class="card mb-4 border">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <strong>FAQ Title & Description</strong>
                                        <button type="button" id="addFaqBlock" class="btn btn-sm btn-success">+ Add More</button>
                                    </div> 
                                <div class="card-body" id="faqRepeater">
                                    @forelse ($faqBlocks as $block)
                                        <div class="faqGroup border rounded p-3 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Title </label>
                                                <input type="text" name="faq_title[]" class="form-control" value="{!! $block['faq_title'] ?? '' !!}" >
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description </label>
                                                <textarea name="faq_description[]" class="form-control summernote" rows="4" >{!! $block['faq_description'] ?? '' !!}</textarea>
                                            </div>
                                            <div class="text-end">
                                                <button type="button" class="btn btn-danger removeFaq">Remove</button>
                                            </div>
                                        </div>
                                    @empty
                                                    {{-- Show one empty block if nothing stored --}}
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
                                    @endforelse
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
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Dropify JS -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script>
$(document).ready(function() {
    $('.dropify').dropify();
    $('#description,#slider_description').summernote({
        placeholder: 'Enter Description here...',
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
    $('#detail_description').summernote({
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
});
</script>
<script>
    function addImageInput() {
        const container = document.getElementById('imageInputs');
        const html = `
            <div class="row mb-3">
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
                    <textarea name="cta_description[]" class="form-control summernote" placeholder="Enter CTA Description" rows="2"></textarea>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger" onclick="removeInput(this)">Remove</button>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        $('.summernote').summernote({
            placeholder: 'Enter CTA Description here...',
            height: 150,
        });
    }

    // Initialize Summernote for existing elements
    $(document).ready(function () {
        $('.summernote').summernote({
            placeholder: 'Enter CTA Description here...',
            height: 150,
        });
    });
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