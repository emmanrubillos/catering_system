<div id="modal-seminar-info" class="hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-dark bg-opacity-50 z-40">
        <div class="bg-light shadow-lg w-[70rem] h-[25rem]">
            {{-- Modal Body --}}
            <div class="flex flex-row gap-3">
                <div class="bg-light h-[25rem] w-2/4 ">

                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[25rem] overflow-hidden md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('assets/img/services/Seminar/Seminar_01.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('assets/img/services/Seminar/Seminar_02.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('assets/img/services/Seminar/Seminar_03.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('assets/img/services/Seminar/Seminar_04.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('assets/img/services/Seminar/Seminar_05.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
                <div class="bg-cover h-[25rem] w-2/4 ">
                    <div class="flex justify-between px-3 py-2">
                        <h1 class="before:border-primary before:border-l-4 before:mr-3 text-primary display-font text-[60px]">
                            Seminar
                        </h1>
                        <lord-icon
                            src="https://cdn.lordicon.com/zxvuvcnc.json"
                            trigger="hover"
                            state="hover-cross-2"
                            colors="primary:#FF731D"
                            style="width:40px;height:40px"
                            class="seminar-modal-exit">
                        </lord-icon>
                    </div>

                    <div class="px-3 py-2">
                        <span class=" font-bold text-light bg-dark px-5 py-2 text-base rounded-r-xl">
                            Live unforgettable seminars:
                        </span>
                    </div>

                    <div class="pl-3 pr-7 py-2">
                        <p class="text-sm text-justify font-semibold text-dark indent-10">
                            As you prepare to bid farewell to your loved one, allow us to extend our
                            heartfelt condolences and support during this difficult time. We understand
                             the importance of commemorating their life with dignity and respect.
                            Our compassionate team is here to assist you in arranging the catering
                            for the burial service and gathering afterward. With meticulous attention
                            to detail and a commitment to honoring your wishes, we will ensure that
                            every aspect of the catering is handled with care and consideration.
                            From comforting dishes to accommodate your guests' needs to seamless
                            coordination of logistics, we are dedicated to providing a service that
                            alleviates the burden during this period of mourning. Our goal is to
                            create a peaceful and comforting environment where you and your loved
                            ones can come together to share memories and find solace.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
