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
                                <button class="btn btn-success fw-bold" data-toggle="modal" data-target="#addServiceModal">
                                    <i class="fas fa-plus"></i> Add Services
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="service-table" class="table table-striped" style="width:100%">
                                <thead class="border border-0">
                                    <tr>
                                        <th style="width:25%;">Action</th>
                                        <th style="width:16%">Name</th>
                                        <th style="width:15%">Type</th>
                                        <th style="width:13%;">Price</th>
                                        <th style="width:15%;">Number of Person</th>
                                    </tr>
                                </thead>
                                <tbody class="border border-0">
                                    @foreach($services as $service)
                                    <tr>
                                        <td>
                                            <a href="{{ route('service.edit', ['service' => $service->id]) }}" class="btn btn-primary btn-sm edit-service-btn" 
                                            data-toggle="modal" data-target="#editServiceModal{{ $service->id }}"><i class="fas fa-edit"></i></a>
    
                                            <form action="{{ route('service.destroy', $service->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" onclick="confirmDeleteService({{ $service->id }})">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                            <a href="#" class="btn btn-warning btn-sm edit-service-btn" data-toggle="modal" data-target="#"><i class="fas fa-eye text-white"></i></a>
                                        </td>
                                        <td class="fw-bold">{{ $service->name }}</td>
                                        <td>
                                            <span class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                {{ $service->type }}
                                            </span>
                                        </td>
                                        <td class="fw-bold">₱ {{ $service->price }}</td>
                                        <td class="fw-bold">{{ $service->number_of_person }} Pax</td>

                                        @include('admin.service.partials._script')
                                        @include('admin.service.partials._edit_service_modal')
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script>
    new DataTable('#service-table');
</script>


@include('admin.service.partials._add_service_modal')

@endsection