@extends('layouts.master')
@section('content')

<section class="w-full  bg-light">


    <div class="relative text-center top-40">

        <div class="flex flex-row justify-center mx-12">
            <div class="flex flex-col">
                <h2 class="cusive-font text-[50px] text-dark">
                    Our Services
                </h2>
                <h1 class="font-bold text-primary leading-10 text-[40px] my-5">
                    Premium Catering Services <br> For Your Taste Only
                </h1>
                <p class="text-md leading-6 text-dark font-semibold p-4">
                    Enjoy exceptional cuisine tailored to your every occasion. Whether it's a wedding,
                    christening, birthday, anniversary, or any special event. Let us create unforgettable moments
                    with delicious flavors and flawless service, leaving a lasting impression on you and your guests.
                </p>
            </div>
        </div>

        <hr class="mx-12 text-primary my-4">

        <div class="mx-12">
            {{--? Top Services Type --}}
            <div class="flex flex-row w-full justify-between mt-10">

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Wedding
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Say "I Do" to Unforgettable Moments:
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden ">
                        Let Us Cater Your Dream Wedding! Step into a
                        world where every detail is meticulously crafted to perfection, and every moment is infused
                        with romance and joy. Elevate your special day with the culinary mastery and impeccable
                        service of our experienced team. From the first consultation to the final bite of cake,
                        we'll work tirelessly to bring your vision to life and create a celebration that reflects
                        your unique love story. Indulge in our exquisite cuisine, customized to tantalize your
                        taste buds and leave your guests enchanted. With seamless execution and unwavering attention
                        to detail, we'll ensure that your wedding day is nothing short of magical.
                        Book now to begin the journey ofplanning the wedding of your dreams, where every moment 
                        is cherished and memories are made to last a lifetime.  
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110 show-wedding-modal">
                        Readmore
                        </button>
                    </a>
                </div>

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10 h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Birthday
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Make Your Birthday Unforgettable:
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden">
                        Let Us Craft Your Perfect Celebration!
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
                        every moment is cherished, and memories are created to last a lifetime. 
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110">
                        Readmore
                        </button>
                    </a>
                </div>

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Christening
                </h1>
                <h2 class="font-semibold text-dark">
                    Embrace Unforgettable Moments:
                </h2>
                <p class="text-sm text-center text-dark overflow-hidden">
                    Let Us Craft Your Perfect Christening Celebration!
                    Step into a world where every detail is meticulously tailored, and every moment is
                    filled with love and joy. Elevate your special day with the heartfelt expertise and
                    seamless service of our dedicated team. From the initial planning to the final blessing,
                    we're committed to bringing your vision to life and curating a celebration that reflects
                    the sanctity of this cherished occasion. Delight in our divine offerings, customized
                    to enchant your senses and leave your guests touched by the spirit of the day.
                    With unwavering dedication and a commitment to perfection, we'll ensure that
                    your christening event is a treasured memory for all. Book now to
                    embark on the journey of planning the christening celebration of your dreams,
                    where every moment is blessed, and memories are crafted to last a lifetime. 
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                    Readmore
                    </button>
                </a>
                </div>
                
            </div>

            {{--? Mid Services Type --}}
            <div class="flex flex-row w-full justify-between mt-10">

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Anniversary
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Let Us Craft Your Perfect Celebration!
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden ">
                        Step into a world where every detail is tailored to perfection, and every moment is
                        brimming with love and joy. Elevate your special day with the exquisite expertise and 
                        impeccable service of our dedicated team. From the initial concept to the last dance, 
                        we're committed to bringing your vision to life and curating a celebration that reflects 
                        the depth of your bond. Indulge in our delectable offerings, customized to tantalize your 
                        senses and leave your guests enchanted. With meticulous planning and a commitment to 
                        excellence, we'll ensure that your anniversary soirée is a cherished milestone.  
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110">
                        Readmore
                        </button>
                    </a>
                </div>

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10 h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Fiesta
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Let's Celebrate the Patron Feista
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden">
                        Get ready to dance the night away and immerse yourself in the vibrant energy of 
                        our anniversary fiesta! From lively music to mouthwatering cuisine, we'll create 
                        an unforgettable celebration that radiates love and happiness. Join us in honoring 
                        your special bond with a fiesta filled with laughter, love, and unforgettable memories. 
                        Viva la Fiesta!" 
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110">
                        Readmore
                        </button>
                    </a>
                </div>

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Conferences
                </h1>
                <h2 class="font-semibold text-dark">
                    Embrace Unforgettable Moments:
                </h2>
                <p class="text-sm text-center text-dark overflow-hidden">
                    Let Us Craft Your Perfect Christening Celebration! 🕊️🎉
                    Step into a world where every detail is meticulously tailored, and every moment is
                    filled with love and joy. Elevate your special day with the heartfelt expertise and
                    seamless service of our dedicated team. From the initial planning to the final blessing,
                    we're committed to bringing your vision to life and curating a celebration that reflects
                    the sanctity of this cherished occasion. Delight in our divine offerings, customized
                    to enchant your senses and leave your guests touched by the spirit of the day.
                    With unwavering dedication and a commitment to perfection, we'll ensure that
                    your christening event is a treasured memory for all. Book now to
                    embark on the journey of planning the christening celebration of your dreams,
                    where every moment is blessed, and memories are crafted to last a lifetime. 
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                    Readmore
                    </button>
                </a>
                </div>
                
            </div>

            {{--? Bot Services Type --}}
            <div class="flex flex-row w-full justify-between mt-10">

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Wedding
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Say "I Do" to Unforgettable Moments:
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden ">
                        Let Us Cater Your Dream Wedding! Step into a
                        world where every detail is meticulously crafted to perfection, and every moment is infused
                        with romance and joy. Elevate your special day with the culinary mastery and impeccable
                        service of our experienced team. From the first consultation to the final bite of cake,
                        we'll work tirelessly to bring your vision to life and create a celebration that reflects
                        your unique love story. Indulge in our exquisite cuisine, customized to tantalize your
                        taste buds and leave your guests enchanted. With seamless execution and unwavering attention
                        to detail, we'll ensure that your wedding day is nothing short of magical.
                        Book now to begin the journey ofplanning the wedding of your dreams, where every moment 
                        is cherished and memories are made to last a lifetime.  
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110">
                        Readmore
                        </button>
                    </a>
                </div>

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10 h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Birthday
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Make Your Birthday Unforgettable:
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden">
                        Let Us Craft Your Perfect Celebration!
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
                        every moment is cherished, and memories are created to last a lifetime. 
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110">
                        Readmore
                        </button>
                    </a>
                </div>

                <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Christening
                </h1>
                <h2 class="font-semibold text-dark">
                    Embrace Unforgettable Moments:
                </h2>
                <p class="text-sm text-center text-dark overflow-hidden">
                    Let Us Craft Your Perfect Christening Celebration!
                    Step into a world where every detail is meticulously tailored, and every moment is
                    filled with love and joy. Elevate your special day with the heartfelt expertise and
                    seamless service of our dedicated team. From the initial planning to the final blessing,
                    we're committed to bringing your vision to life and curating a celebration that reflects
                    the sanctity of this cherished occasion. Delight in our divine offerings, customized
                    to enchant your senses and leave your guests touched by the spirit of the day.
                    With unwavering dedication and a commitment to perfection, we'll ensure that
                    your christening event is a treasured memory for all. Book now to
                    embark on the journey of planning the christening celebration of your dreams,
                    where every moment is blessed, and memories are crafted to last a lifetime. 
                </p>
                <a href="" class="text-center absolute inset-x-0 -bottom-5">
                    <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                    transition ease-in-out hover:scale-110">
                    Readmore
                    </button>
                </a>
                </div>
                
            </div>

        </div>


    {{-- <div id="Sample-Data">
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
    </div> --}}



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


