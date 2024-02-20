
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
                    </div>
                    <div class="card ">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <i class="fas fa-solid fa-users"></i>
                                    Users
                                </div>
                                <div class="col-md-6 col-12 text-right">
                                    <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New User</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-1">
                            <table class="table table-sm table-hover mb-0" id="users-table">
                              <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Adress</th>
                                    <th scope="col">Role</th>
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