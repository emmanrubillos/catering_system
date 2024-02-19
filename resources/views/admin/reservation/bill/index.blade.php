
@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')

@section('content')
<div class="container-fluid">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <div class="row justify-content-center">
                        </div>

                        <h3 class="page-title mt-3"> Good Morning </h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Your are in the BILL</li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <i class="fas fa-solid fa-users"></i>
                                    Customer Bill
                                </div>
                                {{-- <div class="col-md-6 col-12 text-right">

                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body p-1">
                            <table class="table table-sm table-hover mb-0" id="users-table">
                              <thead>
                                <tr>


                                  <th scope="col">ID</th>

                                  <th scope="col">Package type</th>
                                  <th scope="col">Additional</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Payment Method</th>
                                  <th scope="col">Status</th>



                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- @include('admin.users.partials._datatables-scripts') --}}
@endsection
