{{--? Calender Reservation --}}
<div class="relative top-[-9rem] ">
    <div class="mx-[20rem]">
        <div class="text-center">
            <h1 class="relative -bottom-5 text-primary display-font bg-light py-1 px-4 mx-[7.5rem] text-xxl rounded-md">
                Date and Time Selection
            </h1>
            <h2 class="bg-dark px-14 py-7 text-light font-bold rounded-md text-xxl shadow-xl">
                Note: 
                <br>
                <span class="text-xl leading-7 font-semibold">
                    If you choose a specific data and it appears in 
                    <span class="text-[red] uppercase font-bold">
                        red </span>, it means that date is fully reserved!
                </span>
            </h2>
        </div>
    </div>

    <div class="flex flex-row gap-5 h-[35rem] mx-16 mt-10">
        
        <div class="border-2 border-primary basis-3/5 p-4 bg-fff7e9">
            <div class="flex justify-between mb-4">
                <button id="prevMonthBtn" class="text-primary">&lt;</button>
                <div id="currentMonth" class="text-primary font-semibold"></div>
                <button id="nextMonthBtn" class="text-primary">&gt;</button>
            </div>

            <div class="grid grid-cols-7 gap-1">
                 <!-- Days of the week -->
                 <div class="text-center text-primary font-semibold">Sun</div>
                 <div class="text-center text-primary font-semibold">Mon</div>
                 <div class="text-center text-primary font-semibold">Tue</div>
                 <div class="text-center text-primary font-semibold">Wed</div>
                 <div class="text-center text-primary font-semibold">Thu</div>
                 <div class="text-center text-primary font-semibold">Fri</div>
                 <div class="text-center text-primary font-semibold">Sat</div>
            </div>

            <div class="grid grid-cols-7 gap-1">
        

            </div>
        </div>
        
        <script>
            const currentMonthElement = document.getElementById('currentMonth');
            const prevMonthBtn = document.getElementById('prevMonthBtn');
            const nextMonthBtn = document.getElementById('nextMonthBtn');
        
            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();
        
            function renderCalendar(month, year) {
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDayIndex = new Date(year, month, 1).getDay();
                const lastDayIndex = new Date(year, month, daysInMonth).getDay();
        
                // Clear previous month's days
                const calendarGrid = document.querySelector('.grid');
                calendarGrid.innerHTML = '';
        
                // Render previous month's days if needed
                for (let i = firstDayIndex; i > 0; i--) {
                    calendarGrid.innerHTML += `<div class="text-center text-gray-400">${daysInMonth - i + 1}</div>`;
                }
        
                // Render current month's days
                for (let i = 1; i <= daysInMonth; i++) {
                    calendarGrid.innerHTML += `<div class="text-center">${i}</div>`;
                }
        
                // Render next month's days if needed
                for (let i = 1; i < 7 - lastDayIndex; i++) {
                    calendarGrid.innerHTML += `<div class="text-center text-gray-400">${i}</div>`;
                }
        
                currentMonthElement.textContent = new Date(year, month).toLocaleString('default', { month: 'long' }) + ' ' + year;
            }
        
            renderCalendar(currentMonth, currentYear);
        
            prevMonthBtn.addEventListener('click', () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar(currentMonth, currentYear);
            });
        
            nextMonthBtn.addEventListener('click', () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar(currentMonth, currentYear);
            });

            function renderCalendar(month, year) {
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDayIndex = new Date(year, month, 1).getDay();
    const lastDayIndex = new Date(year, month, daysInMonth).getDay();
    const today = new Date();
    const todayDate = today.getDate();
    const todayMonth = today.getMonth();
    const todayYear = today.getFullYear();

    // Clear previous month's days
    const calendarGrid = document.querySelector('.grid');
    calendarGrid.innerHTML = '';

    // Render previous month's days if needed
    for (let i = firstDayIndex; i > 0; i--) {
        calendarGrid.innerHTML += `<div class="text-center text-gray-400">${daysInMonth - i + 1}</div>`;
    }

    // Render current month's days
    for (let i = 1; i <= daysInMonth; i++) {
        let classes = "text-center";
        if (i === todayDate && month === todayMonth && year === todayYear) {
            classes += " bg-primary"; // Add bg-primary class to highlight today's date
        }
        calendarGrid.innerHTML += `<div class="${classes}">${i}</div>`;
    }

    // Render next month's days if needed
    for (let i = 1; i < 7 - lastDayIndex; i++) {
        calendarGrid.innerHTML += `<div class="text-center text-gray-400">${i}</div>`;
    }

    currentMonthElement.textContent = new Date(year, month).toLocaleString('default', { month: 'long' }) + ' ' + year;
}

        </script>
        

        
        

        <div class="basis-2/5">
            <div class="m-5 p-10 bg-light rounded-lg shadow-lg">
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[35px] mr-3">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#FF731D" d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"/>
                    </svg>
                    <h1 class="font-bold uppercase text-lg text-light bg-primary py-1 px-3 mt-1 rounded-lg shadow-sm">
                        Date of Event:
                    </h1>
                </div>
                
                <input id="first_name" type="first_name" placeholder="Choice Month" class="w-full my-3 form-control text-dark text-base px-5 py-5 border-none rounded-md shadow-md
                ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                
                <input id="first_name" type="first_name" placeholder="Choice Day" class="w-full form-control text-dark text-base px-5 py-5 border-none rounded-md shadow-md
                    ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                    @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                
                <div class="flex flex-row my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[35px] mr-3">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#FF731D" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                    </svg>
                    <h1 class="font-bold uppercase text-lg text-light bg-primary py-1 px-3 mt-1 rounded-lg shadow-sm">
                        Time of Meal:
                    </h1>
                </div>
                <div class="flex flex-row gap-5 my-3">
                    <button class="flex flex-row gap-1 bg-[white] border-2 border-dark py-2 px-10 rounded fill-dark hover:fill-light
                    transition ease-in-out hover:bg-primary hover:border-primary font-bold text-dark uppercase text-[20px] hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[25px] mr-3 ">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/>
                        </svg>

                            Lunch

                    </button>

                    <button class="flex flex-row gap-1 bg-[white] border-2 border-dark py-2 px-10 rounded fill-dark hover:fill-light
                    transition ease-in-out hover:bg-primary hover:border-primary font-bold text-dark uppercase text-[20px] hover:text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[25px] mr-3 ">
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/>
                        </svg>

                            Dinner

                    </button>

                </div>

                <div class="text-center">
                    <span class="bg-[red] text-xsm text-light px-3 py-1 rounded-md font-semibold">
                        note: Please select a Time of Meal!
                    </span>
                </div>

            </div>
            
            <div class="mx-5">
                <button id="submit-button" type="submit" class="w-full text-light mt-4 font-bold uppercase text-md py-3 px-8 bg-primary
                    transition ease-in-out hover:bg-primary-dark shadow-lg">
                    Next
                </button>
            </div>


        </div>
    </div>
</div>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
<script>
    // Initialize date picker
    const datePickerEl = document.getElementById('datepicker');
    new Datepicker(datePickerEl, {
        // options
    });
</script> --}}