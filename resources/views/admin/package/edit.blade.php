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
                        <h3 class="page-title mt-3">Create Package</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('packages.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="PackageA">Package A</option>
                                <option value="PackageB">Package B</option>
                                <option value="PackageC">Package C</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control tinymce-editor" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₱</span>
                                </div>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- TinyMCE Initialization Script --}}
{{-- {{-- <script src="https://cdn.tiny.cloud/1/aktu4cosyi162kexmhu2iy189dddff1gb22vte8vlumlctdi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script>
     tinymce.init({
        selector: 'textarea.tinymce-editor',
        plugins: 'autoresize',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code',
        // Add more configuration options as needed
    });
</script>
@endsection
