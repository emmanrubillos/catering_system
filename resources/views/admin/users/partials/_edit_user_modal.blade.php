<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModal{{ $user->id }} Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="iconmodal"  >
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff371d" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z"/>
                </svg>
                <h5 class="modal-title" id="editUserModalLabel"></i>Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for editing user -->
                <form id="editUserForm{{ $user->id }}" action="{{ route('users.update', $user->id) }}" method="POST" id="user-update-form" onclick="confirmEditUser({{ $user->id }})">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="contact_number">Contact</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number"  value="{{ $user->contact_number }}" maxlength="11">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Street</label>
                                <input type="text" class="form-control" id="street" name="street" value="{{ $user->street }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Barangay</label>
                                <input type="text" class="form-control" id="barangay" name="barangay" value="{{ $user->barangay }}">
                            </div>
                            <div class="form-group">
                                <label for="address">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}">
                            </div>
                            <div class="form-group">
                                <label for="role_id">Role</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="" disabled>Select a Role</option>
                                    <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>Staff</option>
                                    <option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>Chef</option>
                                    <option value="4" {{ $user->role_id == 4 ? 'selected' : '' }}>Customer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update-submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
