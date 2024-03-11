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
                                        <th style="width:16%">Name</th>
                                        <th style="width:18%">Type</th>
                                        <th style="width:17%">Food & Catering</th>
                                        <th style="width:16%;">Decoration</th>
                                        <th style="width:25%;">Others</th>
                                    </tr>
                                </thead>
                                <tbody class="border border-0">
                                    <tr>
                                        <td class="fw-bold">Sample Package</td>
                                        <td>
                                            <div class="d-flex flex-column gap-1">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Whole Set Attire
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Floral Ensemble
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Beauty Service
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column gap-1">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Foods
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Catering
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Freebies
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column gap-1">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Church
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Reception
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column gap-1">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Photography & Videography
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Full Coordination
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <button class="btn-primary btn-sm badge text-bg-primary text-wrap">
                                                            Program & Entertainment
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success btn-sm edit-user-btn">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        
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