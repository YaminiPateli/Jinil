@extends('admin.layouts.app')

@section('title', 'Services List')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center mb-4">
        <div class="col">
            <h3 class="fw-bold mb-0">Services</h3>
        </div>
        <div class="col-auto">
            <a href="{{ route('service.create') }}" class="btn btn-primary">
                <i class="icofont-plus-circle me-1"></i> Add New Service
            </a>
        </div>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('service.index') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Search by title..." value="{{ request('search') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
            @if(request('search'))
            <div class="col-md-2">
                <a href="{{ route('service.index') }}" class="btn btn-secondary w-100">Reset</a>
            </div>
            @endif
        </div>
    </form>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>URL</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>
                                @if($service->front_image)
                                    <img src="{{ asset('service/' . $service->front_image) }}" alt="" width="60" class="rounded">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td><strong>{{ $service->title }}</strong></td>
                            <td>{{ $service->category->category ?? '—' }}</td>
                            <td><code>/services/{{ $service->url }}</code></td>
                            <td class="text-end">
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-sm btn-outline-success me-1">
                                    <i class="icofont-edit"></i>
                                </a>
                                <form action="{{ route('service.destroy', $service->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this service?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="icofont-ui-delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No services found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $services->appends(request()->query())->links() }}
            </div>
        </div>
    </div>

</div>
@endsection