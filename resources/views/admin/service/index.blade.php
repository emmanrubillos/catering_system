@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')
@section('content')
<div class="container-fluid">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="card col-sm-12 mt-5">
                        <div class="card-header breadcrumb-item active d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <img width="42" height="42" src="https://img.icons8.com/glyph-neue/64/restaurant-pickup.png" 
                                alt="restaurant-pickup"/>
                                <h3 class="mt-2 ml-2 text-dark fw-bold">Services</h3>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-success" data-toggle="modal" data-target="#addServiceModal">
                                    <i class="fas fa-plus mr-1"></i>
                                    Add Service
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead class="border border-0">
                                    <tr>
                                        <th style="width:16%">Name</th>
                                        <th style="width:10%">Type</th>
                                        <th style="width:10%;">Price</th>
                                        <th style="width:22%">Description</th>
                                        <th style="width:6%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="border border-0">
                                    <tr>
                                        <td class="fw-bold">Sample Package</td>
                                        <td>
                                            <span class="badge-info badge text-bg-primary text-wrap fs-6">
                                                Package
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge-success badge text-bg-primary text-wrap fs-6">
                                                ₱ 250,000.00
                                            </span>
                                        </td>
                                        <td>
                                            <p style="font-size: 12px" class="text-justify">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quia exercitationem 
                                                dignissimos harum commodi ea reiciendis deserunt......
                                            </p>
                                            <button class="btn-secondary btn-sm badge text-bg-primary text-wrap">
                                                Read more
                                            </button>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row gap-1">
                                                <button class="btn btn-primary btn-sm edit-user-btn">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
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
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
{{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script> --}}

@include('admin.service.partials._add_service_modal')

<script>
    new DataTable('#example');
</script>
@endsection