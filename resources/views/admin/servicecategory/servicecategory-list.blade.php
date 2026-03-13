@extends('admin.layouts.app')

@section('title', 'servicecategory List')

@section('content')

<div class="container-xxl">
<!-- Header -->
<div class="row align-items-center mb-4">
    <div class="col">
        <h3 class="fw-bold mb-0">servicecategory</h3>
    </div>
    <div class="col-auto">
        <a href="{{ route('servicecategory.create') }}" class="btn btn-primary">
            <i class="icofont-plus-circle me-1"></i> Add servicecategory
        </a>
    </div>
</div>
<form method="GET" action="{{ route('servicecategory.index') }}" class="mb-3">
    <div class="row g-2">
        <div class="col-md-4">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search servicecategory"
                   value="{{ $search }}">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Search</button>
        </div>

        @if($search)
        <div class="col-md-2">
            <a href="{{ route('servicecategory.index') }}" class="btn btn-secondary w-100">
                Reset
            </a>
        </div>
        @endif
    </div>
</form>
<div class="card">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>servicecategory</th>
                        <th>Description</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($servicecategory as $item)
                    <tr>

                        <td><strong>{{ $item->id }}</strong></td>

                        <td>
                            <strong>{{ $item->servicecategory }}</strong>
                        </td>

                        <td>
                            {{ Str::limit(strip_tags($item->cat_description), 100) }}
                        </td>

                        <td class="text-end">

                            <a href="{{ route('servicecategory.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-success">
                               <i class="icofont-edit"></i>
                            </a>

                            <form action="{{ route('servicecategory.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this servicecategory?');">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="icofont-ui-delete"></i>
                                </button>

                            </form>

                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            No servicecategory found
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>
<div class="mt-3">
    {{ $servicecategory->appends(['search'=>$search])->links() }}
</div>
</div>
@endsection
