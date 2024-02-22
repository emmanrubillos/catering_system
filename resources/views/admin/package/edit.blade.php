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
                        <h3 class="page-title mt-3">Edit Package</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fas fa-user"></i> Edit Package</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('packages.update', $package->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $package->name }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $package->type }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $package->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $package->price }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
