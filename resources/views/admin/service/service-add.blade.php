@extends('admin.layouts.app')

@section('title', 'service Add')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">service Add</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('service.store') }}">
            @csrf

            <div class="row g-3 mb-3">
                <div class="col-lg-12Industries">
                    <div class="card mb-3">

                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">service Details</h6>
                        </div>

                        <div class="card-body">
                            <div class="row g-3 align-items-center">

                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Url</label>
                                    <input type="text" id="url" name="url" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Images</label>
                                    <input type="file" class="form-control" name="front_image">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Short Description</label>
                                    <textarea id="short_description" name="short_description" class="form-control"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" id="meta_title" name="meta_title" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- ================= SCOPE SECTION ================= --}}

            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="fw-bold">Scope Section</h6>
                </div>

                <div class="card-body" id="scope_wrapper">

                    <div class="row mb-2 scope_row">

                        <div class="col-md-5">
                            <input type="text" name="scope_section[0][title]" class="form-control" placeholder="Title">
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="scope_section[0][description]" class="form-control"
                                placeholder="Description">
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-success add_scope">Add</button>
                        </div>

                    </div>

                </div>
            </div>


            {{-- ================= WHY CHOOSE SECTION ================= --}}

            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="fw-bold">Why Choose Section</h6>
                </div>

                <div class="card-body" id="why_wrapper">

                    <div class="row mb-2 why_row">

                        <div class="col-md-5">
                            <input type="text" name="whychoose_section[0][title]" class="form-control"
                                placeholder="Title">
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="whychoose_section[0][description]" class="form-control"
                                placeholder="Description">
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-success add_why">Add</button>
                        </div>

                    </div>

                </div>
            </div>


            {{-- ================= PROCESS SECTION ================= --}}

            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="fw-bold">Process Section</h6>
                </div>

                <div class="card-body" id="process_wrapper">

                    <div class="row mb-2 process_row">

                        <div class="col-md-5">
                            <input type="text" name="process_section[0][title]" class="form-control"
                                placeholder="Title">
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="process_section[0][description]" class="form-control"
                                placeholder="Description">
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-success add_process">Add</button>
                        </div>

                    </div>

                </div>
            </div>


            <button type="submit"
                class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>

        </form>
    </div>
</div>
@endsection
<script>

let scopeIndex = 1;

$('.add_scope').click(function(){

$('#scope_wrapper').append(

`<div class="row mb-2 scope_row">

<div class="col-md-5">
<input type="text" name="scope_section[${scopeIndex}][title]" class="form-control">
</div>

<div class="col-md-5">
<input type="text" name="scope_section[${scopeIndex}][description]" class="form-control">
</div>

<div class="col-md-2">
<button type="button" class="btn btn-danger remove">Remove</button>
</div>

</div>`

);

scopeIndex++;

});



let whyIndex = 1;

$('.add_why').click(function(){

$('#why_wrapper').append(

`<div class="row mb-2 why_row">

<div class="col-md-5">
<input type="text" name="whychoose_section[${whyIndex}][title]" class="form-control">
</div>

<div class="col-md-5">
<input type="text" name="whychoose_section[${whyIndex}][description]" class="form-control">
</div>

<div class="col-md-2">
<button type="button" class="btn btn-danger remove">Remove</button>
</div>

</div>`

);

whyIndex++;

});



let processIndex = 1;

$('.add_process').click(function(){

$('#process_wrapper').append(

`<div class="row mb-2 process_row">

<div class="col-md-5">
<input type="text" name="process_section[${processIndex}][title]" class="form-control">
</div>

<div class="col-md-5">
<input type="text" name="process_section[${processIndex}][description]" class="form-control">
</div>

<div class="col-md-2">
<button type="button" class="btn btn-danger remove">Remove</button>
</div>

</div>`

);

processIndex++;

});


$(document).on('click','.remove',function(){
$(this).closest('.row').remove();
});

</script>