@extends(backendView('layouts.app'))

@section('title', 'Categories List')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Categorie List</h3>
                <a href="{!! backendRoutePut('categories-add') !!}"
                    class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i
                        class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a>
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Categorie</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#0001</strong></td>
                                <td>Watch</td>
                                <td>March 13, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0002</strong></td>
                                <td>Toy</td>
                                <td>January 14, 2021</td>
                                <td><span class="badge bg-warning">Scheduled</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0003</strong></td>
                                <td>Laptop</td>
                                <td>February 08, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0004</strong></td>
                                <td>Mobile</td>
                                <td>April 02, 2021</td>
                                <td><span class="badge bg-warning">Scheduled</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0005</strong></td>
                                <td>Tv</td>
                                <td>June 19, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0006</strong></td>
                                <td>Cloths</td>
                                <td>April 10, 2021</td>
                                <td><span class="badge bg-warning">Scheduled</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0007</strong></td>
                                <td>Footwear</td>
                                <td>May 11, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0008</strong></td>
                                <td>Kitchenware</td>
                                <td>June 13, 2021</td>
                                <td><span class="badge bg-danger">Hidden</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0009</strong></td>
                                <td>Beautywear</td>
                                <td>June 13, 2021</td>
                                <td><span class="badge bg-danger">Hidden</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0010</strong></td>
                                <td>Game accessories</td>
                                <td>February 13, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0011</strong></td>
                                <td>Flower Port</td>
                                <td>February 08, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0012</strong></td>
                                <td>Accessories</td>
                                <td>March 28, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#0013</strong></td>
                                <td>Bags</td>
                                <td>March 08, 2021</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <a href="{!! backendRoutePut('categories-edit') !!}"
                                            class="btn btn-outline-secondary"><i
                                                class="icofont-edit text-success"></i></a>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- plugin css file  -->
<link rel="stylesheet"
    href="{!! asset('public/backend/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/backend/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Plugin Js -->
<script src="{!! asset('public/backend/dist/assets/bundles/dataTables.bundle.js') !!}"></script>
@endpush

@push('custom_scripts')
<script>
$('#myDataTable')
    .addClass('nowrap')
    .dataTable({
        responsive: true,
        columnDefs: [{
            targets: [-1, -3],
            className: 'dt-body-right'
        }]
    });
$('.deleterow').on('click', function() {
    var tablename = $(this).closest('table').DataTable();
    tablename
        .row($(this)
            .parents('tr'))
        .remove()
        .draw();

});
</script>
@endpush

@push('modals')
@endpush