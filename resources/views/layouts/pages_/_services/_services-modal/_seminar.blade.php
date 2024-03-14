<div id="modal-seminar-info" class="hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-dark bg-opacity-50 z-40">
        <div class="bg-light rounded shadow-lg w-[70rem]">
            {{-- Modal Header --}}
            <div class="border-b px-4 py-2 flex justify-between">
                <h1 class="uppercase font-bold text-dark text-xl"></h1>
                <lord-icon
                    src="https://cdn.lordicon.com/zxvuvcnc.json"
                    trigger="hover"
                    state="hover-cross-2"
                    colors="primary:#FF731D"
                    style="width:40px;height:40px"
                    class="seminar-modal-exit">
                </lord-icon>
            </div>
            {{-- Modal Body  --}}
            <div class="px-10 py-3 flex">
                <div class=" px-1 py-3 flex justify-between">
                    <img class="bg-primary p-1 rounded-xl shadow-xl mt-2 w-full h-auto "
                         src="{{ URL::to('assets/img/services/_seminar.png') }}"
                         alt="Burial Event" style="width: 2005px; height: auto;">
                </div>
                <div class="w-1/2 px-5">
                    <h1 class="uppercase font-bold text-center text-dark text-xl ">Seminar & Workshops Event</h1>
                    <br>
                    <p class="text-base text-dark">
                        🎉 Make Your Birthday Unforgettable: Let Us Craft Your Perfect Celebration! 🎂🎈
                         Step into a world where every detail is tailored to perfection, and every
                          moment is brimming with joy and excitement. Elevate your special day with
                          the culinary expertise and flawless service of our dedicated team. From
                          the initial brainstorming session to the last slice of cake, we're committed
                           to bringing your vision to life and curating a celebration that mirrors
                           your unique personality. Delight in our decadent treats, customized to
                           delight your taste buds and leave your guests mesmerized. With meticulous
                           planning and a passion for excellence, we'll ensure that your birthday
                            bash is an experience to remember. Book now to embark on the
                             journey of planning the birthday celebration of your dreams, where
                             every moment is cherished, and memories are created to last a lifetime. 🥳🎁
                    </p>
                    <div class="text-right mt-4 mb-4">
                        <a href="#" class="bg-dark py-4 px-5 w-[150px] text-white font-bold rounded-lg transition ease-in-out hover:bg-primary relative -bottom-[3.7rem] -right-7 show-seminar-modal  ">Go to Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
