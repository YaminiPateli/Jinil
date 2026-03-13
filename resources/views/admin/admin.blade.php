@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-xxl">

    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
            <div class="alert-success alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-dollar fa-lg"></i>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">Categories</div>
                        <span class="small">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="alert-danger alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i
                            class="fa fa-credit-card fa-lg"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">Products</div>
                        <span class="small">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="alert-warning alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-smile-o fa-lg"></i>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">Blogs</div>
                        <span class="small">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="alert-info alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-shopping-bag"
                            aria-hidden="true"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">New StoreOpen</div>
                        <span class="small">8,925</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row end  -->



</div>
@endsection
@push('styles')
<!-- plugin css file  -->
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush

@push('custom_styles')
@endpush

@push('scripts')
<!-- Plugin Js -->
<script src="{!! asset('public/admin_public/dist/assets/bundles/apexcharts.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/js/page/index.js') !!}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap">
</script>
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
</script>
@endpush