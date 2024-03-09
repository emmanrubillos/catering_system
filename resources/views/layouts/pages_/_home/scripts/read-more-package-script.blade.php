<script>
    // Basic Modal
    const basicModal = document.querySelector('#modal-basic-info');
    const showBasicModal = document.querySelector('.show-b-modal');
    const exitBModal = document.querySelector('.basic-modal-exit');

    // Standard Modal
    const standardModal = document.querySelector('#modal-standard-info');
    const showStandardModal = document.querySelector('.show-s-modal');
    const exitSModal = document.querySelector('.standard-modal-exit');

    // Premium Modal
    const premiumModal = document.querySelector('#modal-premium-info');
    const showPremiumModal = document.querySelector('.show-p-modal');
    const exitPModal = document.querySelector('.premium-modal-exit');
    
    // Basic Modal Trigger
    showBasicModal.addEventListener('click', function () { 
        basicModal.classList.remove('hidden');
    });
    exitBModal.addEventListener('click', function() {
        basicModal.classList.add('hidden');
    });

    // Standard Modal Trigger
    showStandardModal.addEventListener('click', function(){
        standardModal.classList.remove('hidden');
    });
    exitSModal.addEventListener('click', function() {
        standardModal.classList.add('hidden');
    });

    // Premium Modal Trigger
    showPremiumModal.addEventListener('click', function () {
        premiumModal.classList.remove('hidden');
    });
    exitPModal.addEventListener('click', function () {
        premiumModal.classList.add('hidden');
    });
    


</script>