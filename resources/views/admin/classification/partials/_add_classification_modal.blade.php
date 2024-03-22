<!-- Modal -->
<div class="modal fade" id="addClassificationModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="iconmodal mr-2">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <h5 class="modal-title fw-bold" id="addClassificationModalLabel">Add Classification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="iconmodal">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm79 143c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('classification.store') }}" method="POST" id="create-classification-form">
                    @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label class="fw-bold bg-success text-white px-4 py-1 rounded" for="name">Name</label>
                            <input type="text" class="form-control" id="add-classification-name" name="name" placeholder="Class Name">
                        </div>
                        <div class="col-6 form-group">
                            <label class="fw-bold bg-success text-white px-4 py-1 rounded" for="group">Group</label>
                            <input type="text" class="form-control" id="add-classification-group" name="group" placeholder="Class Group">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="fw-bold btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="fw-bold btn btn-success" id="save-classification-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

