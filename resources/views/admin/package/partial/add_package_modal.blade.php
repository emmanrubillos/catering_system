<!-- Add Package Modal -->
<div class="modal fade" id="addPackageModal" tabindex="-1" role="dialog" aria-labelledby="addPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addPackageModalLabel"><i class="fas fa-user"></i> Add Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addPackageForm" action="{{ route('package.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="" selected disabled>Select a Type</option>
                            <option value="Pax">Pax</option>
                            <option value="Package">Package</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control tinymce-editor" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₱</span>
                            </div>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('package.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Add event listener for form submission
        $("#addPackageForm").submit(function(event) {
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
                        text: "Package has been added successfully.",
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
                        text: "Failed to add the package.",
                        icon: 'error'
                    });
                }
            });
        });

        // Add event listener for cancel button
        $(".btn-secondary").click(function() {
            // Show confirmation SweetAlert
            Swal.fire({
                title: 'Are you sure?',
                text: "Any entered data will be lost.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel',
                cancelButtonText: 'No, keep adding',
                allowOutsideClick: false // Prevents closing the modal when clicking outside
            }).then((result) => {
                // If user confirms cancel, navigate to another page or perform another action
                if (result.isConfirmed) {
                    // For example, redirect to the index page
                    window.location.href = "{{ route('package.index') }}";
                }
            });

            return false; // Prevent default action of the cancel button
        });
    });
</script>


