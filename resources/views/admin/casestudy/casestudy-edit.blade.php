@extends('admin.layouts.app')

@section('title', 'Edit CaseStudy')

@section('content')
<div class="container-xxl">
    <h3>Edit CaseStudy</h3>
    <form method="POST" enctype="multipart/form-data" action="{{ route('casestudy.update', $casestudy->id) }}">
        @csrf
        @method('PUT')

        <div class="card mb-3 p-3">
            <div class="row g-3 align-items-center mt-2">
                
                <div class="col-md-6">
                    <label class="form-label"> Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $casestudy->title }}">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
               
                <div class="col-md-6">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control dropify">
                    @if($casestudy->image)
                        <img src="{{ asset('public/casestudyImage/'.$casestudy->image) }}" width="80" class="mt-2">
                    @endif
                    @if ($errors->has('files'))
                        <span class="text-danger">{{ $errors->first('files') }}</span>
                    @endif
                </div>

                <div class="col-md-12">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea id="short_description" name="short_description" class="form-control">{!! $casestudy->short_description !!}</textarea>
                </div>

                <div class="col-md-12">
                    <label for="quote_description" class="form-label">Quote Description</label>
                    <textarea id="quote_description" name="quote_description" class="form-control">{!! $casestudy->quote_description !!}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>

<script>
$(document).ready(function() {
    $('#quote_description,#short_description').summernote({
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

