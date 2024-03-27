{{--? Event Reservation --}}
<div id="eventSelection" class="hidden">
    <div class="relative top-[-9rem]">
        <div class="mx-[20rem]">
            <div class="text-center">
                <h1 class="relative -bottom-5 text-primary display-font bg-light py-1 px-4 mx-[7.5rem] text-xxl rounded-md">
                    The Event Selection
                </h1>
                <h2 class="bg-dark px-14 py-7 text-light font-bold rounded-md text-xxl shadow-xl">
                    Note: 
                    <br>
                    <span class="text-xl leading-7 font-semibold">
                        Please select the event you wish to reserve!
                    </span>
                </h2>
            </div>
        </div>

        <div class="mx-16 mt-10">
            <button id="goBackToCalendar" class="bg-dark !important font-bold text-xl px-8 py-2 text-light uppercase
            transition ease-in-out delay-100 hover:bg-darker">
                Back
            </button>
        </div>
    
        <div class="flex flex-col gap-5 h-[45rem] mx-16">
            
            {{--? Top Services Type --}}
            <div class="flex flex-row w-full justify-between mt-10 gap-8">
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Wedding
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-wedding-modal shadow-lg">
                        Read more
                        </button>
    
                        <button id="goToPackageOrPax" class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110  shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Birthday
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-birthday-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Christening
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-christening-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
            </div>
    
            {{--? Mid Services Type --}}
            <div class="flex flex-row w-full justify-between mt-10 gap-8">
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Anniversary
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-anniversary-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Feast
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-feast-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Conferences
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-conference-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
            </div>
    
            {{--? Bot Services Type --}}
            <div class="flex flex-row w-full justify-between mt-10">
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Alumni Reunions
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-alumni-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10 h-[180px]">
                    <h1 class="text-center text-primary uppercase font-bold text-xl">
                        Burial
                    </h1>
                    <h2 class="font-semibold text-center text-dark">
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
                        <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                        transition ease-in-out hover:scale-110 show-burial-modal shadow-lg">
                        Read more
                        </button>
    
                        <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                        transition ease-in-out hover:scale-110 shadow-lg">
                        Select
                        </button>
                    </a>
                </div>
    
                <div class="basis-2/6 bg-light flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
                <h1 class="text-center text-primary uppercase font-bold text-xl">
                    Seminar
                </h1>
                <h2 class="font-semibold text-center text-dark">
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
                    <button class="bg-dark text-light uppercase font-semibold text-base px-5 py-2 rounded-l-full
                    transition ease-in-out hover:scale-110 show-seminar-modal shadow-lg">
                    Read more
                    </button>
    
                    <button class="bg-primary text-light uppercase font-semibold text-base px-5 py-2 rounded-r-full
                    transition ease-in-out hover:scale-110 shadow-lg">
                    Select
                    </button>
                </a>
                </div>
    
            </div>
    
        </div>
    
    </div>
</div>