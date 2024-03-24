
<script>
// Sweet alert for the Edit Classification Button
    $(document).ready(function() {
            // Add event listener for form submission
            $(document).on("submit", "#editClassificationForm{{ $classification->id }}", function(event) {
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
                            text: "Classification has been updated successfully.",
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
                    // If classification confirms cancel, close the modal
                    if (result.isConfirmed) {
                        $('#editClassificationForm{{ $classification->id }}').modal('hide');
                    } else {
                        // If classification cancels the action, show a message
                        Swal.fire({
                            title: 'Cancelled',
                            text: 'The classification update has been cancelled.',
                            icon: 'info',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to the index page
                                window.location.href = "{{ route('classification.index') }}";
                            }
                        });
                    }
                });
            });   
    });


// Sweet alert for the Delete Classification Button
    function confirmDeleteClassification(id){
        event.preventDefault();
        let classificationId = id;
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
                    url: `/classification/${classificationId}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: "Classifications has been deleted.",
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
                    'Your Classification file is safe :)',
                    'error'
                );
            }
        })
    }


// Sweet alert for validation of the Add New Classification Button

    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('save-classification-btn').addEventListener('click', function(event) {
            // Prevent the default form submission
            event.preventDefault();
            
            // Check if any required field is empty add-classification-
            let name = $('input#add-classification-name').val();
            let group = $('input#add-classification-group').val();

            // console.log(name, group);
            // return;

            // Check if any of the required fields are empty
            if (!name.trim() || !group.trim()) {
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
                title: 'Classification Added Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                // If classification clicks 'OK', submit the form
                if (result.dismiss === Swal.DismissReason.timer || result.isConfirmed) {
                    document.getElementById('create-classification-form').submit();
                }
            });
        });
    });


//?  Sweet Alert for updating Classification

    function areChangesMade(id) {
        let classificationId = id;
        let currentName = $('#name' + classificationId).val();
        let currentGroup = $('#group' + classificationId).val();
        let originalName = $('#original-name' + classificationId).val();
        let originalGroup = $('#original-group' + classificationId).val();

        return currentName !== originalName || currentGroup !== originalGroup;
    }

    function updateClassification(event, id) {
        event.preventDefault();
        let classificationId = id;

        if (!areChangesMade(classificationId)) {
            Swal.fire({
                title: 'No Changes Made',
                text: "You haven't made any changes.",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
            });
            return;
        }

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary'
            },
        });

        swalWithBootstrapButtons.fire({
            title: 'Update Classification',
            text: "Are you sure you want to update this classification?",
            showCancelButton: true,
            confirmButtonText: 'Yes, update this classification!',
            cancelButtonText: 'Cancel',
            reverseButtons: false
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/classifications/${classificationId}`,
                    type: 'PUT',
                    data: $('#editClassificationForm' + classificationId).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    success: function(response) {
                        // Update the DataTable dynamically
                        $('#classifications-table').DataTable().ajax.reload();
                        // Show success message
                        Swal.fire({
                            title: 'Updated!',
                            text: "Classification has been updated.",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        });
                    },
                    error: function(error) {
                        // Handle error response
                        console.error('Update request failed:', error);
                        // Show error message
                        Swal.fire({
                            title: 'Error',
                            text: "Failed to update classification.",
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
