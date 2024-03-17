@extends('layouts.inc.header')
@section('content')

    <div class="section w-full h-160">

        <div class="menu-bg h-[35rem] rounded-b-[15rem] shadow-lg">
            <div class="flex flex-col relative text-center top-40 mx-14">
                <h2 class="cusive-font text-[60px] text-dark drop-shadow-lg">
                    Our Menu
                </h2>
                <h1 class="font-bold text-primary leading-10 text-[40px] my-5 drop-shadow-lg">
                   Check Out Our Menu
                </h1>
                <p class="text-md leading-6 text-dark font-semibold p-4 drop-shadow-lg">
                    Enjoy exceptional cuisine tailored to your every occasion. Whether it's a wedding,
                    christening, birthday, anniversary, or any special event. Let us create unforgettable moments
                    with delicious flavors and flawless service, leaving a lasting impression on you and your guests.
                </p>
            </div>
        </div>

        {{--? Tab-Section for Menu --}}
        <div class="mx-auto grid place-items-center relative top-[-7rem]">
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

        
        @include('layouts.inc.footer')
    </div>

    @include('layouts.pages_._home.scripts.tab-menu-script')
@endsection
