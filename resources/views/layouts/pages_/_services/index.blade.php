@extends('layouts.master')
@section('content')

<section class="w-full  bg-light">


    <div class="relative text-center top-40">
        <h2 class="font-['Hello_Christmas'] cusive-font text-[50px] text-dark">
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

        <hr style="border-color: #FF731D; border-width: 2px;  margin-top: 20px; width: 90%; margin-left: auto; margin-right: auto;">

        {{-- Middle Services --}}
        <div class="flex flex-row w-full justify-between mt-10">

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-auto" >
                <h1 class="text-center text-primary uppercase font-bold text-xl" >
                    Wedding
                </h1>
                <p class=" text-base text-center">
                    Let the flavors of your love story come alive on your wedding day with
                    a caterer who understands your tastes and preferences.
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110 show-wedding-modal">
                        Read more
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Birthday
                </h1>
                <p class="text-base text-center">
                    Elevate your birthday celebration with a caterer who specializes in crafting culinary
                     masterpieces, making your special day as unforgettable as you are.
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110 show-birthday-modal">
                        Read more
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-auto mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Christening
                </h1>
                <p class="text-base text-center">
                    Let a skilled caterer take care of the details so you can focus
                    on cherishing every moment of your baby's christening day.
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110 show-christening-modal">
                        Read more
                    </button>
                </a>
            </div>
        </div>

        {{-- Bottom Services --}}
        <div class="flex flex-row w-full justify-between mt-10">

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-auto">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Anniversary
                </h1>
                <p class="text-base text-center">
                    Toast to another year of love and laughter with a caterer who understands
                     that every anniversary is a milestone worth celebrating in style.
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110 show-anniversary-modal">
                        Read more
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Feast
                </h1>
                <p class="text-base text-center">
                    Embrace the abundance of life with a caterer who will fill your table with
                     an array of culinary delights, ensuring that no appetite goes unsatisfied.
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110 show-feast-modal">
                        Read more
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-auto mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Conferences
                </h1>
                <p class="text-base text-center">
                    Maximize the impact of your conference with catering that goes beyond expectations,
                    delivering culinary delights that keep participants engaged and energized.
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110 show-conference-modal">
                        Read more
                    </button>
                </a>
            </div>
        </div>

        {{-- Additional Services --}}
        <div class="flex flex-row w-full justify-between mt-10">

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-auto">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Alumni Reunions
                </h1>
                <p class="text-base text-center">
                    Reconnect with your past and celebrate the present with catering that adds
                    flavor to the bonds forged through shared experiences.
                </p>
                <a href="#" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full transition ease-in-out hover:scale-110 show-alumni-modal">
                        Read more
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Burial
                </h1>
                <p class="text-base text-center">
                    Though words may fail, the gesture of providing food speaks
                     volumes of care and compassion during times of loss.
                </p>
                <a href="#" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full transition ease-in-out hover:scale-110 show-burial-modal">
                        Read more
                    </button>
                </a>
            </div>

            <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-auto mr-10">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Seminars and Workshops
                </h1>
                <p class="text-base text-center">
                    Make a lasting impression on your attendees with catering that reflects the quality and
                    value of your seminar or workshop, leaving them eager to return for future events.
                </p>
                <a href="#" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full transition ease-in-out hover:scale-110 show-seminar-modal ">
                        Read more
                    </button>
                </a>
            </div>
        </div>
    </div>



</section>

@include('layouts.pages_._services._services-modal._wedding')
@include('layouts.pages_._services._services-modal._birthday')
@include('layouts.pages_._services._services-modal._christening')
@include('layouts.pages_._services._services-modal._anniversary')
@include('layouts.pages_._services._services-modal._feast')
@include('layouts.pages_._services._services-modal._conference')
@include('layouts.pages_._services._services-modal._alumni')
@include('layouts.pages_._services._services-modal._burial')
@include('layouts.pages_._services._services-modal._seminar')

@include('layouts.pages_._services.scripts.read-more-services-script')
@endsection


