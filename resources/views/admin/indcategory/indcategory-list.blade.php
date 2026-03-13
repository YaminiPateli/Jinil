@extends('admin.layouts.app')

@section('title', 'indcategory List')

@section('content')

<div class="container-xxl">
<!-- Header -->
<div class="row align-items-center mb-4">
    <div class="col">
        <h3 class="fw-bold mb-0">indcategory</h3>
    </div>
    <div class="col-auto">
        <a href="{{ route('indcategory.create') }}" class="btn btn-primary">
            <i class="icofont-plus-circle me-1"></i> Add indcategory
        </a>
    </div>
</div>
<form method="GET" action="{{ route('indcategory.index') }}" class="mb-3">
    <div class="row g-2">
        <div class="col-md-4">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search indcategory"
                   value="{{ $search }}">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Search</button>
        </div>

        @if($search)
        <div class="col-md-2">
            <a href="{{ route('indcategory.index') }}" class="btn btn-secondary w-100">
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
                        <th>indcategory</th>
                        <th>Description</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($indcategory as $item)
                    <tr>

                        <td><strong>{{ $item->id }}</strong></td>

                        <td>
                            <strong>{{ $item->indcategory }}</strong>
                        </td>

                        <td>
                            {{ Str::limit(strip_tags($item->cat_description), 100) }}
                        </td>

                        <td class="text-end">

                            <a href="{{ route('indcategory.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-success">
                               <i class="icofont-edit"></i>
                            </a>

                            <form action="{{ route('indcategory.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this indcategory?');">

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
                            No indcategory found
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>
<div class="mt-3">
    {{ $indcategory->appends(['search'=>$search])->links() }}
</div>
</div>
@endsection
