@extends('admin.partials.navbar')
@extends('admin.partials.sidebar')
@section('content')

<div class="container-fluid">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header mt-5">
                <div class="row">
                    <div class="modal-body">
                        <a href="{{ route('service.index') }}" class="float-end">
                            <button type="button" class="btn btn-primary">Back</button>
                        </a>
                        <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fw-bold bg-primary text-white px-4 py-1 rounded">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter name" id="add-service-name" name="name" value="{{ $service->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="fw-bold bg-primary text-white px-4 py-1 rounded">Type</label>
                                        <select name="type" id="add-service-type" class="form-control">
                                            <option value="" selected disabled>Select a Type</option>
                                            <option value="Package"{{ $service->type === "Package" ? ' selected' : '' }}>Package</option>
                                            <option value="Pax"{{ $service->type === "Pax" ? ' selected' : '' }}>Pax</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="number_of_person" class="fw-bold bg-primary text-white px-4 py-1 rounded">Number of Person</label>
                                        <input type="number" class="form-control" placeholder="Number of person" id="add-service-number_of_person" name="number_of_person" value="{{ $service->number_of_person }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="fw-bold bg-primary text-white px-4 py-1 rounded">Description</label>
                                        <textarea type="text" class="form-control" placeholder="Enter a description ...." name="description" id="add-service-description" rows="5">{{ $service->description }}</textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="price" class="fw-bold bg-primary text-white px-4 py-1 rounded">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary text-wrap text-white rounded-end fw-bold">₱</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Enter the Price" id="add-service-price" name="price" value="{{ $service->price }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <hr>
                        
                            {{-- If Package is the Type --}}
                            <div class="col px-0 mb-4 overflow-auto add-scroll" style="height:300px;">
                                
                                <div class="firstContianer">
                                    <div class="col">
                                        <h5 class="fw-bold bg-primary text-white px-4 py-1 rounded text-center">
                                            Courses of a Meal
                                        </h5> 
                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col p-0">
                                                    <div class="form-group">
                                                        {{-- <label for="main_dish" class="badge ">Number of:</label> --}}
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" placeholder="Number of" name="main_dish" id="add-service-main_dish" rows="5" value="{{ $service->main_dish }}"></input>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-primary text-wrap text-white rounded-end fw-bold">Main Dish</span>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" placeholder="Number of" name="side_dish" id="add-service-side_dish" rows="5" value="{{ $service->side_dish }}"></input>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-primary text-wrap text-white rounded-end fw-bold">Side Dish</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($classifications as $classification)
                                    <div class="secondContainer">
                                        <div class="col">
                                            <h5 class="fw-bold bg-primary text-white px-4 py-1 rounded text-center">
                                                {{ $classification['name'] }}
                                            </h5>  
                                            
                                            <div class="row">
                        
                                            @foreach ($classification['classifications'] as $classItem)    
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="dessert" class="badge bg-primary text-wrap">
                                                            {{ $classItem['classification']['name'] }}
                                                        </label>
                                                        <div>
                                                            <!-- Display inclusions here -->
                                                            @foreach ($classItem['inclusions'] as $inclusion)
                                                            {{-- @php
                                                                dd($inclusion);
                                                            @endphp --}}
                                                                <div class="form-check edit-check-form">
                                                                    @if (is_array($service->service_inclusion_ids) && in_array($inclusion['id'], $service->service_inclusion_ids))
                                                                    <input checked class="service-checkbox form-check-input" type="checkbox" id="add-inclusion-check" name="inclusion_id[]" value="{{ $inclusion['id'] }}">
                                                                        {{ $inclusion['name'] }}
                                                                    @else
                                                                    <input class="service-checkbox form-check-input" type="checkbox" id="add-inclusion-check" name="inclusion_id[]" value="{{ $inclusion['id'] }}">
                                                                    {{ $inclusion['name'] }}
                                                                    <label class="form-check-label fw-bold add-bg-checkbox" for="inclusion_id{{ $inclusion['id'] }}"> 
                                                                    </label>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('service.index') }}" class="float-end">
                                    <button type="button" class="btn btn-primary">Back</button>
                                </a>
                                <button type="submit" class="btn btn-primary fw-bold" id="update-submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection