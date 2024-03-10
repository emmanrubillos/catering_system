@extends('layouts.master')
@section('content')
  <section class="w-full h-160">
    
    {{--? Home Top Container  --}}
    <div class="home h-full">
        <div class="relative text-center top-40">
          <h3 class="-top-3 inset-0 absolute font-semibold text-xxl text-light">
            WELCOME TO
          </h3>
          <h1 class=" inset-0 absolute font-['Hello_Christmas'] text-[120px] text-dark">
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
            <a href="{{ route('home') }}" >
              <button class=" uppercase  bg-primary text-light font-bold rounded-lg px-4 tablet:px-10 py-4 text-md 
              tablet:text-sm laptop:text-base transition delay-100 ease-in-out hover:scale-110">Make A Reservation</button>
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

            <h1 class="mt-3 mb-3 font-['Hello_Christmas'] text-dark text text-[40px]">
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
    <div class="relative -top-28 bg-light h-[750px] shadow-inner py-10 px-16">
      {{--? Top Services --}}
      <div class="flex flex-row justify-between">
        {{--? Top-left Services --}}
        <div class="flex flex-col basis-2/4">
          <h2 class="font-['Hello_Christmas'] text-[38px] text-dark">
            Our Services
          </h2>
          <h1 class="font-bold text-primary leading-10 text-[40px]">
            Premium Catering Services <br> For Your Taste Only
          </h1>
        </div>
        
        {{--? Top-right Services --}}
        <div class="flex flex-col basis-2/4">
          <p class="text-md leading-6 text-justify text-dark font-semibold">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
            dolore unde consequuntur autem quidem est consequatur? Enim 
            praesentium minus voluptas doloribus, reprehenderit provident!
          </p>
          <a href="" class="mt-3">
            <button class="bg-primary text-light uppercase font-bold px-8 py-2 shadow-xl
            transition ease-in-out hover:scale-110">
              Other Event We Handle
            </button>
          </a>
        </div>
      </div>
      
      {{--? Middle Services --}}
      <div class="flex flex-row w-full justify-between my-20">

        <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative">
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

        <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative mx-10">
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

        <div class="basis-2/6 bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative">
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

      {{--? Bottom Services --}}
      <div class="flex flex-row justify-between">
        <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-32 mr-10">
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
        
        <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-32">
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
    </div>

    {{--? Our Menu Container  --}}
    <div class="relative -top-28">
      <div class="bg-cover rounded-b-full h-[500px]" 
           style="background-image: url('assets/img/background-images/home-menu-bg.png')">
        
        <div class="text-center flex flex-col py-5 mx-52">
            <h1 class="font-['Hello_Christmas'] text-[38px] text-dark">
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
        <h1 class="font-['Hello_Christmas'] text-[38px] text-dark">
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
    <div class="relative -top-72 mt-10 bg-light h-[60rem] shadow-xl">
      
      <div class="text-center flex flex-col py-5 mx-52">
        <h1 class="font-['Hello_Christmas'] text-[38px] text-dark">
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
        <div class="Package-Details flex flex-col basis-1/4 bg-white px-5 py-3 shadow-xl rounded-xl">
          <h1 class="font-bold text-dark text-xxl">
            Package Details
          </h1>
          <p class="text-dark text-sm text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Omnis quis dolores vero reprehenderit quae culpa. 
          </p>

          <hr class="text-dark my-2">

          <ul class="font-bold">

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
          <div class="basis-1/3 bg-primary bg-opacity-30 shadow-lg rounded-lg">

          </div>

          <div class="basis-1/3 bg-primary bg-opacity-60 shadow-lg rounded-lg">

          </div>

          <div class="basis-1/3 bg-primary bg-opacity-90 shadow-lg rounded-lg">

          </div>

        </div>
      </div>
    </div>


  </section>

@include('layouts.pages_._home.scripts.tab-menu-script')
@endsection