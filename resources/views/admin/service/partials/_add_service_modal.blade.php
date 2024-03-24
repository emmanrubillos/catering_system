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
                                <input type="text" class="form-control" placeholder="Enter name" id="add-service-name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="type" class="fw-bold">Type</label>
                                <select name="type" id="add-service-type" class="form-control">
                                    <option value="" selected disabled>Select a Type</option>
                                    <option value="Package">Package</option>
                                    <option value="Pax">Pax</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number_of_person" class="fw-bold">Number of Person</label>
                                <input type="number" class="form-control" placeholder="Number of person" id="add-service-number_of_person" name="number_of_person">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="fw-bold">Description</label>
                                <textarea type="text" class="form-control" placeholder="Enter a description ...." name="description" id="add-service-description" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price" class="fw-bold">Price</label>
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

                    <div class="col px-0 mb-4 overflow-auto add-scroll" style="height:300px;">
                        <div class="col">
                            <h5 class="fw-bold">
                                Foods & Catering
                            </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="main_dish" class="badge bg-success text-wrap">Number of Main Dish:</label>
                                            <div class="d-flex flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 45px;" class="mr-2">
                                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#198754" d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/>
                                                </svg>
                                                <input type="number" class="form-control" placeholder="Main Dish" name="main_dish" id="add-service-main_dish" rows="5"></input>
                                            </div>    
                                        </div>
                                        <div class="form-group">
                                            <label for="side_dish" class="badge bg-success text-wrap">Number of Side Dish:</label>
                                            <div class="d-flex flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 45px;" class="mr-2">
                                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#198754" d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/>
                                                </svg>
                                                <input type="number" class="form-control" placeholder="Side Dish" name="side_dish" id="add-service-side_dish" rows="5"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="dessert" class="badge bg-success text-wrap">Round of Rice:</label>
                                            <div class="d-flex flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 45px;" class="mr-2">
                                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#198754" d="M0 192c0-35.3 28.7-64 64-64c.5 0 1.1 0 1.6 0C73 91.5 105.3 64 144 64c15 0 29 4.1 40.9 11.2C198.2 49.6 225.1 32 256 32s57.8 17.6 71.1 43.2C339 68.1 353 64 368 64c38.7 0 71 27.5 78.4 64c.5 0 1.1 0 1.6 0c35.3 0 64 28.7 64 64c0 11.7-3.1 22.6-8.6 32H8.6C3.1 214.6 0 203.7 0 192zm0 91.4C0 268.3 12.3 256 27.4 256H484.6c15.1 0 27.4 12.3 27.4 27.4c0 70.5-44.4 130.7-106.7 154.1L403.5 452c-2 16-15.6 28-31.8 28H140.2c-16.1 0-29.8-12-31.8-28l-1.8-14.4C44.4 414.1 0 353.9 0 283.4z"/>
                                                </svg>
                                                <input type="number" class="form-control" placeholder="Rice" name="rice" id="add-service-rice" rows="5"></input>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dessert" class="badge bg-success text-wrap">Round of Dessert:</label>
                                            <div class="d-flex flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 45px;" class="mr-2">
                                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#198754" d="M367.1 160c.6-5.3 .9-10.6 .9-16C368 64.5 303.5 0 224 0S80 64.5 80 144c0 5.4 .3 10.7 .9 16H80c-26.5 0-48 21.5-48 48s21.5 48 48 48h53.5 181H368c26.5 0 48-21.5 48-48s-21.5-48-48-48h-.9zM96 288L200.8 497.7c4.4 8.8 13.3 14.3 23.2 14.3s18.8-5.5 23.2-14.3L352 288H96z"/>
                                                </svg>
                                                <input type="number" class="form-control" placeholder="Dessert" name="dessert" id="add-service-dessert" rows="5"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="soft_drinks" class="badge bg-success text-wrap">Round of Soft Drinks:</label>
                                            <div class="d-flex flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 45px;" class="mr-2">
                                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#198754" d="M393.4 9.4c12.5-12.5 32.8-12.5 45.3 0l64 64c12.5 12.5 12.5 32.8 0 45.3c-11.8 11.8-30.7 12.5-43.2 1.9l-9.5 9.5-48.8 48.8c-9.2 9.2-11.5 22.9-8.6 35.6c9.4 40.9-1.9 85.6-33.8 117.5L197.3 493.3c-25 25-65.5 25-90.5 0l-88-88c-25-25-25-65.5 0-90.5L180.2 153.3c31.9-31.9 76.6-43.1 117.5-33.8c12.6 2.9 26.4 .5 35.5-8.6l48.8-48.8 9.5-9.5c-10.6-12.6-10-31.4 1.9-43.2zM99.3 347.3l65.4 65.4c6.2 6.2 16.4 6.2 22.6 0l97.4-97.4c6.2-6.2 6.2-16.4 0-22.6l-65.4-65.4c-6.2-6.2-16.4-6.2-22.6 0L99.3 324.7c-6.2 6.2-6.2 16.4 0 22.6z"/>
                                                </svg>
                                                <input type="number" class="form-control" placeholder="Soft Drinks" name="soft_drinks" id="add-service-soft_drinks" rows="5"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

