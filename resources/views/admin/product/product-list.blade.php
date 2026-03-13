@extends('admin.layouts.app')

@section('title', 'Product List')

@section('content')
<div class="container-xxl">

    <!-- Header -->
    <div class="row align-items-center mb-4">
        <div class="col">
            <h3 class="fw-bold mb-0">Product</h3>
        </div>
        <div class="col-auto">
            <a href="{{ route('product.create') }}" class="btn btn-primary">
                <i class="icofont-plus-circle me-1"></i> Add Product
            </a>
        </div>
    </div>

    <!-- Search -->
    <form method="GET" action="{{ route('product.index') }}" class="mb-3">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Search by Product Title"
                       value="{{ $search }}">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>
            @if($search)
            <div class="col-md-2">
                <a href="{{ route('product.index') }}" class="btn btn-secondary w-100">
                    Reset
                </a>
            </div>
            @endif
        </div>
    </form>

    <!-- Card -->
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Product Title</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($product as $item)
                        <tr>
                            <td><strong>{{ $item->id }}</strong></td>
                            <td style="width:80px;">
                                @if($item->front_image)
                                    <img src="{{ asset('public/Product/front_image/'.$item->front_image) }}"
                                         class="img-thumbnail"
                                         style="width:60px;height:60px;object-fit:cover;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <!-- Title -->
                            <td>
                                <strong>{{ $item->title }}</strong>
                            </td>

                            <!-- Action -->
                            <td class="text-end">
                                <a href="{{ route('product.edit', $item->id) }}"
                                   class="btn btn-sm btn-outline-success">
                                    <i class="icofont-edit"></i>
                                </a>

                                <form action="{{ route('product.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Are you sure?');">
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
                                No Product found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $product->appends(['search' => $search])->links() }}
    </div>

</div>
@endsection
