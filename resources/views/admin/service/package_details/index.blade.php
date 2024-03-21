@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')
@section('content')
<div class="container-fluid">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">

                    <div class="card col-sm-12 mt-5">
                        <div class="card-header breadcrumb-item active d-flex ">
                            <img width="46" height="46" src="https://img.icons8.com/pulsar-line/96/take-away-food.png"
                            alt="take-away-food"/>
                            <h3 class="mt-2 ml-2 text-dark fw-bold">Package Detials</h3>
                        </div>

                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead class="border border-0">
                                    <tr>
                                        <th style="width:16%;">Action</th>
                                        <th style="width:16%">Name</th>
                                        <th style="width:18%">Type</th>
                                        <th style="width:17%">More Detials</th>
                                    </tr>
                                </thead>
                                <tbody class="border border-0">
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
                                        <td  class="fw-bold">Sample Name</td>
                                        <td>Sample Type</td>
                                        <td>
                                            <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                View More Details
                                            </button>
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

<script>
    new DataTable('#example');
</script>
@endsection
