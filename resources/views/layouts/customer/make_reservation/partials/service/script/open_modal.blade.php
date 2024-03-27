<script>

    document.addEventListener("DOMContentLoaded", function() {
        // Function to open the basic modal
        function openBasicModal() {
            const basicModal = document.getElementById('modal-basic-by-pax');
            basicModal.classList.remove('hidden');
        }
    
        // Function to open the standard modal
        function openStandardModal() {
            const standardModal = document.getElementById('modal-standard-by-pax');
            standardModal.classList.remove('hidden');
        }
    
        // Function to open the premium modal
        function openPremiumModal() {
            const premiumModal = document.getElementById('modal-premium-by-pax');
            premiumModal.classList.remove('hidden');
        }
    
        // Get the basic button element and add click event listener to open the basic modal
        const basicButton = document.getElementById('show-basic-modal');
        basicButton.addEventListener('click', openBasicModal);
    
        // Get the standard button element and add click event listener to open the standard modal
        const standardButton = document.getElementById('show-standard-modal');
        standardButton.addEventListener('click', openStandardModal);
    
        // Get the premium button element and add click event listener to open the premium modal
        const premiumButton = document.getElementById('show-premium-modal');
        premiumButton.addEventListener('click', openPremiumModal);
    
        // Function to close any modal
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }
    
        // Get the exit button elements for each modal and add click event listeners to close the respective modal
        const basicExitButton = document.querySelector('.basic-modal-exit');
        basicExitButton.addEventListener('click', function() {
            closeModal('modal-basic-by-pax');
        });
    
        const standardExitButton = document.querySelector('.standard-modal-exit');
        standardExitButton.addEventListener('click', function() {
            closeModal('modal-standard-by-pax');
        });
    
        const premiumExitButton = document.querySelector('.premium-modal-exit');
        premiumExitButton.addEventListener('click', function() {
            closeModal('modal-premium-by-pax');
        });
    
        // You can also close the modal when clicking outside the modal content
        const modals = document.querySelectorAll('.bg-dark');
        modals.forEach(modal => {
            modal.addEventListener('click', function(event) {
                const modalId = this.getAttribute('id');
                closeModal(modalId);
            });
        });
    
        // Prevent clicks within the modal content from closing the modal
        const modalContents = document.querySelectorAll('.bg-light');
        modalContents.forEach(content => {
            content.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    });
    
    
    
    
    </script>