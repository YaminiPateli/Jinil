@extends('admin.layouts.app')

@section('title', 'CaseStudy Listing')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center 
                        px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">CaseStudy Listing</h3>
                <a href="{{ route('casestudy.create') }}" class="btn btn-primary">+ Add CaseStudy</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="GET" action="{{ route('casestudy.index') }}" class="mb-3">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Search by CaseStudy Title"
                       value="{{ $search ?? '' }}">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>

            @if(!empty($search))
            <div class="col-md-2">
                <a href="{{ route('casestudy.index') }}" class="btn btn-secondary w-100">
                    Reset
                </a>
            </div>
            @endif
        </div>
    </form>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($casestudy as $key => $val)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $val->title }}</td>
                             <td style="width:80px;">
                                @if($val->image)
                                    <img src="{{ asset('public/casestudyImage/'.$val->image) }}"
                                         class="img-thumbnail"
                                         style="width:60px;height:60px;object-fit:cover;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('casestudy.edit', $val->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('casestudy.destroy', $val->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this manufacture?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="3" class="text-center">No CaseStudy Found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $casestudy->appends(['search' => $search])->links() }}
        </div>
    </div>
</div>
@endsection
