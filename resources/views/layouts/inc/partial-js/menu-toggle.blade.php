
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");
        const closeSidebar = document.getElementById("close-sidebar");

        menuToggle.addEventListener("click", function() {
            sidebar.classList.toggle("hidden");
            sidebar.classList.toggle("slide-in"); 
            menuToggle.classList.toggle("hidden");
        });

        closeSidebar.addEventListener("click", function() {
            sidebar.classList.add("slide-out"); // Add slide-out animation class
            menuToggle.classList.remove("hidden");
            
            // Wait for the animation to end before adding the 'hidden' class
            sidebar.addEventListener("animationend", function() {
                sidebar.classList.add("hidden");
                sidebar.classList.remove("slide-out"); // Remove slide-out animation class
            }, { once: true });
        });
    });

</script>