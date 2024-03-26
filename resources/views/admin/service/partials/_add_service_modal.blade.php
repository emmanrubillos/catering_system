<!-- Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title fw-bold" id="addUserModalLabel">
                    <img width="42" height="42" src="https://img.icons8.com/glyph-neue/64/restaurant-pickup.png" 
                    alt="restaurant-pickup" style="color: #ffffff;"/></i> 
                    Add Service
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="iconmodal">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm79 143c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('service.store') }}" method="POST" id="create-service-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="fw-bold bg-success text-white px-4 py-1 rounded">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" id="add-service-name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="type" class="fw-bold bg-success text-white px-4 py-1 rounded">Type</label>
                                <select name="type" id="add-service-type" class="form-control">
                                    <option value="" selected disabled>Select a Type</option>
                                    <option value="Package">Package</option>
                                    <option value="Pax">Pax</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number_of_person" class="fw-bold bg-success text-white px-4 py-1 rounded">Number of Person</label>
                                <input type="number" class="form-control" placeholder="Number of person" id="add-service-number_of_person" name="number_of_person">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="fw-bold bg-success text-white px-4 py-1 rounded">Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter a description ...." name="description" id="add-service-description" rows="5"></textarea>
                            </div>
                            <div class="form-group mt-4">
                                <label for="price" class="fw-bold bg-success text-white px-4 py-1 rounded">Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-wrap text-white rounded-end fw-bold">₱</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Enter the Price" id="add-service-price" name="price">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- If Package is the Type --}}
                    <div class="col px-0 mb-4 overflow-auto add-scroll" style="height:300px;">
                        
                        <div class="firstContianer">
                            <div class="col">
                                <h5 class="fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                    Courses of a Meal
                                </h5> 
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col p-0">
                                            <div class="form-group">
                                                {{-- <label for="main_dish" class="badge ">Number of:</label> --}}
                                                <div class="input-group">
                                                    <input type="number" class="form-control" placeholder="Number of" name="main_dish" id="add-service-main_dish" rows="5"></input>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-wrap text-white rounded-end fw-bold">Main Dish</span>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Number of" name="side_dish" id="add-service-side_dish" rows="5"></input>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-success text-wrap text-white rounded-end fw-bold">Side Dish</span>
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
                                    <h5 class="fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                        {{ $classification['name'] }}
                                    </h5>  
                                    
                                    <div class="row">

                                    @foreach ($classification['classifications'] as $classItem)    
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="dessert" class="badge bg-success text-wrap">
                                                    {{ $classItem['classification']['name'] }}
                                                </label>
                                                <div>
                                                    <!-- Display inclusions here -->
                                                    @foreach ($classItem['inclusions'] as $inclusion)
                                                        <div class="form-check">
                                                            <label class="form-check-label fw-bold add-bg-checkbox" for="inclusion_id{{ $inclusion['id'] }}">
                                                                <input class="form-check-input" type="checkbox" id="add-inclusion-check" name="inclusion_id[]" value="{{ $inclusion['id'] }}">
                                                                {{ $inclusion['name'] }} 
                                                            </label>
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
                        <button type="button" class="btn btn-secondary fw-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success fw-bold" id="save-service-btn">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

