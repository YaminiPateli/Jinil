@extends('admin.layouts.app')

@section('title', 'Certificate List')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center mb-3">
        <div class="col-md-6">
            <h3 class="fw-bold">Certificate List</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('certificate.create') }}" class="btn btn-primary">
                <i class="icofont-plus-circle me-1"></i> Add Certificate
            </a>
        </div>
    </div>

    <!-- Search -->
    <form method="GET" action="{{ route('certificate.index') }}" class="mb-3">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control"
                       placeholder="Search by category or title" value="{{ $search }}">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>
            @if($search)
            <div class="col-md-2">
                <a href="{{ route('certificate.index') }}" class="btn btn-secondary w-100">Reset</a>
            </div>
            @endif
        </div>
    </form>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cat Name</th>
                            <th>Title</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($certificate as $val)
                        <tr>
                            <td>{{ $val->id }}</td>
                            <td>{{ $val->cat_title }}</td>
                            <td>{{ $val->title }}</td>
                            <td class="text-end">
                                <a href="{{ route('certificate.edit', $val->id) }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="icofont-edit text-success"></i>
                                </a>
                                <form action="{{ route('certificate.destroy', $val->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-secondary btn-sm">
                                        <i class="icofont-ui-delete text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No records found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $certificate->appends(['search'=>$search])->links() }}
    </div>

</div>
@endsection
