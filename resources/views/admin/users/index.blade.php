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
                </div>
                    <div class="card">
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
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Action</th> <!-- Moved "Action" column to the last part -->
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Role</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($users as $user)
                                <tr>
                                    {{-- <td>{{ $user->id }}</td> --}}
                                    <td>
                                        {{-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a> --}}
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button> --}}
                                            <button  class="btn btn-sm btn-danger" onclick="confirmDeleteUser( {{$user->id}} )">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->middle_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->contact_number }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        @if ($user->role_id ==   1)
                                        <span class="badge badge-primary">Admin</span>
                                        @elseif ($user->role_id ==   2)
                                            <span class="badge badge-success">Staff</span>
                                        @elseif ($user->role_id ==   3)
                                            <span class="badge badge-warning">Chef</span>
                                        @elseif($user->role_id ==  4)
                                            <span class="badge badge-info">Customer</span>
                                        @else
                                            <span class="badge badge-secondary">Unknown</span>
                                        @endif
                                    </td> <!-- Assuming you have a role attribute in your User model -->
                                    
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
    <script>
        let table = new DataTable('#users-table');
    </script>
    @include('admin.users.partials._script')

@endsection
