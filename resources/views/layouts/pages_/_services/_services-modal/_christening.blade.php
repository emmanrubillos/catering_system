<div id="modal-christening-info" class="hidden">
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
                    class="christening-modal-exit">
                </lord-icon>
            </div>
            {{-- Modal Body  --}}
            <div class="px-10 py-3 flex">
                <div class=" px-1 py-3 flex justify-between">
                    <img class="bg-primary p-1 rounded-xl shadow-xl mt-2 w-full h-auto "
                         src="{{ URL::to('assets/img/services/_christening.png') }}"
                         alt="Christening Event" style="width: 2005px; height: auto;">
                </div>
                <div class="w-1/2 px-5">
                    <h1 class="uppercase font-bold text-center text-dark text-xl ">Christening Event</h1>
                    <br>
                    <p class="text-base text-dark">

                    👶 Embrace Unforgettable Moments: Let Us Craft Your Perfect Christening Celebration! 🕊️🎉
                     Step into a world where every detail is meticulously tailored, and every moment is
                     filled with love and joy. Elevate your special day with the heartfelt expertise and
                     seamless service of our dedicated team. From the initial planning to the final blessing,
                      we're committed to bringing your vision to life and curating a celebration that reflects
                      the sanctity of this cherished occasion. Delight in our divine offerings, customized
                      to enchant your senses and leave your guests touched by the spirit of the day.
                      With unwavering dedication and a commitment to perfection, we'll ensure that
                      your christening event is a treasured memory for all. Book now to
                       embark on the journey of planning the christening celebration of your dreams,
                       where every moment is blessed, and memories are crafted to last a lifetime. 🕊️🎁
                    </p>
                    <div class="text-right mt-4 mb-4">
                        <a href="#" class="bg-dark py-4 px-5 w-[150px] text-white font-bold rounded-lg transition ease-in-out hover:bg-primary relative -bottom-[3.7rem] -right-7 show-christening-modal ">Go to Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
