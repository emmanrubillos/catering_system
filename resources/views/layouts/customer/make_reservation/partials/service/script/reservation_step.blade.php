<!-- JavaScript to toggle visibility -->
<script>
    // Function to show calendarSelection and hide eventSelection
    function showCalendarSelection() {
        document.getElementById('calendarSelection').style.display = 'block';
        document.getElementById('eventSelection').classList.add('hidden');
    }

    // Function to hide calendarSelection and show eventSelection
    function showEventSelection() {
        document.getElementById('calendarSelection').style.display = 'none';
        document.getElementById('eventSelection').classList.remove('hidden');
    }

    // Event listener for "Next" button
    document.getElementById('goToEventSelection').addEventListener('click', function() {
        showEventSelection();
        // Ensure "Back" button is always visible after clicking "Next"
        document.getElementById('goBackToCalendar').style.display = 'block';
    });

    // Event listener for "Back" button
    document.getElementById('goBackToCalendar').addEventListener('click', function() {
        showCalendarSelection();
        // Ensure "Back" button is always visible after clicking "Back"
        document.getElementById('goBackToCalendar').style.display = 'block';
    });

    // Function to show packageOrPax div and hide eventSelection div
    function showPackageOrPax() {
        document.getElementById('packageOrPax').classList.remove('hidden');
        document.getElementById('eventSelection').classList.add('hidden');
    }

    // Event listener for "Select" button
    document.getElementById('goToPackageOrPax').addEventListener('click', function() {
        showPackageOrPax();
        document.getElementById('goBackToEventSelection').style.display = 'block';
    });

    // Event listener for "Back to Event Selection" button
    document.getElementById('goBackToEventSelection').addEventListener('click', function() {
        showEventSelection();
        document.getElementById('goBackToEventSelection').style.display = 'block';
        document.getElementById('packageOrPax').classList.add('hidden');
    });

</script>