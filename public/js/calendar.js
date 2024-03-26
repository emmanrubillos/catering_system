
const currentDate = document.querySelector(".current-date"),
daysTag = document.querySelector(".calendar-days"),
prevNextIcon = document.querySelectorAll(".action-icons svg");

const reservedDates = ["2024-03-10", "2024-03-15", "2024-03-20"];

//getting the current date, current year and month
let date = new Date();
currYear = date.getFullYear();
currMonth = date.getMonth();

// console.log(date, currYear, currMonth);

const months = ["January", "February", "March", "April", "May", 
               "June", "July", "August", "September", "October", 
               "November", "December"];


const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), //getting the first day of Month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), //getting the last date of Month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), //getting the last day of Month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); //getting the last date of previous Month
    let liTag = "";

    for (let day = firstDayofMonth; day > 0; day--) { //creating li of previous Month last days
        liTag += `<li class="days-inActive">${lastDateofLastMonth - day + 1}</li>`;
    }


    for (let day = 1; day <= lastDateofMonth; day++) { //creating li of all days of current Month
        //adding active class to li if the current day, month, and year matched 
        let isToday = day === date.getDate() && currMonth === new Date().getMonth()
                      && currYear === new Date().getFullYear() ? "day-Active" : "";
        liTag += `<li class="${isToday}">${day}</li>`;
    }

    for (let day = lastDayofMonth; day < 6; day++) { //creating li of next Month first days
        liTag += `<li class="days-inActive">${day - lastDayofMonth + 1}</li>`;
    }

    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    
}
renderCalendar();

//Calendar prevNext
prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => { //adding click event on both icons
        currMonth = icon.id === "prev" ? currMonth -1 : currMonth +1;

        if(currMonth < 0 || currMonth > 11) { //if current Month is less than 0 or greater than 11
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear(); //updating current year with new date year
            currMonth = date.getMonth(); //updating current month with new date month
        }
        else { //else pass new Date as date value
            date = new Date();
        }

        renderCalendar();
    });
});


