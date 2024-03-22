<!-- show User Modal -->
<div class="modal fade" id="showServiceModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="showServiceModal{{ $service->id }} Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="iconmodal"  >
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/>
                </svg>
                <h5 class="modal-title fw-bold text-white" id="showServiceModalLabel"></i>Show Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <h1 class="fw-bold">
                                {{ $service->name }}
                            </h2>
                        </div>
                        <div class="d-flex flex-row">
                            <span class="badge-primary badge-sm badge text-bg-primary text-wrap">
                                Type: {{ $service->type }} 
                            </span>
                            <span class="badge-primary badge-sm badge text-bg-primary text-wrap mx-3">
                                ₱ {{ $service->price }}
                            </span>
                            <span class="badge-primary badge-sm badge text-bg-primary text-wrap">
                                {{ $service->number_of_person }} PAX
                            </span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="description" class="fw-bold">Decription:</label>
                            <p>
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                </div>
                
                <hr>

                <div class="col px-0 mb-4 overflow-auto show-scroll" style="height: 300px;">
                    <div class="col px-0">
                        <h5 class="fw-bold">
                            Foods & Catering
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    3 Main Dish
                                </li>
                                <li>
                                    1 Side Dish
                                </li>
                                <li>
                                    1 Round Soft Drinks
                                </li>
                                <li>
                                    1 Round Soft Desserts
                                </li>
                                <li>
                                    1 Round Soft Rice
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Presidential Seated Buffet
                                </li>
                                <li>
                                    Couple Table Setup
                                </li>
                                <li>
                                    Parents Table Setup
                                </li>
                                <li>
                                    Presidential Table Setup
                                </li>
                                <li>
                                    Guest Table Setup
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col px-0">
                        <h5 class="fw-bold">
                            Chruch Decoration
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers Stand for Aisles (Ordinary)
                                </li>
                                <li>
                                    Red Carpet
                                </li>
                                <li>
                                    Bridal Car Decoration
                                </li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col px-0">
                        <h5 class="fw-bold">
                            Reception Decoration
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col px-0">
                        <h5 class="fw-bold">
                           Whole Set Entourage Attire
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col px-0">
                        <h5 class="fw-bold">
                           Whole Set Entourage Attire
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col px-0">
                        <h5 class="fw-bold">
                           Bouquet & Corsage
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col px-0">
                        <h5 class="fw-bold">
                           Program & Entertainment
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col px-0">
                        <h5 class="fw-bold">
                           Full Coordination
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col px-0">
                        <h5 class="fw-bold">
                          Photographic & Videographic 
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col px-0">
                        <h5 class="fw-bold">
                            Hair and Make-up
                        </h5>
                        <div class="row mx-2">
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                            <ul class="text-md col-5">
                                <li>
                                    Flowers
                                </li>
                                <li>
                                    Arch Entrance
                                </li>
                                <li>
                                    Candle for Matrimonial
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fw-bold" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
