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
                                <label for="name" class="fw-bold">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="type" class="fw-bold">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="" selected disabled>Select a Type</option>
                                    <option value="Package">Package</option>
                                    <option value="Pax">Pax</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number_of_person" class="fw-bold">Number of Person</label>
                                <input type="text" class="form-control" placeholder="Number of person" id="number_of_person" name="number_of_person">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="fw-bold">Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter a description ...." name="description" id="description" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price" class="fw-bold">Price</label>
                                <input type="string" class="form-control" placeholder="Put a Prize" id="price" name="price">
                            </div>
                        </div>
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

