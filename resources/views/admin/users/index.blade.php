@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')

@section('content')
<div class="container-fluid" >
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
                            <div class="col-md-6 col-12 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="icon mr-2">
                                    <!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                    <path fill="#ff371d" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                </svg>
                                <h3 class="mt-2 text-dark fw-bold">Users</h3>
                            </div>



                            <div class="col-md-6 col-12 text-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
                                    <i class="fas fa-plus"></i> Add New User
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-1">
                        <table class="table table-sm table-hover mb-0"  id="users-table"  style="overflow-x: scroll; max-width: 100%;" >
                            <thead>
                                <tr>
                                    <th class="btn" scope="col">Action</th>
                                    <th scope="col">Role</th>
                                    <th class="username" scope="col">First Name</th>
                                    <th class="username" scope="col">Middle Name</th>
                                    <th class="username" scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Street</th>
                                    <th scope="col">Barangay</th>
                                    <th scope="col">City</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-sm edit-user-btn"  data-toggle="modal" data-target="#editUserModal{{ $user->id }}"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="confirmDeleteUser({{ $user->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        @if ($user->role_id == 1)
                                        <span class="badge badge-primary">Admin</span>
                                        @elseif ($user->role_id == 2)
                                            <span class="badge badge-success">Customer</span>
                                        @elseif ($user->role_id == 3)
                                            <span class="badge badge-warning">Chef</span>
                                        @elseif($user->role_id == 4)
                                            <span class="badge badge-info">Staff</span>
                                        @else
                                            <span class="badge badge-secondary">Unknown</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->middle_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->contact_number }}</td>
                                    <td>{{ $user->street }}</td>
                                    <td>{{ $user->barangay }}</td>
                                    <td>{{ $user->city }}</td>
                                </tr>
                                @include('admin.users.partials._edit_user_modal', ['user' => $user])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script>
    new DataTable('#users-table');
</script>
@include('admin.users.partials._script')
@include('admin.users.partials._add_user_modal')
@include('admin.users.partials._edit_user_modal')
@endsection

