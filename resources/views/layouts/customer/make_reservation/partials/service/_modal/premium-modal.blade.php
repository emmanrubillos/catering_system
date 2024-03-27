{{--? BY PAX MODAL --}}
<div id="modal-premium-by-pax" class="hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-dark bg-opacity-50 z-40">
        {{-- Modal Body --}}
        <div class="bg-light shadow-lg w-[28rem] h-[33rem]">
            <div class="flex flex-col mx-4 my-3">
                <div class="flex justify-between">
                    <h1 class="before:border-primary before:border-l-4 before:mr-3 text-primary display-font text-[25px]">
                        Premium by Pax
                    </h1>
                    <lord-icon
                        src="https://cdn.lordicon.com/zxvuvcnc.json"
                        trigger="hover"
                        state="hover-cross-2"
                        colors="primary:#FF731D"
                        style="width:40px;height:40px"
                        class="premium-modal-exit">
                    </lord-icon>
                </div>

                <hr class="border-[1px]  border-dark my-1">

                <div class="flex flex-row w-full h-[140px] p-3 gap-3">
                    <div class="basis-2/4 text-center self-center">
                        <h2 class="text-primary text-[38px] drop-shadow-lg font-black base-font leading-8">
                            ₱ 280.00 <br>
                            <span class="text-dark text-xl base-font">Per Head</span>
                        </h2>
                    </div>
                    <div class="basis-2/4 ">
                        <p class="text-xsm text-justify text-dark font-bold leading-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Tempora ipsa debitis magni animi autem excepturi sed cumque
                            officiis illo ipsum. Aut eius tempore sed labore eos eum nemo 
                            cupiditate? Ea!
                        </p>
                    </div>
                </div>

                <hr class="border-[1px]  border-dark mb-2">

                <div class="flex flex-col">
                    <div class="flex flex-row gap-5">
                        <div class="flex flex-col basis-2/4">
                            <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-[30px] mr-3">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#FF731D"  d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                </svg>
    
                                <h1 class="font-bold uppercase text-[12px] text-light bg-primary py-1 px-3 mt-1 rounded-lg shadow-sm">
                                    How many Guest?
                                </h1>
                            </div>
    
                            <input id="first_name" type="first_name" placeholder="How many guest" class="w-full my-2 form-control text-dark text-sm px-3 py-2 border-none rounded-md shadow-md
                            ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                            @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                        </div>
                        <div class="flex flex-col basis-2/4">
                            <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[30px] mr-3">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#FF731D" d="M512 256c0 .9 0 1.8 0 2.7c-.4 36.5-33.6 61.3-70.1 61.3H344c-26.5 0-48 21.5-48 48c0 3.4 .4 6.7 1 9.9c2.1 10.2 6.5 20 10.8 29.9c6.1 13.8 12.1 27.5 12.1 42c0 31.8-21.6 60.7-53.4 62c-3.5 .1-7 .2-10.6 .2C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm96 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
                                </svg>
    
                                <h1 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg shadow-sm">
                                    Theme Color?
                                </h1>
                            </div>
    
                            <input id="first_name" type="first_name" placeholder="Select a theme color" class="w-full my-2 form-control text-dark text-sm px-3 py-2 border-none rounded-md shadow-md
                            ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                            @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
                        </div>
        
                    </div>
                    <div class="flex flex-col">
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[30px] mr-3">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#FF731D" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                            </svg>

                            <h1 class="font-bold uppercase text-[12px] text-light bg-primary py-1 px-3 mt-1 rounded-lg shadow-sm">
                                More details about your event   
                            </h1>
                        </div>

                        <div class="col-span-full my-3">
                            <textarea id="message" name="message" placeholder="More details ..." rows="3" class="block w-full rounded-md border-0 px-3 py-3 text-sm
                            shadow-md ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary leading-6"></textarea>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button class="bg-primary text-light uppercase font-bold text-md px-20 py-2
                        transition ease-in-out hover:scale-110 shadow-lg">
                       Next
                        </button>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>