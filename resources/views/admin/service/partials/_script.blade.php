<script>
    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('save-service-btn').addEventListener('click', function(event) {
            // Prevent the default form submission
            event.preventDefault();
            
            // Check if any required field is empty
            var name = document.getElementById('name').value;
            var type = document.getElementById('type').value;
            var description = document.getElementById('description').value;
            var price = document.getElementById('price').value;

            // Check if any of the required fields are empty
            if (!firstName.trim() || !lastName.trim() || !email.trim() || !tempPassword.trim() || !middleName.trim() || !contactNumber.trim() || !address.trim() || roleId === "") {
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
                    document.getElementById('create-service-form').submit();
                }
            });
        });
    });
</script>