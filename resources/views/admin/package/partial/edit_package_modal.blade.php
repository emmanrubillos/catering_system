 <!-- Edit Modal -->
<div class="modal fade" id="editPackageModal{{ $package->id }}" tabindex="-1" role="dialog" aria-labelledby="editPackageModalLabel{{ $package->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPackageModalLabel">Edit Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPackageForm{{ $package->id }}" action="{{ route('package.update', ['package' => $package->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $package->name }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="Pax" @if($package->type == 'Pax') selected @endif>Pax</option>
                            <option value="Package" @if($package->type == 'Package') selected @endif>Package</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control tinymce-editor" id="description" name="description" rows="3">{{ $package->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₱</span>
                            </div>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $package->price }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-secondary" id="cancelEdit">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Add event listener for form submission
        $(document).on("submit", "#editPackageForm{{ $package->id }}", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Submit the form via AJAX
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Show success message with SweetAlert
                    Swal.fire({
                        title: 'Success!',
                        text: "Package has been updated successfully.",
                        icon: 'success'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reload the page after the SweetAlert is closed
                            location.reload();
                        }
                    });
                },
                error: function(error) {
                    // Show error message with SweetAlert
                    Swal.fire({
                        title: 'Error!',
                        text: "Failed to update the package.",
                        icon: 'error'
                    });
                }
            });
        });

        // Add event listener for cancel button
        $(document).on("click", "#cancelEdit", function() {
            // Show confirmation SweetAlert
            Swal.fire({
                title: 'Are you sure?',
                text: "Your changes will not be saved.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel',
                cancelButtonText: 'No, keep editing'
            }).then((result) => {
                // If user confirms cancel, close the modal
                if (result.isConfirmed) {
                    $('#editPackageModal{{ $package->id }}').modal('hide');
                } else {
                    // If user cancels the action, show a message
                    Swal.fire({
                        title: 'Cancelled',
                        text: 'The package update has been cancelled.',
                        icon: 'info',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to the index page
                            window.location.href = "{{ route('package.index') }}";
                        }
                    });
                }
            });
        });
    });
</script>
