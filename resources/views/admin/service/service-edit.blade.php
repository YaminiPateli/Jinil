@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Service: {{ $service->title }}</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('service.update', $service->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                        <!-- Same basic fields as add -->
                        <div class="col-md-6">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">-- Select --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ $service->category_id == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->servicecategory }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    <div class="col-md-6">
                        <label class="form-label">Title *</label>
                        <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">URL Slug *</label>
                        <input type="text" name="url" class="form-control" value="{{ $service->url }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Display Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $service->name }}">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Front Image</label>
                        <input type="file" name="front_image" class="form-control" accept="image/*">
                        @if($service->front_image)
                            <div class="mt-2">
                                <img src="{{ asset('service/' . $service->front_image) }}" alt="Current" width="180" class="img-thumbnail">
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Short Description</label>
                        <textarea name="short_description" class="form-control" rows="4">{{ $service->short_description }}</textarea>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Commissioning / Main Description</label>
                        <textarea name="commissioning_description" id="commissioning_description" class="form-control summernote">{!! $service->commissioning_description !!}</textarea>
                    </div>

                    <!-- Meta -->
                    <div class="col-md-6">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $service->meta_title }}">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">{{ $service->meta_description }}</textarea>
                    </div>

                    <!-- Stats Section -->
                    <div class="col-12 mt-5">
                        <h5>Statistics Section</h5>
                        <div id="stats_wrapper">
                            @forelse($service->stats_section ?? [] as $idx => $item)
                            <div class="row mb-3 stats_row">
                                <div class="col-md-3">
                                    <input type="text" name="stats_section[{{ $idx }}][number]" class="form-control" value="{{ $item['number'] ?? '' }}" required>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="stats_section[{{ $idx }}][label]" class="form-control" value="{{ $item['label'] ?? '' }}" required>
                                </div>
                                <div class="col-md-3">
                                    <textarea name="stats_section[{{ $idx }}][icon]" class="form-control" rows="3">{{ $item['icon'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-danger btn-sm remove-row">Remove</button>
                                </div>
                            </div>
                            @empty
                            <!-- Empty fallback -->
                            <div class="row mb-3 stats_row">
                                <div class="col-md-3"><input type="text" name="stats_section[0][number]" class="form-control" placeholder="Number" required></div>
                                <div class="col-md-5"><input type="text" name="stats_section[0][label]" class="form-control" placeholder="Label" required></div>
                                <div class="col-md-3"><textarea name="stats_section[0][icon]" class="form-control" rows="3" placeholder="Icon/SVG"></textarea></div>
                                <div class="col-md-1"><button type="button" class="btn btn-success btn-sm add_stat">Add</button></div>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Process Section -->
                    <div class="col-12 mt-5">
                        <h5>Why Professional Installation Matters</h5>
                        <div id="process_wrapper">
                            @forelse($service->process_section ?? [] as $idx => $item)
                            <div class="row mb-3 process_row">
                                <div class="col-md-3">
                                    <input type="text" name="process_section[{{ $idx }}][title]" class="form-control" value="{{ $item['title'] ?? '' }}">
                                </div>
                                <div class="col-md-4">
                                    <textarea name="process_section[{{ $idx }}][svg_code]" class="form-control" rows="5">{{ $item['svg_code'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="process_section[{{ $idx }}][description]" class="form-control process_desc" rows="5">{!! $item['description'] ?? '' !!}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-danger btn-sm remove-row">Remove</button>
                                </div>
                            </div>
                            @empty
                            <!-- fallback -->
                            @endforelse
                        </div>
                    </div>

                    <!-- Scope Section -->
                    <div class="col-12 mt-5">
                        <h5>Installation Service Scope Steps</h5>
                        <div id="scope_wrapper">
                            @forelse($service->scope_section ?? [] as $idx => $item)
                            <div class="row mb-3 scope_row">
                                <div class="col-md-3">
                                    <input type="text" name="scope_section[{{ $idx }}][title]" class="form-control" value="{{ $item['title'] ?? '' }}">
                                </div>
                                <div class="col-md-4">
                                    <textarea name="scope_section[{{ $idx }}][svg_code]" class="form-control" rows="4">{{ $item['svg_code'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <textarea name="scope_section[{{ $idx }}][description]" class="form-control scope_desc" rows="5">{!! $item['description'] ?? '' !!}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-danger btn-sm remove-row">Remove</button>
                                </div>
                            </div>
                            @empty
                            <!-- fallback -->
                            @endforelse
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary px-5">Update Service</button>
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
    $('#commissioning_description').summernote({ height: 300 });

    $('.process_desc, .scope_desc').summernote({ height: 180 });

    // Add Stat row (same as add blade)
    let statIndex = {{ count($service->stats_section ?? []) + 1 }};
    $(document).on('click', '.add_stat', function() {
        $('#stats_wrapper').append(`
            <div class="row mb-3 stats_row">
                <div class="col-md-3"><input type="text" name="stats_section[${statIndex}][number]" class="form-control" placeholder="Number" required></div>
                <div class="col-md-5"><input type="text" name="stats_section[${statIndex}][label]" class="form-control" placeholder="Label" required></div>
                <div class="col-md-3"><textarea name="stats_section[${statIndex}][icon]" class="form-control" rows="3" placeholder="Icon/SVG"></textarea></div>
                <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></div>
            </div>
        `);
        statIndex++;
    });

    // Add Process row
    let processIndex = {{ count($service->process_section ?? []) + 1 }};
    $(document).on('click', '.add_process', function() {
        $('#process_wrapper').append(`
            <div class="row mb-3 process_row">
                <div class="col-md-3"><input type="text" name="process_section[${processIndex}][title]" class="form-control"></div>
                <div class="col-md-4"><textarea name="process_section[${processIndex}][svg_code]" class="form-control" rows="5"></textarea></div>
                <div class="col-md-4"><textarea name="process_section[${processIndex}][description]" class="form-control process_desc" rows="5"></textarea></div>
                <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></div>
            </div>
        `);
        $('.process_desc').last().summernote({ height: 180 });
        processIndex++;
    });

    // Add Scope row
    let scopeIndex = {{ count($service->scope_section ?? []) + 1 }};
    $(document).on('click', '.add_scope', function() {
        $('#scope_wrapper').append(`
            <div class="row mb-3 scope_row">
                <div class="col-md-3"><input type="text" name="scope_section[${scopeIndex}][title]" class="form-control"></div>
                <div class="col-md-4"><textarea name="scope_section[${scopeIndex}][svg_code]" class="form-control" rows="4"></textarea></div>
                <div class="col-md-4"><textarea name="scope_section[${scopeIndex}][description]" class="form-control scope_desc" rows="5"></textarea></div>
                <div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></div>
            </div>
        `);
        $('.scope_desc').last().summernote({ height: 180 });
        scopeIndex++;
    });

    // Remove any row
    $(document).on('click', '.remove-row', function() {
        $(this).closest('.row').remove();
    });
});
</script>
@endpush