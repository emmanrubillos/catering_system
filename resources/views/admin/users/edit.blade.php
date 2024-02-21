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
                                    <div class="card-header">
                                        <h4>Edit User</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="middle_name">Middle Name</label>
                                                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input type="text" class="form-control" id="contact" name="contact" value="{{ $user->contact }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Role</label>
                                                <input type="text" class="form-control" id="address" name="address" value="{{ $user->role }}">
                                                <select name="role" id="role" class="form-control">
                                                    <option value="" disabled>Select a Role</option>
                                                    <option value="1" {{ $user->role_id === 1 ? 'selected' : '' }}>Staff</option>
                                                    <option value="2" {{ $user->role_id === 2 ? 'selected' : '' }}>Cook</option>
                                                    <option value="3" {{ $user->role_id === 3 ? 'selected' : '' }}>Customer</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
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
