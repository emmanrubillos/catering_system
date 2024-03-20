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
                                <h3 class="mt-2 ml-2 text-dark fw-bold">Inclusions</h3>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-success" data-toggle="modal" data-target="#addInclusionModal">
                                    <i class="fas fa-plus"></i> Add Inclusion
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <table class="table table-sm table-hover mb-0"  id="inclusions-table"  style="overflow-x: scroll; max-width: 100%;" >
                        <thead>
                            <tr>
                                <th class="btn" scope="col">Action</th>
                                <th scope="col">Name</th>
                                <th scope="col">Classification</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inclusions as $inclusion)
                            <tr>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm edit-user-btn"  data-toggle="modal" data-target=""><i class="fas fa-edit"></i></a>

                                    <form action="" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $inclusion->name }}</td>
                                <td>
                                    @if ($inclusion->classification_id == 1)
                                    <span class="badge badge-primary">Chicken</span>
                                    @elseif ($inclusion->classification_id == 2)
                                        <span class="badge badge-success">Beef</span>
                                    @elseif ($inclusion->classification_id == 3)
                                        <span class="badge badge-warning">Pork</span>
                                    @elseif($inclusion->classification_id == 4)
                                        <span class="badge badge-info">Fish</span>
                                    @else
                                        <span class="badge badge-secondary">Unknown</span>
                                    @endif
                                </td>
                                <td>{{ $inclusion->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    new DataTable('#inclusions-table');
</script>

@include('admin.service.partials._script')
@include('admin.inclusion.partials._add_inclusion_modal')
@endsection