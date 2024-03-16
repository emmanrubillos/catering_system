@extends('layouts.inc.header')

@section('content')

<div class="section w-full h-160 bg-light">


    <div class="relative text-center bg-light top-40">

        <div class="h-[80rem]">
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
                            Craft Your Perfect Wedding:
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
                            Read more
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
                            transition ease-in-out hover:scale-110 show-birthday-modal">
                            Read more
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
                        transition ease-in-out hover:scale-110 show-christening-modal">
                        Read more
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
                            Your Perfect Celebration Awaits:
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
                            transition ease-in-out hover:scale-110 show-anniversary-modal">
                            Read more
                            </button>
                        </a>
                    </div>

                    <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10 h-[180px]">
                        <h1 class="text-center text-primary uppercase font-bold text-xl">
                            Feast
                        </h1>
                        <h2 class="font-semibold text-dark">
                            Let's Celebrate the Patron Fiesta:
                        </h2>
                        <p class="text-sm text-center text-dark overflow-hidden">
                            Step into a vibrant world where every detail radiates with color, and every moment
                            bursts with joy! Let us whisk you away on a journey filled with laughter, music, and
                            the spirit of celebration. Elevate your special day with the passionate expertise
                            and seamless service of our dedicated team. From the initial planning to the final
                            Olé!, we're committed to bringing your Fiesta vision to life and curating a celebration
                            that ignites your senses and leaves your guests enchanted. Delight in our festive
                            offerings, customized to captivate your heart and transport you to a realm of pure
                            fiesta bliss.With unwavering dedication and a commitment to perfection,
                            we'll ensure that your Fiesta event is a cherished memory for all.

                        </p>
                        <a href="" class="text-center absolute inset-x-0 -bottom-5">
                            <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                            transition ease-in-out hover:scale-110 show-feast-modal">
                            Read more
                            </button>
                        </a>
                    </div>

                    <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Conferences
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Craft Your Conference Adventure:
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden">
                    Step into a world where every detail is tailored to perfection, and every moment
                    is filled with inspiration. Elevate your professional gathering with our flawless
                    organization and expertise. From planning to execution, we'll bring your vision
                    to life, ensuring a conference that mirrors your industry's essence.
                    Delight in engaging sessions, thought-provoking discussions, and
                    networking opportunities tailored to your needs. With meticulous planning
                    and dedication, we'll make your conference unforgettable.
                    Book now to embark on the journey of planning the conference of your
                    dreams, where every moment counts, and connections are forged to last a lifetime.
                    </p>
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110 show-conference-modal">
                        Read more
                        </button>
                    </a>
                    </div>

                </div>

                {{--? Bot Services Type --}}
                <div class="flex flex-row w-full justify-between mt-10">

                    <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                        <h1 class="text-center text-primary uppercase font-bold text-xl">
                            Alumni Reunions
                        </h1>
                        <h2 class="font-semibold text-dark">
                            Reconnect and Celebrate:
                        </h2>
                        <p class="text-sm text-center text-dark overflow-hidden ">
                            Step into a world where every detail is meticulously organized, and every moment
                            is filled with nostalgia and joy. Elevate your special gathering with the expert
                            coordination and seamless service of our dedicated team. From the initial planning
                            to the final farewell, we're committed to bringing your alumni memories to life and
                            curating a celebration that reflects the bond of your shared experiences. Indulge in
                            our delightful offerings, customized to evoke fond memories and leave your fellow
                            alumni captivated. With careful attention to detail and a dedication to excellence,
                            we'll ensure that your reunion is a cherished event. Book now to embark on
                            the journey of planning the alumni reunion of your dreams, where every moment is
                            cherished, and memories are rekindled to last a lifetime.
                        </p>
                        <a href="" class="text-center absolute inset-x-0 -bottom-5">
                            <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                            transition ease-in-out hover:scale-110 show-alumni-modal">
                            Read more
                            </button>
                        </a>
                    </div>

                    <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10 h-[180px]">
                        <h1 class="text-center text-primary uppercase font-bold text-xl">
                            Burial
                        </h1>
                        <h2 class="font-semibold text-dark">
                            Honoring with Compassion:
                        </h2>
                        <p class="text-sm text-center text-dark overflow-hidden">
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
                        <a href="" class="text-center absolute inset-x-0 -bottom-5">
                            <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                            transition ease-in-out hover:scale-110 show-burial-modal">
                            Read more
                            </button>
                        </a>
                    </div>

                    <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Seminar
                    </h1>
                    <h2 class="font-semibold text-dark">
                        Live unforgettable seminars:
                    </h2>
                    <p class="text-sm text-center text-dark overflow-hidden">
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
                    <a href="" class="text-center absolute inset-x-0 -bottom-5">
                        <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                        transition ease-in-out hover:scale-110 show-seminar-modal">
                        Read more
                        </button>
                    </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

    @include('layouts.inc.footer')

</div>

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


