const currentMonthElement = document.querySelector(".calendar-month");
const currentYearElement = document.querySelector(".calendar-year");
const daysTag = document.querySelector(".calendar-days");
const monthsTag = document.querySelector(".calendar-months");
const prevNextIcon = document.querySelectorAll(".action-icons svg");
const prevButton = document.querySelector("#prev");
const nextButton = document.querySelector("#next");
const monthBtn = document.getElementById('month-btn');
const monthContainer = document.querySelector('.MonthContainer');
const weekDayContainer = document.querySelector('.WeekDayContainer');
const actionContainer = document.querySelector('.actionContainer');

//getting the current date, current year and month
let date = new Date();
let currYear = date.getFullYear();
let currMonth = date.getMonth();

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let today = new Date();
    let firstDayOfMonth = new Date(currYear, currMonth, 1).getDay(); // Getting the first day of the month
    let lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate(); // Getting the last date of the month
    let lastDayOfMonth = new Date(currYear, currMonth, lastDateOfMonth).getDay(); // Getting the last day of the month
    let lastDateOfLastMonth = new Date(currYear, currMonth, 0).getDate(); // Getting the last date of the previous month
    let liDayTag = "";

    // For CurrentYearMonthDays
    for (let day = firstDayOfMonth; day > 0; day--) { // Creating li for previous month's last days
        let previousDay = lastDateOfLastMonth - day + 1;
        liDayTag += `<li class="days-inActive disabled-reservation">${previousDay}</li>`;
    }

    for (let day = 1; day < lastDateOfMonth; day++) { // Creating li for all days of the current month except the last day
        let isToday = day === today.getDate() && currMonth === today.getMonth() && currYear === today.getFullYear();
        let isPastDate = new Date(currYear, currMonth, day) < today;
        let isDisabled = isPastDate && !isToday ? 'disabled-reservation' : ''; // Add class for past days
        liDayTag += `<li class="${isToday ? 'day-Active' : ''} ${isDisabled}">${day}</li>`;
    }

    // Add the last day of the month without disabling it
    let isToday = lastDateOfMonth === today.getDate() && currMonth === today.getMonth() && currYear === today.getFullYear();
    liDayTag += `<li class="${isToday ? 'day-Active' : ''}">${lastDateOfMonth}</li>`;

    // For CurrentYearMonths
    let monthsOfYear = new Date(currYear, 0, 1).getMonth(); // Get the month index of the first month of the year
    let liMonTag = "";

    for (let month = monthsOfYear; month <= 11; month++) {
        let isPastMonth = new Date(currYear, month) < today;
        let isDisabled = isPastMonth && currMonth !== month ? 'disabled-reservation' : ''; // Add class for past months excluding current month
        // Get the full name of the month using the month index
        let monthName = new Date(currYear, month, 1).toLocaleString('default', { month: 'long' });
        // Add the "current-month" class to the list item if it matches the current month
        let isCurrentMonth = month === currMonth ? "month-Active" : "";
        liMonTag += `<li class="${isCurrentMonth} ${isDisabled}">${monthName}</li>`;
    }
    

    currentMonthElement.innerText = months[currMonth]; // Update current month in HTML
    currentYearElement.innerText = currYear; // Update current year in HTML
    daysTag.innerHTML = liDayTag;
    monthsTag.innerHTML = liMonTag;
}

renderCalendar();


const monthItems = document.querySelectorAll('.calendar-months li');

monthItems.forEach((monthItem, index) => {
    monthItem.addEventListener('click', () => {
        // Update current month to the clicked month index
        currMonth = index;
        // Re-render the calendar
        renderCalendar();
        // Hide the menu for the month
        monthContainer.classList.add('hidden');
        // Optionally, you can also hide other elements like weekDayContainer if needed
        weekDayContainer.classList.remove('hidden');
        actionContainer.classList.remove('hidden');
        // Update visibility of the prev button based on current month
        if (currMonth === new Date().getMonth()) {
            prevButton.style.display = "none"; // hide "prev" button
        } else {
            prevButton.style.display = "block"; // show "prev" button
        }
    });
});

document.addEventListener("DOMContentLoaded", function() { 
    // Initially hide the "prev" button and show the "next" button
    prevButton.style.display = "none";
    nextButton.style.display = "block";

    // Calendar prevNext
    prevNextIcon.forEach(icon => {
        icon.addEventListener("click", () => {
            if (icon.id === "prev" && (currYear > date.getFullYear() || (currYear === date.getFullYear() && currMonth > date.getMonth()))) {
                if (currMonth > 0) {
                    currMonth--; // decrement the current month
                } else {
                    currMonth = 11; // go to December of the previous year
                    currYear--; // decrement the current year
                }
            } else if (icon.id === "next" && (currYear < date.getFullYear() + 3 || (currYear === date.getFullYear() + 3 && currMonth < date.getMonth()))) {
                if (currMonth < 11) {
                    currMonth++; // increment the current month
                } else {
                    currMonth = 0; // go to January of the next year
                    currYear++; // increment the current year
                }
            }
    
            // render the calendar
            renderCalendar();
    
            // hide or show the "prev" button based on current month
            if (currYear === date.getFullYear() && currMonth === date.getMonth()) {
                prevButton.style.display = "none"; // hide "prev" button
            } else {
                prevButton.style.display = "block"; // show "prev" button
            }
        });
    });
    
});


monthBtn.addEventListener('click', function() {
    // Toggle the 'hidden' class on MonthContainer, WeekDayContainer, and action icons
    monthContainer.classList.toggle('hidden');
    weekDayContainer.classList.toggle('hidden');
    actionContainer.classList.toggle('hidden');

    // If month container is shown, attach event listeners to month items
    if (!monthContainer.classList.contains('hidden')) {
        const monthItems = document.querySelectorAll('.calendar-months li');
        // Loop through each month list item and attach a click event listener
        monthItems.forEach((monthItem, index) => {
            monthItem.addEventListener('click', () => {
                // Update current month to the clicked month index
                currMonth = index;
                // Re-render the calendar
                renderCalendar();
                // Hide the menu for the month
                monthContainer.classList.add('hidden');
                // Optionally, you can also hide other elements like weekDayContainer if needed
                weekDayContainer.classList.remove('hidden');
                actionContainer.classList.remove('hidden');
                // Update visibility of the prev button based on current month
                if (currMonth === new Date().getMonth()) {
                    prevButton.style.display = "none"; // hide "prev" button
                } else {
                    prevButton.style.display = "block"; // show "prev" button
                }
            });
        });
    }
});
