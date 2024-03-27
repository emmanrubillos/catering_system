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
    let liDayTag = "";
    let liMonTag = "";

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

    // Update current month and year
    currentMonthElement.innerText = months[currMonth];
    currentYearElement.innerText = currYear;
};

// Event listeners for month items
const attachMonthListeners = () => {
    const monthItems = document.querySelectorAll('.calendar-months li');
    monthItems.forEach((monthItem, index) => {
        monthItem.addEventListener('click', () => {
            if (index >= new Date().getMonth()) {
                currMonth = index;
                renderCalendar();
                monthContainer.classList.add('hidden');
                weekDayContainer.classList.remove('hidden');
                actionContainer.classList.remove('hidden');
                if (currMonth === new Date().getMonth()) {
                    prevButton.style.display = "none";
                } else {
                    prevButton.style.display = "block";
                }
            }
        });
    });
};

// Event listener for date click
const handleDateClick = (event) => {
    const clickedDate = event.target.textContent;
    const isPastDate = event.target.classList.contains('disabled-reservation');
    
    if (!isPastDate) {
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
        } else if (icon.id === "next" && (currYear < date.getFullYear() + 3 || (currYear === date.getFullYear() + 3 && currMonth < date.getMonth()))) {
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

// Event listener for month button
monthBtn.addEventListener('click', () => {
    monthContainer.classList.toggle('hidden');
    weekDayContainer.classList.toggle('hidden');
    actionContainer.classList.toggle('hidden');
    if (!monthContainer.classList.contains('hidden')) {
        attachMonthListeners();
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
