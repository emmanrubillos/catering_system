

// The Current Date
const currentMonthElement = document.querySelector(".calendar-month");
const currentYearElement = document.querySelector(".calendar-year");

// Rendering Calendar Data
const daysTag = document.querySelector(".calendar-days");
const monthsTag = document.querySelector(".calendar-months");
const yearsTag = document.querySelector(".calendar-years");

// ActionButtons
const prevNextIcon = document.querySelectorAll(".action-icons svg");
const prevButton = document.querySelector("#prev");
const nextButton = document.querySelector("#next");
const monthBtn = document.getElementById('month-btn');
const yearBtn = document.getElementById('year-btn');

// Calendar Container Data
const monthContainer = document.querySelector('.MonthContainer');
const weekDayContainer = document.querySelector('.WeekDayContainer');
const yearContainer = document.querySelector(".yearContainer");
const actionContainer = document.querySelector('.actionContainer');

// Selecting Date
const selectedDateElement = document.querySelector('.calendar-selected');

let currYear, currMonth;
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// Initialize current year and month
const initializeDate = () => {
    const date = new Date();
    currYear = date.getFullYear();
    currMonth = date.getMonth();
};

// Render the calendar
const renderCalendar = () => {
    let today = new Date();
    let firstDayOfMonth = new Date(currYear, currMonth, 1).getDay();
    let lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
    let lastDateOfLastMonth = new Date(currYear, currMonth, 0).getDate();
    const currentYear = new Date().getFullYear();
    let liDayTag = "";
    let liMonTag = "";
    let liYearTag = "";

    // Render days of the month
    for (let day = firstDayOfMonth; day > 0; day--) {
        let previousDay = lastDateOfLastMonth - day + 1;
        liDayTag += `<li class="days-inActive disabled-reservation">${previousDay}</li>`;
    }

    for (let day = 1; day <= lastDateOfMonth; day++) {
        let isToday = day === today.getDate() && currMonth === today.getMonth() && currYear === today.getFullYear();
        let isPastDate = new Date(currYear, currMonth, day) < today;
        let isDisabled = isPastDate && !isToday ? 'disabled-reservation' : '';
        liDayTag += `<li class="${isToday ? 'day-Active' : ''} ${isDisabled}">${day}</li>`;
    }

    daysTag.innerHTML = liDayTag;

    // Render months of the year
    for (let month = 0; month < 12; month++) {
        let isPastMonth = new Date(currYear, month) < today;
        let isDisabled = isPastMonth && currMonth !== month ? 'disabled-reservation' : '';
        let monthName = months[month];
        let isCurrentMonth = month === currMonth ? "month-Active" : "";
        liMonTag += `<li class="${isCurrentMonth} ${isDisabled}">${monthName}</li>`;
    }

    monthsTag.innerHTML = liMonTag;


    // Render Years
    const numberOfYears = 3;

    for (let i = 0; i < numberOfYears; i++) {
        const year = currentYear + i;
        liYearTag += `<li>${year}</li>`;
    }

    yearsTag.innerHTML = liYearTag;

    // Update current month and year
    currentMonthElement.innerText = months[currMonth];
    currentYearElement.innerText = currYear;
};

// Event listeners for month items
const attachMonthListeners = () => {
    const monthItems = document.querySelectorAll('.calendar-months li');
    monthItems.forEach((monthItem, index) => {
        monthItem.addEventListener('click', () => {
            if (index >= new Date().getMonth() || currYear > new Date().getFullYear()) {
                // Update current month to the clicked month index
                currMonth = index;
                // Re-render the calendar
                renderCalendar();
                // Hide the month container and show the week day and action containers
                monthContainer.classList.add('hidden');
                yearContainer.classList.add('hidden');
                weekDayContainer.classList.remove('hidden');
                actionContainer.classList.remove('hidden');
                // Update visibility of the prev button based on current month
                if (currMonth === new Date().getMonth()) {
                    prevButton.style.display = "none"; // hide "prev" button
                } else {
                    prevButton.style.display = "block"; // show "prev" button
                }
            }
        });
    });
};

// Event listeners for year items
const attachYearListeners = () => {
    const yearItems = document.querySelectorAll('.calendar-years li');
    yearItems.forEach((yearItem, index) => {
        yearItem.addEventListener('click', () => {
            // Get the current year
            const currentYear = new Date().getFullYear();
            // Calculate the selected year based on the index
            const selectedYear = currentYear + index;
            if (selectedYear >= currentYear) {
                // Update currYear to the selected year
                currYear = selectedYear;
                // Re-render the calendar
                renderCalendar();
                // Hide the month container and show the week day and action containers
                monthContainer.classList.add('hidden');
                yearContainer.classList.add('hidden');
                weekDayContainer.classList.remove('hidden');
                actionContainer.classList.remove('hidden');
                // Update visibility of the prev button based on current month
                if (currMonth === new Date().getMonth()) {
                    prevButton.style.display = "none"; // hide "prev" button
                } else {
                    prevButton.style.display = "block"; // show "prev" button
                }
            }
        });
    });
};





// Event listener for date click
const handleDateClick = (event) => {
    const clickedDateElement = event.target.closest('li'); // Find the closest date element clicked
    if (!clickedDateElement) return; // If no date element found, exit

    const clickedDate = clickedDateElement.textContent;
    const isPastDate = clickedDateElement.classList.contains('disabled-reservation');
    
    if (!isPastDate) {
        // Remove the selected class from all date elements
        document.querySelectorAll('.calendar-days li').forEach(dateElement => {
            dateElement.classList.remove('selected-date');
        });

        // Add the selected class to the clicked date element
        clickedDateElement.classList.add('selected-date');

        selectedDateElement.textContent = `${months[currMonth]} ${clickedDate}, ${currYear}`;
        selectedDateElement.classList.remove('show'); // Remove the show class if previously added
    } else {
        selectedDateElement.innerHTML = `<h3 class="bg-red text-lg drop-shadow-lg text-white px-3 py-2 reservation-error">You cannot select that date!</h3>`;
        selectedDateElement.classList.add('show'); // Add the show class to animate the error message
    }
};






// Event listener for prev and next buttons
prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        const date = new Date();
        if (icon.id === "prev" && (currYear > date.getFullYear() || (currYear === date.getFullYear() && currMonth > date.getMonth()))) {
            currMonth = currMonth > 0 ? currMonth - 1 : 11;
            currYear = currMonth === 11 ? currYear - 1 : currYear;
        } else if (icon.id === "next" && (currYear < date.getFullYear() + 2 || (currYear === date.getFullYear() + 2 && currMonth < date.getMonth()))) {
            currMonth = currMonth < 11 ? currMonth + 1 : 0;
            currYear = currMonth === 0 ? currYear + 1 : currYear;
        }
        renderCalendar();
        if (currYear === date.getFullYear() && currMonth === date.getMonth()) {
            prevButton.style.display = "none";
        } else {
            prevButton.style.display = "block";
        }
    });
});

// Event listener for month button click
monthBtn.addEventListener('click', () => {
    // Check if month container is already visible
    const monthAlreadyVisible = !monthContainer.classList.contains('hidden');

    // Hide year container if it's visible
    if (!yearContainer.classList.contains('hidden')) {
        yearContainer.classList.add('hidden');
    }

    // Toggle visibility of month container
    monthContainer.classList.toggle('hidden');

    // Toggle visibility of action container
    actionContainer.classList.toggle('hidden');

    // Hide action container if either year container or month container is visible
    if (!yearContainer.classList.contains('hidden') || !monthContainer.classList.contains('hidden')) {
        actionContainer.classList.add('hidden');
    }

    // Show/hide weekDay container based on monthContainer visibility
    if (monthAlreadyVisible && weekDayContainer.classList.contains('hidden')) {
        weekDayContainer.classList.remove('hidden');
    } else if (!monthAlreadyVisible && !weekDayContainer.classList.contains('hidden')) {
        weekDayContainer.classList.add('hidden');
    }

    if (!monthContainer.classList.contains('hidden')) {
        attachMonthListeners();
    }
});

// Event listener for year button click
yearBtn.addEventListener('click', () => {
    // Check if year container is already visible
    const yearAlreadyVisible = !yearContainer.classList.contains('hidden');

    // Hide month container if it's visible
    if (!monthContainer.classList.contains('hidden')) {
        monthContainer.classList.add('hidden');
    }

    // Toggle visibility of year container
    yearContainer.classList.toggle('hidden');

    // Toggle visibility of action container
    actionContainer.classList.toggle('hidden');

    // Hide action container if either year container or month container is visible
    if (!yearContainer.classList.contains('hidden') || !monthContainer.classList.contains('hidden')) {
        actionContainer.classList.add('hidden');
    }

    // Show/hide weekDay container based on yearContainer visibility
    if (yearAlreadyVisible && weekDayContainer.classList.contains('hidden')) {
        weekDayContainer.classList.remove('hidden');
    } else if (!yearAlreadyVisible && !weekDayContainer.classList.contains('hidden')) {
        weekDayContainer.classList.add('hidden');
    }

    if (!yearContainer.classList.contains('hidden')) {
        attachYearListeners();
    }

});







// Event listeners for date items
daysTag.addEventListener('click', handleDateClick);

// Initialize calendar
document.addEventListener("DOMContentLoaded", () => {
    
    prevButton.style.display = "none";
    nextButton.style.display = "block";

    initializeDate();
    renderCalendar();

});
