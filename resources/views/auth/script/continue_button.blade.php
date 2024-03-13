<script>
document.addEventListener('DOMContentLoaded', function() {
    const fullName = document.getElementById('full-name');
    const contactNumber = document.getElementById('contact-number');
    const address = document.getElementById('address');
    const newAccount = document.getElementById('new-account');
    const firstButton = document.getElementById('first-button');
    const firstButtonContainer = document.getElementById('first-button-container');
    const secondButton = document.getElementById('second-button');
    const secondButtonContainer = document.getElementById('second-button-container');
    const firstBackButton = document.getElementById('first-back-button');
    const secondBackButton = document.getElementById('second-back-button');
    const submitButton = document.getElementById('submit-button');

    firstButton.addEventListener('click', function() {
        fullName.classList.add('hidden');
        contactNumber.classList.add('hidden');
        firstButtonContainer.classList.add('hidden');
        firstButton.classList.add('hidden');
        address.classList.remove('hidden');
        firstButtonContainer.classList.remove('hidden');
    });

    firstBackButton.addEventListener('click', function() {
        firstButton.classList.remove('hidden');
        fullName.classList.remove('hidden');
        contactNumber.classList.remove('hidden');
        firstButtonContainer.classList.remove('hidden');
        address.classList.add('hidden');
        firstButtonContainer.classList.add('hidden');
        secondButtonContainer.classList.add('hidden');
    });

    secondButton.addEventListener('click', function() {
        address.classList.add('hidden');
        secondButtonContainer.classList.add('hidden');
        newAccount.classList.remove('hidden');
        firstButtonContainer.classList.add('hidden');
        secondButtonContainer.classList.remove('hidden');
        submitButton.classList.remove('hidden');
    });

    secondBackButton.addEventListener('click', function() {
        address.classList.remove('hidden');
        secondButtonContainer.classList.add('hidden');
        newAccount.classList.add('hidden');
        submitButton.classList.add('hidden');
        firstButtonContainer.classList.remove('hidden');
    });
});


</script>