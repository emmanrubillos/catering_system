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
                <!-- Form for showing user -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h2 class="fw-bold">
                                {{ $service->name }}
                            </h2>
                        </div>
                        <div class="d-flex flex-row">
                            <label for="type" class="fw-bold">Type:</label>
                            <span class="badge-primary badge-sm badge text-bg-primary text-wrap">
                                {{ $service->type }}
                            </span>
                        </div>
                        <div class="d-flex flex-row">
                            <label for="type" class="fw-bold">Prize:</label>
                            <span class="badge-primary badge-sm badge text-bg-primary text-wrap">
                                {{ $service->number_of_person }}
                            </span>
                        </div>
                        <div class="d-flex flex-row">
                            <label for="type" class="fw-bold">Pax:</label>
                            <span class="badge-primary badge-sm badge text-bg-primary text-wrap">
                                {{ $service->number_of_person }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="fw-bold">Decription:</label>
                            <p>
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="modal-footer">
                    <button type="button" class="badge badge-secondary fw-bold" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
