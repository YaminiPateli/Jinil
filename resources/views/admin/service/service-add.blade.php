@extends('admin.layouts.app')

@section('title', 'Add New Service')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Add New Service</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                    <!-- Basic Info -->
                    <div class="col-md-6">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->servicecategory }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Title *</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">URL Slug *</label>
                        <input type="text" name="url" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Display Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Front Image</label>
                        <input type="file" name="front_image" class="form-control" accept="image/*">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Short Description</label>
                        <textarea name="short_description" class="form-control" rows="4"></textarea>
                    </div>

                    <!-- Commissioning Description (main rich text) -->
                    <div class="col-md-12">
                        <label class="form-label">Commissioning / Main Description (rich text)</label>
                        <textarea name="commissioning_description" id="commissioning_description" class="form-control summernote"></textarea>
                    </div>

                    <!-- Meta Fields -->
                    <div class="col-md-6">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Stats Section (dynamic counters) -->
                    <div class="col-12 mt-5">
                        <h5>Statistics Section (500+, 30+ years, etc.)</h5>
                        <div id="stats_wrapper">
                            <div class="row mb-3 stats_row">
                                <div class="col-md-3">
                                    <input type="text" name="stats_section[0][number]" class="form-control" placeholder="Number e.g. 500+" required>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="stats_section[0][label]" class="form-control" placeholder="Label e.g. Machines Delivered" required>
                                </div>
                                <div class="col-md-3">
                                    <textarea name="stats_section[0][icon]" class="form-control" rows="3" placeholder="SVG code or font-awesome class e.g. fas fa-industry"></textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-success btn-sm add_stat">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process / Why Matters Section (cards with SVG) -->
                    <div class="col-12 mt-5">
                        <h5>Why Professional Installation Matters (cards)</h5>
                        <div id="process_wrapper">
                            <div class="row mb-3 process_row">
                                <div class="col-md-3">
                                    <input type="text" name="process_section[0][title]" class="form-control" placeholder="Title">
                                </div>
                                <div class="col-md-4">
                                    <textarea name="process_section[0][svg_code]" class="form-control" rows="5" placeholder="Full <svg>...</svg> code"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="process_section[0][description]" class="form-control process_desc" rows="5" placeholder="Description (rich)"></textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-success btn-sm add_process">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scope Section (numbered steps) -->
                    <div class="col-12 mt-5">
                        <h5>Installation Service Scope (01, 02, ... steps)</h5>
                        <div id="scope_wrapper">
                            <div class="row mb-3 scope_row">
                                <div class="col-md-3">
                                    <input type="text" name="scope_section[0][title]" class="form-control" placeholder="Step Title">
                                </div>
                                <div class="col-md-4">
                                    <textarea name="scope_section[0][svg_code]" class="form-control" rows="4" placeholder="Optional SVG code"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="scope_section[0][description]" class="form-control scope_desc" rows="5" placeholder="Step description (rich)"></textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-success btn-sm add_scope">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary px-5">Save Service</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    // Main description
    $('#commissioning_description').summernote({
        height: 300,
        placeholder: 'Enter detailed description here...'
    });

    // Dynamic rich text fields
    $('.process_desc, .scope_desc').summernote({
        height: 180,
        placeholder: 'Enter content...'
    });

    // Stats - add row
    let statIndex = 1;
    $('.add_stat').click(function() {
        $('#stats_wrapper').append(`
            <div class="row mb-3 stats_row">
                <div class="col-md-3"><input type="text" name="stats_section[${statIndex}][number]" class="form-control" placeholder="Number e.g. 500+" required></div>
                <div class="col-md-5"><input type="text" name="stats_section[${statIndex}][label]" class="form-control" placeholder="Label" required></div>
                <div class="col-md-3"><textarea name="stats_section[${statIndex}][icon]" class="form-control" rows="3" placeholder="SVG or icon class"></textarea></div>
                <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></div>
            </div>
        `);
        statIndex++;
    });

    // Process - add row
    let processIndex = 1;
    $('.add_process').click(function() {
        $('#process_wrapper').append(`
            <div class="row mb-3 process_row">
                <div class="col-md-3"><input type="text" name="process_section[${processIndex}][title]" class="form-control" placeholder="Title"></div>
                <div class="col-md-4"><textarea name="process_section[${processIndex}][svg_code]" class="form-control" rows="5" placeholder="SVG code"></textarea></div>
                <div class="col-md-4"><textarea name="process_section[${processIndex}][description]" class="form-control process_desc" rows="5" placeholder="Description"></textarea></div>
                <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></div>
            </div>
        `);
        $('.process_desc').last().summernote({ height: 180 });
        processIndex++;
    });

    // Scope - add row
    let scopeIndex = 1;
    $('.add_scope').click(function() {
        $('#scope_wrapper').append(`
            <div class="row mb-3 scope_row">
                <div class="col-md-3"><input type="text" name="scope_section[${scopeIndex}][title]" class="form-control" placeholder="Step Title"></div>
                <div class="col-md-4"><textarea name="scope_section[${scopeIndex}][svg_code]" class="form-control" rows="4" placeholder="SVG"></textarea></div>
                <div class="col-md-4"><textarea name="scope_section[${scopeIndex}][description]" class="form-control scope_desc" rows="5" placeholder="Description"></textarea></div>
                <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></div>
            </div>
        `);
        $('.scope_desc').last().summernote({ height: 180 });
        scopeIndex++;
    });

    // Remove row (common for all sections)
    $(document).on('click', '.remove-row', function() {
        $(this).closest('.row').remove();
    });
});
</script>
@endpush