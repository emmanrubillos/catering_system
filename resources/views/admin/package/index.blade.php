{{-- @extends('admin.partials.navbar')
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
                        <h3 class="page-title mt-3">Package</h3>
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
                            <a href="{{ route('packages.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Package</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <table class="table table-sm table-hover mb-0" id="packages-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th> <!-- Added Actions column -->
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

  @include('admin.package.partial.datatables-script')

@endsection --}}
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
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <i class="fas fa-solid fa-users"></i>
                            Packages
                        </div>
                        <div class="col-md-6 col-12 text-right">
                            <a href="{{ route('packages.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Package</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <table class="table table-sm table-hover mb-0" id="packages-table">
                        <caption>Packages Table</caption>
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Actions</th> <!-- Added Actions column -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages as $package)
                            <tr>
                                {{-- <td>{{ $package->id }}</td> --}}
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->type }}</td>
                                <td>{{ $package->description }}</td>
                                <td>{{ $package->price }}</td>
                                <td>
                                    <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    {{-- <a href="{{ route('packages.show', $package->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a> --}}
                                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let table = new DataTable('#packages-table');
</script>
@endsection
