<!-- Edit User Modal -->
    <div class="modal fade" id="editClassificationModal{{ $classification->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModal{{ $classification->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="iconmodal mr-2">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff"  d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                    </svg>
                    <h5 class="modal-title fw-bold" id="editClassificationModalLabel"></i>Edit Classification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="iconmodal">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm79 143c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing user -->
                    <form id="editClassificationForm{{ $classification->id }}" action="{{ route('classification.update', $classification->id) }}" method="POST" id="classification-update-form" onclick="confirmEditUser({{ $classification->id }})">

                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label class="fw-bold bg-primary text-white px-4 py-1 rounded" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $classification->name }}">
                                </div>
                                <div class="col-6 form-group">
                                    <label class="fw-bold bg-primary text-white px-4 py-1 rounded" for="group">Group</label>
                                    <input type="text" class="form-control" id="group" name="group" value="{{ $classification->group }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="fw-bold btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="fw-bold btn btn-primary" id="update-submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

