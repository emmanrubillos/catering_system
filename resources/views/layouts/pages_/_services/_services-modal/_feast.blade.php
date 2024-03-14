<div id="modal-feast-info" class="hidden">
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
                    class="feast-modal-exit">
                </lord-icon>
            </div>
            {{-- Modal Body  --}}
            <div class="px-10 py-3 flex">
                <div class=" px-1 py-3 flex justify-between">
                    <img class="bg-primary p-1 rounded-xl shadow-xl mt-2 w-full h-auto "
                         src="{{ URL::to('assets/img/services/_feast.png') }}"
                         alt="Feast Event" style="width: 2005px; height: auto;">
                </div>
                <div class="w-1/2 px-5">
                    <h1 class="uppercase font-bold text-center text-dark text-xl ">Feast Event</h1>
                    <br>
                    <p class="text-base text-dark">
                    🍽️ Indulge in Unforgettable Moments: Let Us Craft Your Perfect Feast! 🎉🥂
                    Step into a world where every detail is meticulously prepared, and every moment
                    is filled with abundance and joy. Elevate your special occasion with the culinary
                    mastery and impeccable service of our dedicated team. From the initial planning to
                    the last bite, we're committed to bringing your vision to life and curating a
                    feast that celebrates the richness of life. Delight in our mouthwatering dishes,
                    customized to tantalize your palate and leave your guests in awe. With careful
                    consideration and a commitment to excellence, we'll ensure that your feast is
                    an experience to savor. Book now to embark on the journey of planning the
                    celebratory feast of your dreams, where every moment is savored, and memories
                    are crafted to last a lifetime. 🍽️🎁
                    </p>
                    <div class="text-right mt-4 mb-4">
                        <a href="#" class="bg-dark py-4 px-5 w-[150px] text-white font-bold rounded-lg transition ease-in-out
                         hover:bg-primary relative -bottom-[3.7rem] -right-7 show-f-modal ">Go to Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
