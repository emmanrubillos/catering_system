@extends('layouts.master')
@section('content')

<section class="w-full h-160">

    <div class="relative text-center top-40">
        <h2 class="font-['Hello_Christmas'] text-[50px] text-dark">
            Our Services
        </h2>

        <h1 class="font-bold text-primary leading-10 text-[40px]">
            Premium Catering Services <br> For Your Taste Only
        </h1>

        <br>

        <div class="flex flex-row justify-center">
            <div class="flex flex-col basis-2/4">
                <p class="text-md leading-6 text-justify-center text-dark font-semibold">
                    Enjoy exceptional cuisine tailored to your every occasion. Whether it's a wedding,
                    christening, birthday, anniversary, or any special event. Let us create unforgettable moments
                    with delicious flavors and flawless service, leaving a lasting impression on you and your guests.
                </p>
            </div>
        </div>

        <hr style="border-color: #FF731D; border-width: 2px;  margin-top: 20px; width: 86%; margin-left: auto; margin-right: auto;">

        {{-- Middle Services --}}
        <div class="flex flex-row w-full justify-between my-20">

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-auto" >
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Wedding
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Birthday
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-auto mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Christening
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>
        </div>

        {{-- Bottom Services --}}
        <div class="flex flex-row w-full justify-between my-20">

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-auto">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Anniversary
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Feast
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-auto mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Feast
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>
        </div>

        {{-- Additional Services --}}
        <div class="flex flex-row w-full justify-between my-20">

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-auto">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Additional Service 1
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quis dolores vero reprehenderit quae culpa. Pariatur dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="#" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Additional Service 2
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quis dolores vero reprehenderit quae culpa. Pariatur dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="#" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-auto mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Additional Service 3
                </h1>
                <p class="text-base text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quis dolores vero
                    reprehenderit quae culpa. Pariatur dolore unde consequuntur autem quidem est consequatur?
                </p>
                <a href="#" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full transition ease-in-out hover:scale-110">
                        Readmore
                    </button>
                </a>
            </div>
        </div>
    </div>



</section>


@endsection


