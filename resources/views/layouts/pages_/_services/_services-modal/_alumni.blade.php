<div id="modal-alumni-info" class="hidden">
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
                    class="alumni-modal-exit">
                </lord-icon>
            </div>
            {{-- Modal Body  --}}
            <div class="px-10 py-3 flex">
                <div class=" px-1 py-3 flex justify-between">
                    <img class="bg-primary p-1 rounded-xl shadow-xl mt-2 w-full h-auto "
                         src="{{ URL::to('assets/img/services/_alumni.png') }}"
                         alt="Alumni Reunions Event" style="width: 2005px; height: auto;">
                </div>
                <div class="w-1/2 px-5">
                    <h1 class="uppercase font-bold text-center text-dark text-xl ">Alumni Reunions Event</h1>
                    <br>
                    <p class="text-base text-dark">
                    🎓 Reconnect and Celebrate: Let Us Craft Your Perfect Alumni Reunion! 🎉🎓 Step into
                    a world where every detail is meticulously organized, and every moment is filled with
                    nostalgia and joy. Elevate your special gathering with the expert coordination and
                    seamless service of our dedicated team. From the initial planning to the final
                    farewell, we're committed to bringing your alumni memories to life and curating
                    a celebration that reflects the bond of your shared experiences. Indulge in our
                    delightful offerings, customized to evoke fond memories and leave your fellow
                    alumni captivated. With careful attention to detail and a dedication to excellence,
                    we'll ensure that your reunion is a cherished event. Book now to embark on
                    the journey of planning the alumni reunion of your dreams, where every moment is
                    cherished, and memories are rekindled to last a lifetime. 🎓🎁
                    </p>
                    <div class="text-right mt-4 mb-4">
                        <a href="#" class="bg-dark py-4 px-5 w-[150px] text-white font-bold rounded-lg transition ease-in-out hover:bg-primary relative -bottom-[3.7rem] -right-7 show-alumni-modal ">Go to Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
