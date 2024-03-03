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
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <i class="fas fa-solid fa-users"></i>
                            Packages
                        </div>
                        <div class="col-md-6 col-12 text-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addPackageModal">
                                <i class="fas fa-plus"></i> Add New Package
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <table class="table table-sm table-hover mb-0" id="packages-table">
                        <caption>Packages Table</caption>
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages as $package)
                            <tr>
                                {{-- <td>{{ $package->id }}</td> --}}
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->type }}</td> <!-- Display type as plain text -->
                                <td>{{ $package->description }}</td>
                                <td>{{ '₱' . number_format($package->price, 2) }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm edit-user-btn" data-toggle="modal" data-target="#editPackageModal{{ $package->id }}"><i class="fas fa-edit"></i></a>


                                    {{-- <a href="{{ route('packages.show', $package->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a> --}}
                                    <form action="{{ route('package.destroy', $package->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @include('admin.package.partial.edit_package_modal', ['package' => $package])
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#packages-table').DataTable();
    });
</script>


@include('admin.package.partial.add_package_modal')
@endsection