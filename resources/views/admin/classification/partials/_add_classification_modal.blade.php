<!-- Modal -->
<div class="modal fade" id="addClassificationModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="iconmodal">
                    !--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>
                <h5 class="modal-title fw-bold" id="addClassificationModalLabel">Add Classification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('classification.store') }}" method="POST" id="create-classification-form">
                    @csrf
                    <div class="">
                        <div class="form-group">
                            <label class="fw-bold" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>

                    <div class=" align-items-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="save-classification-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

