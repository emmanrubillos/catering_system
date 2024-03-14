<div id="modal-wedding-info" class="hidden">
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
                    class="wedding-modal-exit">
                </lord-icon>
            </div>
            {{-- Modal Body  --}}
            <div class="px-10 py-3 flex">
                <div class=" px-1 py-3 flex justify-between">
                    <img class="bg-primary p-1 rounded-xl shadow-xl mt-2 w-full h-auto "
                         src="{{ URL::to('assets/img/services/_wedding.png') }}"
                         alt="Wedding Event" style="width: 2005px; height: auto;">
                </div>
                <div class="w-1/2 px-5">
                    <h1 class="uppercase font-bold text-center text-dark text-xl ">Wedding Event</h1>
                    <br>
                    <p class="text-base text-dark">
                        "🤵 Say "I Do" to Unforgettable Moments: Let Us Cater Your Dream Wedding! 👰🤵 Step into a
                        world where every detail is meticulously crafted to perfection, and every moment is infused
                        with romance and joy. Elevate your special day with the culinary mastery and impeccable
                        service of our experienced team. From the first consultation to the final bite of cake,
                        we'll work tirelessly to bring your vision to life and create a celebration that reflects
                        your unique love story. Indulge in our exquisite cuisine, customized to tantalize your
                        taste buds and leave your guests enchanted. With seamless execution and unwavering attention
                        to detail, we'll ensure that your wedding day is nothing short of magical.
                        Book now to begin the journey of
                        planning the wedding of your dreams, where every moment is cherished and memories are made to last a lifetime.
                    </p>
                    <div class="text-right mt-4 mb-4">
                        <a href="#" class="bg-dark py-4 px-5 w-[150px] text-white font-bold rounded-lg transition ease-in-out
                         hover:bg-primary relative -bottom-[3.7rem] -right-7 show-wedding-modal ">Go to Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
