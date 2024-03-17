@extends('layouts.inc.header')
@section('content')

    <div class="section w-full h-160"> 
        
        <div class="contact-bg h-[35rem] rounded-b-[15rem] shadow-lg">
            <div class="flex flex-col relative text-center top-40 mx-14">
                <h2 class="cusive-font text-[60px] text-dark drop-shadow-lg">
                    Contact Us
                </h2>
                <h1 class="font-bold text-primary leading-10 text-[40px] my-5 drop-shadow-lg">
                    Do you Have Quetions?
                </h1>
                <p class="text-md leading-6 text-dark font-semibold p-4 drop-shadow-lg">
                    Enjoy exceptional cuisine tailored to your every occasion. Whether it's a wedding,
                    christening, birthday, anniversary, or any special event. Let us create unforgettable moments
                    with delicious flavors and flawless service, leaving a lasting impression on you and your guests.
                </p>
            </div>
        </div>

        <div class="flex flex-col my-14 h-[80rem] mx-14">
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

            <div>

            </div>
        </div>

        @include('layouts.inc.footer')
    </div>

@endsection
