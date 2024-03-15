{{-- Sweet alert for the Edit User Button --}}
<script>
    $(document).ready(function() {
        // Add event listener for form submission
        $(document).on("submit", "#editUserForm{{ $user->id }}", function(event) {
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
                    $('#editUserForm{{ $user->id }}').modal('hide');
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

{{-- Sweet alert for the Delete User Button --}}
<script>
    function confirmDeleteUser(id){
        event.preventDefault();
        let userId = id;
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary'
            },
            
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure you want to delete this?',
            text: "You won't be able to revert this!",
            imageUrl: "{{ asset("assets/img/trash-icon.png") }}",
            imageHeight: 200,
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            reverseButtons: false
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    url: `/users/${userId}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: "Users has been deleted.",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Okay'
                        }).then(() => {
                            // Reload the page immediately after clicking "Okay"
                            location.reload();
                        });
                    },
                    error: function(error) {
                        // Handle error response
                        console.error('DELETE request failed:', error);
                    }
                });
            } else {
                result.dismiss == Swal.DismissReason.cancel;
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                );
            }
        })
    }
</script>
{{-- Sweet alert for the Add New User Button --}}
<script>
    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('save-user-btn').addEventListener('click', function(event) {
            // Prevent the default form submission
            event.preventDefault();
            
            // Check if any required field is empty
            var firstName = document.getElementById('first_name').value;
            var lastName = document.getElementById('last_name').value;
            var middleName = document.getElementById('middle_name').value;
            var email = document.getElementById('email').value;
            var tempPassword = document.getElementById('temp_password').value;
            var contactNumber = document.getElementById('contact_number').value;
            var street = document.getElementById('street').value;
            var barangay = document.getElementById('barangay').value;
            var city = document.getElementById('city').value;
            var roleId = document.getElementById('role_id').value;

            // Check if any of the required fields are empty
            if (!firstName.trim() || !lastName.trim() || !email.trim() || !tempPassword.trim() || !middleName.trim() || !contactNumber.trim() || !street.trim() || !barangay.trim() || !city.trim() ||  roleId === "") {
                // If any required field is empty, show an error message and return
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill in all fields!',
                });
                return;
            }
            // Show the SweetAlert success message
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Users Added Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                // If user clicks 'OK', submit the form
                if (result.dismiss === Swal.DismissReason.timer || result.isConfirmed) {
                    document.getElementById('create-user-form').submit();
                }
            });
        });
    });
</script>
{{-- Sweet Alert for updating User --}}
<script>
    function updateUser(id){
        event.preventDefault();
        let userId = id;
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary'
            },
            
        })

        swalWithBootstrapButtons.fire({
            title: 'Update User',
            text: "Are you sure you want to update this user?",
            showCancelButton: true,
            confirmButtonText: 'Yes,update this user!',
            cancelButtonText: 'Cancel',
            reverseButtons: false
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    url: `/users/${userId}`,
                    type: 'PUT',
                    data: $('#editUserForm').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    success: function (response) {
                        // Update the DataTable dynamically
                        $('#users-table').DataTable().ajax.reload();
                        // Show success message
                        Swal.fire({
                            title: 'Updated!',
                            text: "User has been updated.",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        });
                    },
                    error: function (error) {
                        // Handle error response
                        console.error('Update request failed:', error);
                        // Show error message
                        Swal.fire({
                            title: 'Error',
                            text: "Failed to update user.",
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        });
                    }
                });
            } else {
                result.dismiss == Swal.DismissReason.cancel;
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                );
            }
        });
    }
</script>