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
                    <span aria-hidden="true">&times;</span>
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
                            <div class="form-group">
                                <label for="price" class="fw-bold bg-success text-white px-4 py-1 rounded">Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₱</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Enter the Price" id="add-service-price" name="price">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- <div class="col-md-3">
                        <div class="col p-0">
                            <div class="form-group">
                                <label for="main_dish" class="badge bg-success text-wrap">Number of Main Dish:</label>
                                <input type="number" class="form-control" placeholder="Main Dish" name="main_dish" id="add-service-main_dish" rows="5"></input>
                                </div>    
                            <div class="form-group">
                                <label for="side_dish" class="badge bg-success text-wrap">Number of Side Dish:</label>
                                <input type="number" class="form-control" placeholder="Side Dish" name="side_dish" id="add-service-side_dish" rows="5"></input>
                            </div>
                        </div>
                    </div> --}}

                    {{-- If Package is the Type --}}
                    <div class="col px-0 mb-4 overflow-auto add-scroll" style="height:300px;">
                        
                        @foreach ($classifications as $classification)
                            <div class="firstContainer">
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        {{-- <div class="secondContainer">
                            <div class="col">
                                <h5 class="fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                    WHOLE SET ENTOURAGE ATTIRE
                                </h5>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="dessert" class="badge bg-success text-wrap">Entourage Members:</label>
                                        <div>
                                            checklist here
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="dessert" class="badge bg-success text-wrap">Accessories:</label>
                                            <div>
                                                checklist here
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="thirdContainer col mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="add-text fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                        BOUQUET
                                    </h5>
                                    <label for="dessert" class="badge bg-success text-wrap">Entourage Members:</label>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h6 class="fw-bold bg-success text-white px-4 py-1 rounded text-center" >
                                        CORSAGE
                                    </h5>
                                    <label for="dessert" class="badge bg-success text-wrap">Entourage Members:</label>
                                    <div>
                                        checklist here
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="fourthContainer col mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <h6 class="add-text fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                        CHURCH DECORATION
                                    </h5>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h6 class="fw-bold bg-success text-white px-4 py-1 rounded text-center" >
                                        RECEPTION DECORATION
                                    </h5>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                                
                                <div class="col-4">
                                    <h6 class="fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                        PROGRAM & ENTERTAINMENT
                                    </h5>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        <div class="fivethContainer col mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="add-text fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                        PHOTOGRAPHIC & VIDEOGRAPHIC
                                    </h5>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h6 class="fw-bold bg-success text-white px-4 py-1 rounded text-center" >
                                        HAIR AND MAKE-UP
                                    </h5>
                                    <label for="dessert" class="badge bg-success text-wrap">Entourage Members:</label>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <div class="sixththContainer col mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="add-text fw-bold bg-success text-white px-4 py-1 rounded text-center">
                                        FULL COORDINATION
                                    </h5>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h6 class="fw-bold bg-success text-white px-4 py-1 rounded text-center" >
                                        FREEBIES
                                    </h5>
                                    <div>
                                        checklist here
                                    </div>
                                </div>
                        
                            </div>
                        </div> --}}
                    
                    
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fw-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success fw-bold" id="save-service-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

