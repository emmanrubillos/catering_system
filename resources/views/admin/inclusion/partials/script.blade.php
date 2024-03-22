<script>
    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('save-inclusion-btn').addEventListener('click', function(event) {
            // Prevent the default form submission
            event.preventDefault();
            
            // Check if any required field is empty
            let name = $('input#add-inclusion-name').val();
            let description = $('#add-inclusion-description').val();
            let classi = $('input#add-classification-check').val();

            // console.log(name, classsi, description);
            // return;

            // Check if any of the required fields are empty
            if (!name.trim() || !classi.trim() || !description.trim()) {
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
                title: 'Inclusion Added Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                // If user clicks 'OK', submit the form
                if (result.dismiss === Swal.DismissReason.timer || result.isConfirmed) {
                    document.getElementById('create-inclusion-form').submit();
                }
            });
        });
    });
</script>