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
                        <h3 class="page-title mt-3">Good Morning</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">You are in the Package</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <i class="fas fa-solid fa-users"></i>
                            Package
                        </div>
                        <div class="col-md-6 col-12 text-right">
                            <a href="#" class="btn btn-success" id="toggle-package-form"><i class="fas fa-plus"></i> Add New Package</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1" id="package-form" style="display: none;">
                    <form action="{{ route('packages.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Package</button>
                    </form>
                </div>
                <div class="card-body p-1">
                    <table class="table table-sm table-hover mb-0" id="users-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Action</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>
                                <td>Package A</td>
                                <td>Type A</td>
                                <td>Description A</td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>
                                <td>Package B</td>
                                <td>Type B</td>
                                <td>Description B</td>
                                <td>$200</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Script to toggle the visibility of the package form
    document.getElementById('toggle-package-form').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('package-form').style.display = 'block';
    });
</script>
@endpush

