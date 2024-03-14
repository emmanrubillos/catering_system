<script>

    const weddingModal = document.querySelector('#modal-wedding-info');
    const showWeddingModal = document.querySelector('.show-wedding-modal');
    const exitWeddingModal = document.querySelector('.wedding-modal-exit');

    // Wedding Modal Trigger
    showWeddingModal.addEventListener('click', function(event) {
        event.preventDefault();
        weddingModal.classList.remove('hidden');
    });

    exitWeddingModal.addEventListener('click', function(event) {
        event.preventDefault();
        weddingModal.classList.add('hidden');
    });


        // Birthday Modal
    const birthdayModal = document.querySelector('#modal-birthday-info');
    const showBirthdayModal = document.querySelector('.show-birthday-modal');
    const exitBirthdayModal = document.querySelector('.birthday-modal-exit');

    // Birthday Modal Trigger
    showBirthdayModal.addEventListener('click', function(event) {
        event.preventDefault();
        birthdayModal.classList.remove('hidden');
    });

    exitBirthdayModal.addEventListener('click', function(event) {
        event.preventDefault();
        birthdayModal.classList.add('hidden');
    });



    // Christening Modal
    const christeningModal = document.querySelector('#modal-christening-info');
    const showChristeningModal = document.querySelector('.show-christening-modal');
    const exitChristeningModal = document.querySelector('.christening-modal-exit');

    // Christening Modal Trigger
    showChristeningModal.addEventListener('click', function(event) {
        event.preventDefault();
        christeningModal.classList.remove('hidden');
    });

    exitChristeningModal.addEventListener('click', function(event) {
        event.preventDefault();
        christeningModal.classList.add('hidden');
    });


        // Anniversary Modal
    const anniversaryModal = document.querySelector('#modal-anniversary-info');
    const showAnniversaryModal = document.querySelector('.show-anniversary-modal');
    const exitAnniversaryModal = document.querySelector('.anniversary-modal-exit');

    // Anniversary Modal Trigger
    showAnniversaryModal.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action of the click event
        anniversaryModal.classList.remove('hidden');
    });

    exitAnniversaryModal.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action of the click event
        anniversaryModal.classList.add('hidden');
    });



    // Feast Modal
    const feastModal = document.querySelector('#modal-feast-info');
    const showFeastModal = document.querySelector('.show-feast-modal');
    const exitFeastModal = document.querySelector('.feast-modal-exit');

    // Feast Modal Trigger
    showFeastModal.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action of the click event
        feastModal.classList.remove('hidden');
    });

    exitFeastModal.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action of the click event
        feastModal.classList.add('hidden');
    });


        // Conference Modal
    const conferenceModal = document.querySelector('#modal-conference-info');
    const showConferenceModal = document.querySelector('.show-conference-modal');
    const exitConferenceModal = document.querySelector('.conference-modal-exit');

    // Conference Modal Trigger
    showConferenceModal.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action of the click event
        conferenceModal.classList.remove('hidden');
    });

    exitConferenceModal.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action of the click event
        conferenceModal.classList.add('hidden');
    });



    // Alumni Modal
    const alumniModal = document.querySelector('#modal-alumni-info');
    const showAlumniModal = document.querySelector('.show-alumni-modal');
    const exitAlumModal = document.querySelector('.alumni-modal-exit');

    // Alumni Modal Trigger
    showAlumniModal.addEventListener('click', function () {
        alumniModal.classList.remove('hidden');
    });
    exitAlumModal.addEventListener('click', function() {
        alumniModal.classList.add('hidden');
    });


     // Burial Modal
    const burialModal = document.querySelector('#modal-burial-info');
    const showBurialModal = document.querySelector('.show-burial-modal');
    const exitBurialModal = document.querySelector('.burial-modal-exit');

    // Burial Modal Trigger
    showBurialModal.addEventListener('click', function () {
        burialModal.classList.remove('hidden');
    });
    exitBurialModal.addEventListener('click', function() {
        burialModal.classList.add('hidden');
    });

      // Seminar Modal
    const seminarModal = document.querySelector('#modal-seminar-info');
    const showSeminarModal = document.querySelector('.show-seminar-modal');
    const exitSeminarModal = document.querySelector('.seminar-modal-exit');

    // Seminar  Modal Trigger
    showSeminarModal.addEventListener('click', function () {
        seminarModal.classList.remove('hidden');
    });
    exitSeminarModal.addEventListener('click', function() {
        seminarModal.classList.add('hidden');
    });

</script>
