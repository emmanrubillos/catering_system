<header class="">
    <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <nav>
        {{--! Menu for Tablet to Mobile --}}
        <div class="flex items-start tablet:hidden justify-center relative">
            {{-- Hamburger Menu --}}
            <button id="menu-toggle" class="hamburger absolute left-0 py-2 px-5 transition ease-in-out delay-100 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                    <g fill="#fff7e9" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M0,7.5v5h50v-5zM0,22.5v5h50v-5zM0,37.5v5h50v-5z"></path></g></g>
                </svg>
            </button>
            {{-- logo --}}
            <a href="{{ url('/home') }}" class="logo-md-sm w-32">
                <img class="logo-lg w-auto h-auto sm-mobile:w" src="{{ asset('assets/img/logo.png') }}" alt="titans-catering-logo">
            </a>
        </div>

        {{-- Sidebar Menu --}}
        <aside id="sidebar" class="bg-dark hidden tablet:hidden flex-col items-start justify-start
            fixed inset-y-0 left-0 w-64 shadow-md overflow-y-auto transition-all duration-300 delay-130">
            @if (Route::has('login'))
                <div class="flex justify-between items-center w-full p-4">
                        <div class="text-md font-semibold">
                            @auth   
                                <a href="{{ url('/home') }}">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon
                                        src="https://cdn.lordicon.com/hrjifpbq.json"
                                        trigger="hover"
                                        colors="primary:#fff7e9"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </a>
                            @else
                                <a href="{{ route('login') }}" >
                                    <button class="uppercase  bg-light text-dark font-semibold rounded-lg px-4 tablet:px-6 py-2 text-md tablet:text-sm laptop:text-base 
                                    transition delay-100 ease-in-out hover:scale-110">Login</button>
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <button class="uppercase text-light font-semibold rounded-lg px-4 tablet:px-6 py-2  text-md tablet:text-sm laptop:text-base 
                                        ring-2 ring-light transition delay-100 ease-in-out hover:bg-primary hover:text-light hover:scale-110">Register</button>
                                    </a>    
                                @endif
                            @endauth    
                        </div>  
            @endif
                <button id="close-sidebar" class="focus:outline-none">
                    <svg class="w-6 h-6 text-light hover:text-primary hover:scale-110 transition delay-100 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

            </div>
            <hr class="text-light mx-3">
            <div class="flex flex-col items-start justify-start w-full">
                <a href="#" class="w-full py-2 px-4 text-lg font-semibold text-light transition delay-100 ease-in-out hover:text-primary">Home</a>
                <a href="{{ route('about_us') }}" class="w-full py-2 px-4 text-lg font-semibold text-light transition delay-100 ease-in-out hover:text-primary">About Us</a>
                <a href="{{ route('services') }}" class="w-full py-2 px-4 text-lg font-semibold text-light transition delay-100 ease-in-out hover:text-primary">Services</a>
                <a href="{{ route('packages') }}" class="w-full py-2 px-4 text-lg font-semibold text-light transition delay-100 ease-in-out hover:text-primary">Package</a>
                <a href="{{ route('menu') }}" class="w-full py-2 px-4 text-lg font-semibold text-light transition delay-100 ease-in-out hover:text-primary">Menu</a>
                <a href="{{ route('contact_us') }}" class="w-full py-2 px-4 text-lg font-semibold text-light transition delay-100 ease-in-out hover:text-primary">Contact Us</a>
            </div>
        </aside>


        {{--! Navbar for Desktop to Laptop --}}
        <div class="flex items-start justify-between relative">
            <a href="" class="logo-xl-lg hidden tablet:block w-72 tablet:w-92">
                <img class="logo-lg w-full h-full" 
                src="{{ asset('assets/img/logo/titans-catering-logo.png') }}" alt="titans-catering-logo-w/-bg">
            </a>

            <div class="nav-links mt-0 tablet:mt-8 hidden tablet:flex flex-wrap gap-default">
                <a href="#" class="uppercase text-md laptop:text-base tablet:text-sm text-light font-bold transition ease-in-out delay-100 hover:text-primary">Home</a>
                <a href="{{ route('about_us') }}" class="uppercase text-md laptop:text-base tablet:text-sm text-light font-bold transition ease-in-out delay-100 hover:text-primary">About Us</a>
                <a href="{{ route('services') }}" class="uppercase text-md laptop:text-base tablet:text-sm text-light font-bold transition ease-in-out delay-100 hover:text-primary">Services</a>
                <a href="{{ route('packages') }}" class="uppercase text-md laptop:text-base tablet:text-sm text-light font-bold transition ease-in-out delay-100 hover:text-primary">Package</a>
                <a href="{{ route('menu') }}" class="uppercase text-md laptop:text-base tablet:text-sm text-light font-bold transition ease-in-out delay-100 hover:text-primary">Menu</a>
                <a href="{{ route('contact_us') }}" class="uppercase text-md laptop:text-base tablet:text-sm text-light font-bold transition ease-in-out delay-100 hover:text-primary">Contact Us</a>
            </div>
            @if (Route::has('login'))
                <div class="nav-btn gap-sm px-8 mt-4 hidden tablet:flex">
                    @auth   
                        <a href="{{ url('/home') }}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/hrjifpbq.json"
                                trigger="hover"
                                colors="primary:#fff7e9"
                                style="width:50px; height:50px;">
                            </lord-icon>
                        </a>
                    @else
                        <a href="{{ route('login') }}" >
                            <button class="uppercase  bg-light text-dark font-semibold rounded-lg px-4 tablet:px-6 py-2 text-md tablet:text-sm laptop:text-base 
                            transition delay-100 ease-in-out hover:scale-110">Login</button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button class="uppercase text-light font-semibold rounded-lg px-4 tablet:px-6 py-2  text-md tablet:text-sm laptop:text-base 
                                ring-2 ring-light transition delay-100 ease-in-out hover:bg-primary hover:text-light hover:scale-110">Register</button>
                            </a>    
                        @endif
                    @endauth    
                </div>  
            @endif
        </div>
    </nav>
</header>


@include('layouts.inc.partial-js.menu-toggle')




