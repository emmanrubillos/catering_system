{{--? Calender Reservation --}}
<div id="calendarSelection" class="">
    <div class="relative top-[-9rem]">
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
    
        <div class="flex flex-row gap-5 h-[35rem] mx-16 mt-20">
            
            <div class="calendar-contianer basis-3/5 p-4 flex items-center justify-center">
    
               <div class="calendar-wrapper  h-[40rem] w-[40rem] bg-light rounded-xl shadow-xl">
                    <div class="calendar-header flex items-center justify-between pt-[25px] px-[30px] pb-[10px]">
                        <div class="calendar-date flex flex-row gap-1">
                            <a id="month-btn" class="calendar-month transition ease-in-out delay-100 hover:text-light hover:bg-primary 
                            text-[45px] font-bold text-dark display-font px-3 py-1 rounded-md cursor-pointer">
                                {{-- Here's the Current Month --}}
                            </a>
    
                            <a id="year-btn" class="calendar-year transition ease-in-out delay-100 hover:text-light hover:bg-primary 
                            text-[45px] font-bold text-dark display-font px-3 py-1 rounded-md cursor-pointer">
                                {{-- Here's the Current Year --}}
                            </a>
                        </div>
                        <div class="actionContainer">
                            <div class="action-icons flex flex-row gap-1">
    
                                <svg id="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="prev-icon action-icon w-11 fill-dark delay-50
                                transition ease-in-out hover:fill-primary-dark hover:delay-50 cursor-pointer">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416zM128 256c0-6.7 2.8-13 7.7-17.6l112-104c7-6.5 17.2-8.2 25.9-4.4s14.4 12.5 14.4 22l0 208c0 9.5-5.7 18.2-14.4 22s-18.9 2.1-25.9-4.4l-112-104c-4.9-4.5-7.7-10.9-7.7-17.6z"/>
                                </svg>
        
                                <svg id="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="next-icon action-icon w-11 fill-dark delay-50
                                transition ease-in-out hover:fill-primary-dark hover:delay-50 cursor-pointer">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M448 96c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320zM320 256c0 6.7-2.8 13-7.7 17.6l-112 104c-7 6.5-17.2 8.2-25.9 4.4s-14.4-12.5-14.4-22l0-208c0-9.5 5.7-18.2 14.4-22s18.9-2.1 25.9 4.4l112 104c4.9 4.5 7.7 10.9 7.7 17.6z"/>
                                </svg>
        
                            </div>
                        </div>
                    </div>
                    <div class="calendar-body p-[20px]">
                        <div class="MonthContainer hidden">
    
                            <ul class="calendar-months grid grid-cols-3 gap-4 text-xl text-dark font-black">
                                {{-- The Months are Produced by JS --}}
                            </ul>
    
                        </div>
    
                        <div class="YearContainer hidden">
                           
                            <ul class="calendar-years grid grid-cols-3 gap-4 text-xl text-dark font-black">
                                 {{-- The Years are Produced by JS --}}
                            </ul>
    
                            <h3 class="mt-5 bg-primary text-xl font-bold text-light px-5 py-3 rounded-lg text-center">
                                Note: <br> You cannot reserve more than (3) three years from now
                            </h3>
                            
                        </div>
    
                        <div class="WeekDayContainer">
    
                            <ul class="calendar-weeks text-xxl flex flex-wrap text-dark text-center font-bold">
                                <li>Sun</li>
                                <li>Mon</li>
                                <li>Tue</li>
                                <li>Wed</li>
                                <li>Thu</li>
                                <li>Fri</li>
                                <li>Sat</li>
                            </ul>
                    
                            <ul class="calendar-days text-xxl flex flex-wrap text-dark text-center mb-20">
                                {{-- The Days are Produced by JS --}}
                            </ul>
    
                        </div>
                    </div>
                    
               </div>
    
            </div>
            
    
            {{--? This is the Right Container --}}
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
                    
                    <h3 class="calendar-selected display-font text-dark drop-shadow-lg py-2 text-[35px]">
                        Select a Date
                    </h3>
                    
                    
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
                    <button id="goToEventSelection" type="submit" class="w-full text-light mt-4 font-bold uppercase text-md py-3 px-8 bg-primary
                        transition ease-in-out hover:bg-primary-dark shadow-lg">
                        Next
                    </button>
                </div>
    
    
            </div>
        </div>
    </div>
</div>
