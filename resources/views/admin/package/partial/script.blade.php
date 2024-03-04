<script>
    function confirmDeletePackage(id) {
        event.preventDefault();
        let packageId = id;
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary'
            },
        });

        swalWithBootstrapButtons.fire({
            title: 'Are you sure you want to delete this package?',
            text: "You won't be able to revert this!",
            imageUrl: "{{ asset('assets/img/trash-icon.png') }}",
            imageHeight: 200,
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            reverseButtons: false
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/package/${packageId}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: "Package has been deleted.",
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
                        console.error('DELETE request failed:', error);
                        Swal.fire({
                            title: 'Error!',
                            text: "Failed to delete the package.",
                            icon: 'error'
                        });
                    }
                });
            } else {
                result.dismiss == Swal.DismissReason.cancel;
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'The package is safe :)',
                    'error'
                );
            }
        });
    }
</script>
