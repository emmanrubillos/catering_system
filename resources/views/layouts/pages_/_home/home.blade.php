@extends('layouts.inc.header')

@section('content')
  <div class="section w-full h-160 z-0">

    {{--? Home Top Container  --}}
    <div class="home h-full">
        <div class="relative text-center top-40">
          <h3 class="-top-3 inset-0 absolute font-semibold text-xxl text-light">
            WELCOME TO
          </h3>
          <h1 class=" inset-0 absolute cusive-font text-[120px] text-dark">
            Titan's Catering
          </h1>
          <h2 class="inset-0 top-[125px] absolute text-[30px] uppercase font-bold text-dark">
            Service & Food
          </h2>
          <h3 class="inset-0 top-[180px] absolute font-bold text-[50px] leading-[55px] mx-56 text-light">
            We Provide Exceptional Catering Services for your Dream Event.
          </h3>
          <p class="inset-0 top-[300px] absolute font-semibold leading-6 text-md text-dark mx-56">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, delectus rem.
            Iure consectetur nam laborum delectus, perferendis reprehenderit omnis ea nobis.
            Sequi error dolor doloribus ut sit placeat nemo quia! Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Dolore, delectus rem. Iure consectetur nam laborum
            electus, perferendis reprehenderit omnis ea nobis. Sequi error dolor doloribus ut
            sit placeat nemo quia!
          </p>
          <div class="top-[425px] inset-0 absolute z-10">
            <a href="{{ route('customer.make_reservation') }}">
                <button class="uppercase bg-primary text-light font-bold rounded-lg px-4 tablet:px-10 py-4 text-md
                    tablet:text-sm laptop:text-base transition delay-100 ease-in-out hover:scale-110">
                    Make A Reservation
                </button>
            </a>
          </div>
        </div>

        <img class="absolute bottom-0 z-0"
        src="{{ URL::to('assets/img/wave-home.svg') }}" alt="wave-home-bottom">

    </div>

    {{--? About Us Container --}}
    <div class="relative -top-56">
        {{--? About Top --}}
        <div class="flex flex-row bg-light w-3/5 mx-auto rounded-3xl shadow-xl">

          <div class="image-of-Catereer bg-cover basis-2/5 ltr">
            <img class="rounded-s-3xl ring-1 ring-dark/5"
            src="{{ URL::to('assets/img/background-images/home-about-bg.png') }}" alt="catereer-img">
          </div>

          <div class="details-about-us basis-3/5 px-8">

            <h1 class="mt-3 mb-3 cusive-font text-dark text text-[40px]">
              Abous Us
            </h1>

            <h2 class="text-primary leading-8 font-bold text-[35px] mb-3">
              Welcome To The <br> Best Catering Company
            </h2>

            <p class="text-justify text-dark leading-5 text-[15px] font-bold">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis quis dolores vero reprehenderit quae culpa. Pariatur
              dolore unde consequuntur autem quidem est consequatur? Enim
              praesentium minus voluptas doloribus, reprehenderit provident!
            </p>

            <h4 class="my-3 font-bold text-primary text-[23px]">7 Years Experiences In This Business</h4>
            <ul>

              <li class="flex flex-row">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span>100% Guarantee For Our Product Quality</span>
              </li>

              <li class="flex flex-row my-2">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span>100% Guarantee For Our Product Quality</span>
              </li>

              <li class="flex flex-row">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span>100% Guarantee For Our Product Quality</span>
              </li>

            </ul>

            <ul class="my-8">

              <li class="flex flex-col text-center">
                <h1 class="font-bold text-dark text-lg">NAME OF THE CATEREER</h1>
                <h2 class="uppercase font-semibold text-dark">The Catereer</h2>
              </li>

            </ul>

          </div>

        </div>

        {{-- ? About Bottom  --}}
        <div class="flex flex-row justify-between mt-11 mx-16">
        {{--? Left-bot --}}
        <div class="flex flex-col basis-3/5 mr-10">
          <h1 class="font-bold text-dark leading-[3rem] text-[40px]">
            Premium Catering Services <br> For Your Taste Only
          </h1>
          <p class="mt-5 mb-8 text-justify text-dark text-base">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur
            dolore unde consequuntur autem quidem est consequatur? Enim
            praesentium minus voluptas doloribus, reprehenderit provident!
          </p>
          <a href="">
            <button class="bg-dark font-bold uppercase text-light py-2.5 px-11 shadow-xl
            transition ease-in-out hover:scale-110 hover:bg-primary">
              About Us
            </button>
          </a>
        </div>

        {{--? Right-Bot --}}
        <div class="bg-light flex flex-col basis-2/5 ml-10 shadow-2xl rounded-b-3xl p-10 pt-4 relative mx-20">
          <h1 class="font-bold text-xxl text-primary text-center mb-4">
            7 Years Experiences
          </h1>
          <p class="text-center text-dark text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur
            dolore unde consequuntur autem quidem est consequatur? Enim
            praesentium minus voluptas doloribus, reprehenderit provident!
            dolore unde consequuntur autem quidem est consequatur? Enim
            praesentium minus voluptas doloribus, reprehenderit provident!
          </p>
          <a href="" class="text-center absolute inset-x-0 -bottom-5">
            <button class="bg-primary uppercase text-light font-bold rounded-full shadow-xl py-2.5 px-28
            transition ease-in-out hover:scale-110 hover:bg-dark">
              Read More
            </button>
          </a>
        </div>
        </div>
    </div>

    {{--? Our Services Container  --}}
    <div class="relative -top-28 bg-light h-[780px] shadow-inner py-10 px-16">
      {{--? Top Services --}}
      <div class="flex flex-row justify-between ">
        {{--? Top-left Services --}}
        <div class="flex flex-col basis-2/4 ">
          <h2 class="cusive-font text-[38px] text-dark">
            Our Services
          </h2>
          <h1 class="font-bold text-primary leading-10 text-[40px]">
            Premium Catering Services <br> For Your Taste Only
          </h1>
        </div>

        {{--? Top-right Services --}}
        <div class="flex flex-col basis-2/4">
          <p class="text-md leading-6 text-justify text-dark font-semibold">
            Elevating every moment from love's start to life's milestones.
            Let us make your occasions unforgettable with our culinary perfection.
            From weddings to birthdays, anniversaries to christenings, and
            even alumni reunions and conferences, we're here to add flavor to your special
            moments, making each one a feast to remember!
          </p>
          <a href="{{ route('services') }}">
            <button class="bg-primary text-light uppercase font-bold px-8 py-2 shadow-xl
            transition ease-in-out hover:scale-110">
              Other Event We Handle
            </button>
          </a>
        </div>
      </div>

      <div class="mx-12 ">
        {{--? Top Services Type --}}
        <div class="flex flex-row  gap-10 my-20  ">

          <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
              <h1 class="text-center text-primary uppercase font-bold text-xl">
                  Wedding
              </h1>
              <h2 class="font-semibold text-center text-dark" style="white-space: nowrap;" >
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

          <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
          <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative  h-[180px]">
              <h1 class="text-center text-primary uppercase font-bold text-xl">
                  Birthday
              </h1>
              <h2 class="font-semibold text-center text-dark">
              <h2 class="font-semibold text-center  text-dark" style="white-space: nowrap;">
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
          <h2 class="font-semibold text-center text-dark" style="white-space: nowrap;">
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

        {{--? Top Services Type --}}
        <div class="flex flex-row w-full gap-10 my-20 justify-center">

          <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
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
                  <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                  transition ease-in-out hover:scale-110 show-anniversary-modal">
                  Read more
                  </button>
              </a>
          </div>

          <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative h-[180px]">
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
                <button class="bg-dark text-light uppercase font-semibold px-10 py-2 rounded-full
                transition ease-in-out hover:scale-110 show-feast-modal">
                Read more
                </button>
            </a>
          </div>

        </div>


      </div>



    </div>
    {{--? Our Menu Container  --}}
    <div class="relative -top-28">
      <div class="bg-cover rounded-b-full h-[500px]"
           style="background-image: url('assets/img/background-images/home-menu-bg.png')">

        <div class="text-center flex flex-col py-5 mx-52">
            <h1 class="cusive-font text-[38px] text-dark">
              Our Menu
            </h1>
            <h2 class="font-bold my-4 text-primary leading-10 text-[40px]">
              Check Out Our Menu
            </h2>
            <p class="text-md text-dark leading-5 text-center font-semibold">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis quis dolores vero reprehenderit quae culpa. Pariatur
              dolore unde consequuntur autem quidem est consequatur? Enim
              praesentium minus voluptas doloribus, reprehenderit provident!
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis quis dolores vero reprehenderit quae culpa.Lorem ipsum dolor sit
              amet consectetur adipisicing elit. Omnis quis dolores vero reprehenderit quae culpa.
            </p>
          </div>

      </div>
    </div>

            {{--? Tab-Section for Menu --}}
            <div class="mx-auto grid place-items-center relative -top-80">
              <div class="tab-section bg-light rounded-lg p-5 shadow-xl w-[1200px] min-h-[800px]">
                  {{--? Table Header --}}
                  <div class="flex flex-wrap gap-3">
                      <button id="main-dish-tab" class="uppercase text-md p-4 rounded-lg text-dark font-bold flex-grow w-80
                      transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5" data-tab-target="#md-menu">
                          Main Dish
                      </button>
                      <button id="appetizer-dish-tab" class="uppercase text-md p-4 rounded-lg text-dark font-bold flex-grow w-80
                      transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5" data-tab-target="#ad-menu">
                          Appetizer Dish
                      </button>
                  </div>

                  {{--? Table Class Data MD --}}
                  <div id="md-menu" class="tab-class-menu">
                      <div id="md-class" class="flex flex-wrap gap-3 mt-3">
                          <button id="chicken-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#chicken-menu">
                              Chicken
                          </button>
                          <button id="beef-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#beef-menu">
                              Beef
                          </button>
                          <button id="pork-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#pork-menu">
                              Pork
                          </button>
                          <button id="fish-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#fish-menu">
                              Fish
                          </button>
                      </div>
                  </div>

                  {{--? Table Class Data AD --}}
                  <div id="ad-menu" class="tab-class-menu hidden">
                      <div id="ad-class" class="flex flex-wrap gap-3 mt-3">
                          <button id="vegetable-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#vegetable-menu">
                              Vegetable
                          </button>
                          <button id="pasta-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#pasta-menu">
                              Pasta
                          </button>
                          <button id="noodle-btn" class="uppercase text-base p-2 rounded-lg text-dark font-bold flex-grow w-40
                          transition ease-in-out hover:bg-primary hover:bg-opacity-40 ring-2 ring-primary ring-opacity-5"
                          data-tab-target="#noodle-menu">
                              Noodle
                          </button>
                      </div>
                  </div>

                  @include('layouts.pages_._home._menu._chicken')
                  @include('layouts.pages_._home._menu._beef')
                  @include('layouts.pages_._home._menu._pork')
                  @include('layouts.pages_._home._menu._fish')
                  @include('layouts.pages_._home._menu._vegetable')
                  @include('layouts.pages_._home._menu._pasta')
                  @include('layouts.pages_._home._menu._noodle')


              </div>
            </div>

    {{--? Our Work Container --}}
    <div class="relative -top-72 mt-10">

      <div class="text-center flex flex-col py-5 mx-52">
        <h1 class="cusive-font text-[38px] text-dark">
          Our Work
        </h1>
        <h2 class="font-bold my-4 text-primary leading-10 text-[40px]">
          Our Working Process
        </h2>
        <p class="text-md text-dark leading-5 text-center font-semibold">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Omnis quis dolores vero reprehenderit quae culpa. Pariatur
          dolore unde consequuntur autem quidem est consequatur? Enim
          praesentium minus voluptas doloribus, reprehenderit provident!
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </div>

      <div class="mx-10 grid place-items-center relative">
        <div class="flex flex-row gap-4">
          <div class="flex flex-col">
              <div class="relative place-items-center grid">
                <img class="w-32 relative -bottom-12 z-10 transition ease-in-out hover:scale-110"
                src="{{ URL::to('assets/img/Our-Work/Step-1.png') }}" alt="number 1">

                <div class="ring-4 ring-primary w-52 h-48 place-items-center grid relative
                transition ease-in-out hover:scale-110">
                  <img class="w-32 mt-4 z-0"
                  src="{{ URL::to('assets/img/Our-Work/Appointment.png') }}" alt="Logo w/ border">
                </div>

              </div>
              <div class="text-center mt-5">
                <h3 class=" text-dark font-bold text-lg">
                  Make An Appointment
                </h3>
                <p class="text-sm text-dark">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                  dolore unde consequuntur autem quidem est consequatur?
                </p>
              </div>
          </div>

          <div class="flex flex-col">
                <div class="relative place-items-center grid">
                  <img class="w-32 relative -bottom-12 z-10 transition ease-in-out hover:scale-110"
                  src="{{ URL::to('assets/img/Our-Work/Step-2.png') }}" alt="number 1">

                  <div class="ring-4 ring-primary w-52 h-48 place-items-center grid relative
                  transition ease-in-out hover:scale-110">
                    <img class="w-[9rem] mt-4 z-0"
                    src="{{ URL::to('assets/img/Our-Work/Payment.png') }}" alt="Logo w/ border">
                  </div>

                </div>
                <div class="text-center mt-5">
                  <h3 class=" text-dark font-bold text-lg">
                    Pay Your Catering
                  </h3>
                  <p class="text-sm text-dark">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                  </p>
                </div>
            </div>

        <div class="flex flex-col">
              <div class="relative place-items-center grid">
                <img class="w-32 relative -bottom-12 z-10 transition ease-in-out hover:scale-110"
                src="{{ URL::to('assets/img/Our-Work/Step-3.png') }}" alt="number 1">

                <div class="ring-4 ring-primary w-52 h-48 place-items-center grid relative
                transition ease-in-out hover:scale-110">
                  <img class="w-32 mt-4 z-0"
                  src="{{ URL::to('assets/img/Our-Work/Enjoy.png') }}" alt="Logo w/ border">
                </div>

              </div>
              <div class="text-center mt-5">
                <h3 class=" text-dark font-bold text-lg">
                  Enjoy Your Food
                </h3>
                <p class="text-sm text-dark">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                  dolore unde consequuntur autem quidem est consequatur?
                </p>
              </div>
          </div>
        </div>

      </div>

    </div>

    {{--? Our Wedding Packages Container  --}}
    <div class="relative -top-72 h-[50rem]">
      <div class="mt-10 bg-light h-[85rem] shadow-xl">

        <div class="text-center flex flex-col py-5 mx-52">
          <h1 class="cusive-font text-[38px] text-dark">
            Our Wedding Packages
          </h1>
          <h2 class="font-bold my-4 text-primary leading-10 text-[40px]">
            Choose your Wedding Package
          </h2>
          <p class="text-base text-dark leading-5 text-center font-semibold">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur
            dolore unde consequuntur autem quidem est consequatur? Enim
            praesentium minus voluptas doloribus, reprehenderit provident!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </p>
        </div>

        <div class="flex flex-row mx-20 mt-8 gap-5">
          <div class="Package-Details flex flex-col h-[35rem] basis-1/4 bg-white px-5 py-3 shadow-xl rounded-xl ">
            <h1 class="font-bold text-dark text-xl">
              Package Details
            </h1>
            <p class="text-dark text-xsm text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Omnis quis dolores vero reprehenderit quae culpa.
            </p>

            <hr class="text-dark my-2">

            <ul class="font-bold text-base">

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Foods and Catering</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Church Decoration</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Venue Decoration</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Entourage Attires</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Bouquet & Corsage</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js">Protographer & Videographer</script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Church Decoration</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Hair & Make-up</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Program & Entertainment</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Coordination</span>

              </li>


              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Light and Sounds w/ DJ</span>

              </li>

              <li class="flex flex-row mb-3">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/lomfljuq.json"
                    trigger="hover"
                    colors="primary:#ff731d"
                    style="width:25px;height:25px">
                </lord-icon>
                <span class="ml-3 mr-1 text-dark text-semibold">Freebies</span>

              </li>

            </ul>
          </div>

          <div class="flex flex-col basis-3/4 gap-5">
            {{--? Basic Package Summary --}}
            <div class="basis-1/3 bg-primary bg-opacity-10 shadow-lg rounded-lg rounded-br-none">
              <div class="flex flex-row p-5">

                <div class="basis-1/4 mr-5 flex flex-col">
                  <img class="bg-primary p-2 rounded-xl shadow-xl"
                  src="{{ URL::to('assets/img/package/basic-150px.png') }}" alt="basic-package-img">
                  <p class="text-xsm text-dark mt-2 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                  </p>
                </div>

                <div class="basis-3/3 mr-3">
                  <h6 class="text-dark font-bold text-base uppercase">
                    Entourage Count
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="list-disc list-inside text-dark font-semibold text-sm">
                    <li>Bride</li>
                    <li>Groom</li>
                    <li>Maid of Honor</li>
                    <li>Best Man</li>
                    <li class="w-[215px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xsm font-bold text-light">
                      3 Bridesmaids and Groomsmen</li>
                    <li class="w-[125px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                      3 Flower Girls</li>
                    <li>3 Bearer</li>
                    <li>2 Mother & Father</li>
                    <li>Principal Sponsors</li>


                  </ul>
                </div>

                <div class="basis-3/3 mr-3">

                  <h6 class="text-dark font-bold text-[11px] uppercase">
                    Photographic & Videographic
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm">
                    <li class="w-[190px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                        Prenup Photo (2-3 Sets)</li>
                    <li>Photo & View Coverage</li>
                    <li>Wedding Day Photo <br>
                      <span class="text-[10px]">(Preparation Reception & Unlimited Shots)</span>
                    </li>
                    <li>Photo Highlights <br>
                      <span class="text-xsm">(will be uploaded to Facebook)</span>
                    </li>
                    <li class="w-[190px] my-1 items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                      16GB Flash Drive Storage</li>
                  </ul>
                </div>


                <div class="basis-1/16">
                  <h6 class="text-dark font-bold text-base uppercase">
                    Foods
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm">

                    <li class="w-[105px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xsm font-bold text-light">
                      3 Main Dish</li>
                    <li class="w-[105px] items-center rounded-md bg-primary px-2 py-1 text-xsm font-bold text-light">
                      1 Side Dish</li>

                      <ul class="list-disc list-inside">
                        <span class="font-bold">One Round:</span>
                        <li>Soft Drink</li>
                        <li>Dessert</li>
                        <li>Rice</li>
                      </ul>
                    </ul>
                    <button class="bg-dark py-2 px-5 w-[150px] text-light font-bold mt-10 shadow-lg
                    transition ease-in-out hover:bg-primary show-b-modal">
                      Read More
                    </button>
                </div>

              </div>

            </div>

            {{--? Standard Package Summary --}}
            <div class="basis-3/3 bg-primary bg-opacity-30 shadow-lg rounded-lg rounded-br-none">
              <div class="flex flex-row p-5">

                <div class="basis-1/4 mr-5 flex flex-col">
                  <img class="bg-primary rounded-xl shadow-xl p-2"
                  src="{{ URL::to('assets/img/package/standard-200px.png') }}" alt="basic-package-img">
                  <p class="text-xsm text-dark mt-2 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                  </p>
                </div>

                <div class="basis-3/3 mr-3">
                  <h6 class="text-dark font-bold text-base uppercase">
                    Entourage Count
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="list-disc list-inside text-dark font-semibold text-sm">
                    <li>Bride</li>
                    <li>Groom</li>
                    <li>Maid of Honor</li>
                    <li>Best Man</li>
                    <li class="w-[215px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xsm font-bold text-light">
                      5 Bridesmaids and Groomsmen</li>
                    <li class="w-[125px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                      6 Flower Girls</li>
                    <li>3 Bearer</li>
                    <li>2 Mother & Father</li>
                    <li>Principal Sponsors</li>


                  </ul>
                </div>

                <div class="basis-3/3 mr-3">

                  <h6 class="text-dark font-bold text-[11px] uppercase">
                    Photographic & Videographic
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm">
                    <li class="w-[230px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xsm font-bold text-light">
                        Prenup Photo (3-6 Sets) w/Stylist</li>
                    <li>Photo & View Coverage</li>
                    <li>Wedding Day Photo <br>
                      <span class="text-[10px]">(Preparation Reception & Unlimited Shots)</span>
                    </li>
                    <li>Photo Highlights <br>
                      <span class="text-xsm">(will be uploaded to Facebook)</span>
                    </li>
                    <li class="w-[190px] my-1 items-center rounded-md bg-primary px-2 py-1 text-xsm font-bold text-light">
                      32GB Flash Drive Storage</li>
                    <li class="w-[160px] my-1 items-center rounded-md bg-primary px-2 py-1 text-xsm font-bold text-light">
                      SDE (Same Day Edit)</li>
                    <li class="w-[230px] my-1 items-center rounded-md bg-primary px-2 py-1 text-[10.5px] font-bold text-light">
                      Printed Copies 100pcs <span class="text-[10px]">(their Choice)</span></li>
                  </ul>
                </div>


                <div class="basis-1/16">
                  <h6 class="text-dark font-bold text-base uppercase">
                    Foods
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm">

                    <li class="w-[105px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xsm font-bold text-light">
                      4 Main Dish</li>
                    <li class="w-[105px] items-center rounded-md bg-primary px-2 py-1 text-xsm font-bold text-light">
                      1 Side Dish</li>

                      <ul class="list-disc list-inside">
                        <span class="font-bold">One Round:</span>
                        <li>Soft Drink</li>
                        <li>Dessert</li>
                        <li>Rice</li>
                      </ul>
                    </ul>
                    <button class="bg-dark py-2 px-5 w-[150px] text-light font-bold mt-10 shadow-lg
                    transition ease-in-out hover:bg-primary show-s-modal">
                      Read More
                    </button>
                </div>
              </div>
            </div>

            {{--? Premium Package Summary --}}
            <div class="basis-3/3 bg-primary bg-opacity-90 shadow-lg rounded-lg">
              <div class="flex flex-row p-5">

                <div class="basis-1/4 mr-5 flex flex-col">
                  <img class=""
                  src="{{ URL::to('assets/img/package/premium-250px.png') }}" alt="basic-package-img">
                  <p class="text-xsm text-light  mt-3 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis quis dolores vero reprehenderit quae culpa. Pariatur
                    dolore unde consequuntur autem quidem est consequatur?
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                </div>

                <div class="basis-3/3 mr-3">
                  <h6 class="text-dark  font-bold text-base uppercase">
                    Entourage Count
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="list-disc list-inside text-light  font-semibold text-sm">
                    <li>Bride</li>
                    <li>Groom</li>
                    <li>Maid of Honor</li>
                    <li>Best Man</li>
                    <li class="w-[215px] items-center rounded-md mb-1 bg-light px-2 py-1 text-xsm font-bold text-dark ">
                      7 Bridesmaids and Groomsmen</li>
                    <li class="w-[125px] items-center rounded-md bg-light px-2 py-1 text-xs font-bold text-dark ">
                      8 Flower Girls</li>
                    <li>3 Bearer</li>
                    <li>2 Mother & Father</li>
                    <li>Principal Sponsors</li>


                  </ul>
                </div>

                <div class="basis-3/3 mr-3">

                  <h6 class="text-dark  font-bold text-[11px] uppercase">
                    Photographic & Videographic
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="mt-1 list-disc list-inside text-light font-semibold text-sm">
                    <li class="w-[230px] items-center rounded-md mb-1 bg-light px-2 py-1 text-xsm font-bold text-dark ">
                        Prenup Photo (6-8 Sets) w/Stylist</li>
                    <li>Photo & View Coverage</li>
                    <li>Wedding Day Photo <br>
                      <span class="text-[10px]">(Preparation Reception & Unlimited Shots)</span>
                    </li>
                    <li>Photo Highlights <br>
                      <span class="text-xsm">(will be uploaded to Facebook)</span>
                    </li>
                    <li class="w-[190px] my-1 items-center rounded-md bg-light px-2 py-1 text-xsm font-bold text-dark ">
                      64GB Flash Drive Storage</li>
                    <li class="w-[160px] my-1 items-center rounded-md bg-light px-2 py-1 text-xsm font-bold text-dark ">
                      SDE (Same Day Edit)</li>
                    <li class="w-[230px] my-1 items-center rounded-md bg-light px-2 py-1 text-[10.5px] font-bold text-dark">
                      Printed Copies 180pcs <span class="text-[10px]">(their Choice)</span></li>
                    <li class="w-[140px] my-1 items-center rounded-md bg-light px-2 py-1 text-[10.5px] font-bold text-dark">
                      with 1 Photo Album</li>
                    <li class="w-[200px] my-1 items-center rounded-md bg-light px-2 py-1 text-[10.5px] font-bold text-dark">
                      with 1 Photo Frame for Couple</li>
                    <li class="w-[140px] my-1 items-center rounded-md bg-light px-2 py-1 text-[10.5px] font-bold text-dark">
                      with 1 Guest Book</li>
                    <li class="w-[140px] my-1 items-center rounded-md bg-light px-2 py-1 text-[10.5px] font-bold text-dark">
                      PhotoBooth</li>
                  </ul>
                </div>


                <div class="basis-1/16">
                  <h6 class="text-dark  font-bold text-base uppercase">
                    Foods
                    <lord-icon
                        src="https://cdn.lordicon.com/jnzhohhs.json"
                        trigger="hover"
                        colors="primary:#181d50"
                        style="width:15px;height:15px">
                    </lord-icon>
                  </h6>
                  <ul class="mt-1 list-disc list-inside text-light  font-semibold text-sm">

                    <li class="w-[105px] items-center rounded-md  bg-light px-2 py-1 text-xsm font-bold text-dark ">
                      5 Main Dish</li>
                    <li class="w-[105px] items-center rounded-md my-1 bg-light px-2 py-1 text-xsm font-bold text-dark ">
                      1 Side Dish</li>
                    <li class="w-[120px] items-center rounded-md bg-light px-2 py-1 text-xsm font-bold text-dark ">
                      1 Lechon <span class="text-[10px]">(30kls)</span></li>
                      <ul class="list-disc list-inside">
                        <span class="font-bold text-dark">One Round:</span>
                        <li>Soft Drink</li>
                        <li>Dessert</li>
                        <li>Rice</li>
                      </ul>
                    </ul>
                    <button class="bg-dark py-2 px-5 w-[150px] text-light font-bold mt-[7.5rem] shadow-lg
                    transition ease-in-out hover:bg-light hover:text-dark show-p-modal">
                      Read More
                    </button>
                </div>

              </div>
            </div>

          </div>
        </div>

        @include('layouts.pages_._home._package-modal._basic')
        @include('layouts.pages_._home._package-modal._standard')
        @include('layouts.pages_._home._package-modal._premium')

      </div>
    </div>

    {{--? Our By Pax Container --}}
      <div class="relative top-[20rem] h-[75rem]">

        <div class="text-center flex flex-col py-5 mx-52">
          <h1 class="cusive-font text-[38px] text-dark">
            Our Wedding Packages
          </h1>
          <h2 class="font-bold my-4 text-primary leading-10 text-[40px]">
            Choose your Wedding Package
          </h2>
          <p class="text-base text-dark leading-5 text-center font-semibold">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur
            dolore unde consequuntur autem quidem est consequatur? Enim
            praesentium minus voluptas doloribus, reprehenderit provident!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </p>
        </div>

        <div class="flex flex-row gap-20 h-[30rem] mx-20 mt-10">
            {{--? left-container --}}
            <div class="bg-white rounded-b-3xl h-[25rem] basis-2/6
            transition-shadow ease-in delay-100 hover:delay-100  hover:shadow-2xl hover:scale-105 hover:shadow:dark">
                <div class="text-center mt-8 mb-1">
                    <span class="text-primary text-base font-bold px-4 py-2 rounded-3xl shadow-md
                    border-4 border-primary">
                        Basic By Pax
                    </span>
                    <h2 class="text-primary text-[30px] drop-shadow-lg font-black base-font mt-4">
                        ₱ 220.00<span class="text-dark text-md self-center base-font">/per head</span>
                    </h2>
                </div>

                <hr class="mx-7 border-[1px]  border-dark">

                <div class="mx-10">
                    <ul class="mt-4 justify-center list-inside">
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">2 Main Dish <br>Vegetable/Pasta/Noodles</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">1 Dessert</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">One Round Soft Drinks</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">One Round Rice</span>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <button class="bg-primary text-light uppercase font-bold text-md px-10 py-2 mt-5
                    transition ease-in-out hover:scale-110 shadow-lg">
                    Select
                    </button>
                </div>
            </div>

            {{--? center-container --}}
            <div class="bg-light rounded-b-3xl shadow-md h-[25rem] basis-2/6
            transition-shadow ease-in delay-150 hover:delay-150  hover:scale-105 hover:shadow-2xl  hover:shadow-dark">
                <div class="text-center mt-8 mb-1">
                    <span class="text-light text-base font-bold bg-primary px-4 py-2 rounded-3xl shadow-md
                    border-4 border-white">
                        Standard By Pax
                    </span>
                    <h2 class="text-primary text-[30px] drop-shadow-lg font-black base-font mt-4">
                        ₱ 250.00<span class="text-dark text-md self-center base-font">/per head</span>
                    </h2>
                </div>

                <hr class="mx-7 border-[1px]  border-dark">

                <div class="mx-10">
                    <ul class="mt-4 justify-center list-inside">
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">3 Main Dish <br>Vegetable/Pasta/Noodles</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">1 Dessert</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">One Round Soft Drinks</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-dark font-bold text-md">One Round Rice</span>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <button class="bg-primary text-light uppercase font-bold text-md px-10 py-2 mt-5
                    transition ease-in-out hover:scale-110 shadow-lg">
                    Select
                    </button>
                </div>
            </div>

            {{--? right-contianer --}}
            <div class="bg-dark rounded-b-3xl h-[25rem] basis-2/6
            transition-shadow ease-in delay-100 hover:delay-100 hover:shadow-2xl hover:scale-105 hover:shadow-primary-dark ">
                <div class="text-center mt-8 mb-1">
                    <span class="text-light text-base font-bold bg-primary px-4 py-2 rounded-3xl shadow-md">
                        Premium By Pax
                    </span>
                    <h2 class="text-primary text-[30px] drop-shadow-lg font-black base-font mt-4">
                        ₱ 280.00<span class="text-light text-md self-center base-font">/per head</span>
                    </h2>
                </div>

                <hr class="mx-7 border-[1px]  border-light">

                <div class="mx-10">
                    <ul class="mt-4 justify-center list-inside">
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-light font-bold text-md">4 Main Dish <br>Vegetable/Pasta/Noodles</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-light font-bold text-md">1 Dessert</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-light font-bold text-md">One Round Soft Drinks</span>
                        </li>
                        <li class="flex flex-row gap-2 my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span class="text-light font-bold text-md">One Round Rice</span>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <button class="bg-primary text-light uppercase font-bold text-md px-10 py-2 mt-5
                    transition ease-in-out hover:scale-110 shadow-lg">
                    Select
                    </button>
                </div>
            </div>>
        </div>
      </div>


    {{--? Contact Us --}}
    <div class="bg-dark/5 pt-3 shadow-inner z-0">
      <div class="flex flex-col mt-14 h-[90rem] mx-14 ">
        <div class="flex flex-row gap-10 h-[44rem]">
            <div class="flex flex-col bg-light basis-2/4 rounded-lg shadow-lg">
                <div class="my-14 mx-10">
                    <form action="" class="flex flex-col">
                        @csrf

                        <div class="flex flec-row mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[25px] mr-3">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ff731d" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                            </svg>
                            <h3 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg">
                                Your Full Name
                            </h3>
                        </div>

                        <input id="first_name" type="first_name" placeholder="First name" class="w-full form-control text-dark text-base px-5 py-5 border-none rounded-md shadow-md
                        ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                        @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">


                        <input id="last_name" type="last_name" placeholder="Last name" class="w-full form-control mt-3 text-dark text-base px-5 py-5 border-none rounded-md shadow-md
                        ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                        @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                        <div class="flex flec-row my-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[25px] mr-3">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ff731d" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                            </svg>
                            <h3 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg">
                                Your E-Message
                            </h3>
                        </div>

                        <input id="email" type="email" placeholder="Email address" class="w-full form-control text-dark text-base px-5 py-5 border-none rounded-md shadow-md
                        ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        <input id="subject" type="subject" placeholder="Subject" class="w-full form-control my-3 text-dark text-base px-5 py-5 border-none rounded-md shadow-md
                        ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6
                        @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">

                        <div class="col-span-full">
                            <label for="about" class="block text-base font-semibold leading-6 text-primary">Message:</label>
                            <textarea id="message" name="message" placeholder="Right your Concern ..." rows="3" class="block w-full rounded-md border-0 p-5
                            shadow-md ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>
                        </div>

                        <button id="submit-button" type="submit" class="mx-20 text-light mt-5 font-bold uppercase text-sm py-3 px-8 bg-primary
                            transition ease-in-out hover:bg-primary-dark shadow-lg">
                            {{ __('Submit') }}
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex flex-col basis-2/4">
                <h3 class="cusive-font text-dark drop-shadow-lg text-[40px]">
                    Contact Us
                </h3>
                <h2 class="my-2 text-primary font-bold text-[40px]">
                    Get in Touch With Us
                </h2>
                <p class="text-dark leading-5 text-base text-justify">
                    Enjoy exceptional cuisine tailored to your every occasion. Whether it's a wedding,
                    christening, birthday, anniversary, or any special event. Let us create unforgettable moments
                    with delicious flavors and flawless service, leaving a lasting impression on you and your guests.
                </p>

                <div class="flex flex-row mt-8 gap-7">
                    <div class="flex flex-col">
                        <div class="flex flex-row gap-5">
                                <div class="bg-light py-3 px-4 shadow-lg rounded">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/iikoxwld.json" trigger="hover"
                                        colors="primary:#FF731D" style="width:60px;height:60px">
                                    </lord-icon>
                                </div>
                            <div class="flex flex-col mt-2">
                                <h2 class="font-bold text-dark text-lg drop-shadow-lg">
                                    Location
                                </h2>
                                <span class="font-medium text-base text-dark leading-4 drop-shadow-lg">
                                    Romano St. Poblacion, <br>
                                    Hindang, Leyte
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-row gap-5 my-5">
                            <div class="bg-light py-3 px-4 shadow-lg rounded">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xtzvywzp.json" trigger="hover"
                                        colors="primary:#FF731D" style="width:60px;height:60px">
                                    </lord-icon>
                                </div>
                            <div class="flex flex-col mt-5">
                                <h2 class="font-bold text-dark text-lg drop-shadow-lg">
                                    Email
                                </h2>
                                <span class="font-medium text-base text-dark leading-4 drop-shadow-lg">
                                    sonararosario@gmail.com
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-row gap-5">
                            <div class="bg-light py-3 px-4 shadow-lg rounded">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/srsgifqc.json" trigger="hover"
                                    colors="primary:#FF731D" style="width:60px;height:60px">
                                </lord-icon>
                            </div>
                            <div class="flex flex-col mt-5">
                                <h2 class="font-bold text-dark text-lg drop-shadow-lg">
                                    Phone
                                </h2>
                                <span class="font-medium text-base text-dark leading-4 drop-shadow-lg">
                                    0907 753 0219
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="uppercase text-xxl text-dark mb-3 font-bold">
                            Social Media
                        </h1>
                        <div class="flex flex-col">
                            <div class="flex flex-row gap-3">
                                <a href="" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="sm-mobile:w-[25px] tablet:w-[40px] laptop:w-[50px]"
                                        viewBox="0,0,256,256" class="transition ease-in-out delay-100 hover:scale-125">
                                            <g fill="#ff731d" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(5.12,5.12)">
                                                <path
                                                    d="M25,3c-12.15,0 -22,9.85 -22,22c0,11.03 8.125,20.137 18.712,21.728v-15.897h-5.443v-5.783h5.443v-3.848c0,-6.371 3.104,-9.168 8.399,-9.168c2.536,0 3.877,0.188 4.512,0.274v5.048h-3.612c-2.248,0 -3.033,2.131 -3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944c10.738,-1.457 19.022,-10.638 19.022,-21.775c0,-12.15 -9.85,-22 -22,-22z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                                <h2 class="font-bold text-primary text-lg self-center before:border-primary before:border-l-4 before:mr-3  ">
                                    Facebook.com
                                </h2>
                            </div>

                            <div class="flex flex-row gap-3">
                                <a href="" class="my-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="sm-mobile:w-[25px] tablet:w-[40px] laptop:w-[50px]"
                                        viewBox="0,0,256,256" class="transition ease-in-out delay-100 hover:scale-125">
                                            <g fill="#ff731d" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(5.12,5.12)">
                                                <path
                                                    d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                                <h2 class="font-bold text-primary text-lg self-center before:border-primary before:border-l-4 before:mr-3  ">
                                    Instagram.com
                                </h2>
                            </div>

                            <div class="flex flex-row gap-3">
                                <a href="" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="sm-mobile:w-[25px] tablet:w-[40px] laptop:w-[50px]"
                                    viewBox="0,0,256,256" class="transition ease-in-out delay-100 hover:scale-125 z-10">
                                            <g fill="#ff731d" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(10.66667,10.66667)">
                                                <path
                                                    d="M2.36719,3l7.0957,10.14063l-6.72266,7.85938h2.64063l5.26367,-6.16992l4.31641,6.16992h6.91016l-7.42187,-10.625l6.29102,-7.375h-2.59961l-4.86914,5.6875l-3.97266,-5.6875zM6.20703,5h2.04883l9.77734,14h-2.03125z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                                <h2 class="font-bold text-primary text-lg self-center before:border-primary before:border-l-4 before:mr-3  ">
                                    Twitter.com
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 self-center border-[5px] rounded border-primary shadow-xl">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.9740754588386!2d124.72542520000003!3d10.429803100000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33077194abad0a75%3A0xc2341f5d56e75cd0!2sTitan&#39;s%20catering%20%26%20services!5e0!3m2!1sen!2sus!4v1710676324669!5m2!1sen!2sus"
            width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>



    @include('layouts.inc.footer')
  </div>

@include('layouts.pages_._home.scripts.tab-menu-script')
@include('layouts.pages_._home.scripts.read-more-package-script')


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

