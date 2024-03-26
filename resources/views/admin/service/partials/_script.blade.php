<script>
// Wait for the DOM to fully load
    // document.addEventListener('DOMContentLoaded', function() {
    //     document.getElementById('save-service-btn').addEventListener('click', function(event) {
    //         // Prevent the default form submission
    //         event.preventDefault();
            
    //         // Check if any required field is empty
    //         let name = $('input#add-service-name').val();
    //         let type = $('#add-service-type').val();
    //         let description = $('#add-service-description').val();
    //         let price = $('input#add-service-price').val();
    //         let number_of_person = $('input#add-service-number_of_person').val();
    //         let main_dish = $('input#add-service-main_dish').val();
    //         let side_dish = $('input#add-service-side_dish').val();
            

    //         // console.log(name, type, description, price, number_of_person, main_dish, side_dish);
    //         // return;

    //         // Check if any of the required fields are empty
    //         if (!name.trim() || type === "" || !description.trim() || !price.trim() || !number_of_person.trim() || !main_dish.trim() || !side_dish.trim()) {
    //             // If any required field is empty, show an error message and return
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'Oops...',
    //                 text: 'Please fill in all fields!',
    //             });
    //             return;
    //         }
    //         // Show the SweetAlert success message
    //         Swal.fire({
    //             position: 'center',
    //             icon: 'success',
    //             title: 'Services Added Successfully',
    //             showConfirmButton: false,
    //             timer: 1500
    //         }).then((result) => {
    //             // If user clicks 'OK', submit the form
    //             if (result.dismiss === Swal.DismissReason.timer || result.isConfirmed) {
    //                 document.getElementById('create-service-form').submit();
    //             }
    //         });
    //     });
    // });
    

//? Delete Service SweetAlert
    function confirmDeleteService(id){
        event.preventDefault();
        let serviceId = id;
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
                    url: `/service/${serviceId}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: "Services has been deleted.",
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