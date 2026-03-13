@extends('admin.layouts.app')

@section('title', 'Faq List')

@section('content')
<div class="container-xxl">

    <!-- Header -->
    <div class="row align-items-center mb-4">
        <div class="col">
            <h3 class="fw-bold mb-0">Faq</h3>
        </div>
        <div class="col-auto">
            <a href="{{ route('faq.create') }}" class="btn btn-primary">
                <i class="icofont-plus-circle me-1"></i> Add Faq
            </a>
        </div>
    </div>

    <!-- Search -->
    <form method="GET" action="{{ route('faq.index') }}" class="mb-3">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Search by Faq Name"
                       value="{{ $search }}">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>
            @if($search)
            <div class="col-md-2">
                <a href="{{ route('faq.index') }}" class="btn btn-secondary w-100">
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
                            <th>Title</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($faq as $item)
                        <tr>
                            <td><strong>{{ $item->id }}</strong></td>
                            <td>
                                <strong>{{ $item->name }}</strong>
                            </td>

                            <!-- Action -->
                            <td class="text-end">
                                <a href="{{ route('faq.edit', $item->id) }}"
                                   class="btn btn-sm btn-outline-success">
                                    <i class="icofont-edit"></i>
                                </a>

                                <form action="{{ route('faq.destroy', $item->id) }}"
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
                                No Faqs found
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
        {{ $faq->appends(['search' => $search])->links() }}
    </div>

</div>
@endsection
