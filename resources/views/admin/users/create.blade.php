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
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h4><i class="fas fa-user"></i> Add New User</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('users.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name</label>
                                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="middle_name">Middle Name</label>
                                                        <input type="text" class="form-control" id="middle_name" name="middle_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contact_number">Contact</label>
                                                        <input type="string" class="form-control" id="contact_number" name="contact_number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address">
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>

                                                
                                                <div class="form-group">
                                                    <label for="temp_password">Temporary Password</label>
                                                    <input type="password" class="form-control" id="temp_password" name="temp_password">
                                                </div>

                                                @if ($errors->any())
                                                     <div class="alert alert-danger">
                                                        <ul class="p-0 m-0">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                             @endforeach
                                                    </ul>
                                                </div>
                                                @endif

                                                <div class="form-group">
                                                    <label for="role_id">Role</label>
                                                    <select name="role_id" id="role_id" class="form-control">
                                                        <option value="" selected disabled>Select a Role</option>
                                                        <option value="0">Admin</option>
                                                        <option value="1">Staff</option>
                                                        <option value="2">Cook</option>
                                                        <option value="3">Customer</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                                                <a href="{{ back()->getTargetUrl() }}" class="btn btn-secondary btn-sm">Cancel</a>
                                            </div>
                                        </form>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="p-0 m-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
