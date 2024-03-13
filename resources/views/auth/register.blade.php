@extends('layouts.app')

@section('content')
    <div class="register flex justify-center items-center h-screen">
        <div class="flex flex-row justify-center h-[31rem] shadow-xl rounded-2xl shadow-dark/30">
            {{-- left Container --}}
            <div class="left-img w-[280px] p-8 flex justify-center items-center rounded-l-2xl">
                <div class="">
                    <h1 class="text-center cusive-font text-dark text-[50px] leading-4">
                        Titan's Catering 
                        <br>
                        <span class="base-font uppercase font-bold text-sm">
                            Service & Foods
                        </span>
                    </h1>
                </div>
            </div>

            {{-- Right Container --}}
            <div class="p-8 bg-light text-center rounded-r-2xl">
                <form method="POST" action="{{ route('register') }}">

                    @csrf    

                    <h1 class="cusive-font text-[45px] text-dark text-center">
                        Register
                    </h1>
                    <div class="flex flex-col mt-4">

                        <div id="full-name" class="">
                            <div class="flex flex-col">
                                <div class="flex flec-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[25px] mr-3">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ff731d" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                    </svg>
                                    <h3 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg">
                                        Your Full Name
                                    </h3>
                                </div>
    
                                <input id="first_name" type="first_name" placeholder="First name" class="w-[250px] mt-2 form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>    
    
                                <div class="ml-10">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <input id="middle_name" type="middle_name" placeholder="Middle name" class="w-[250px] my-2 form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name" autofocus>
    
                                <div class="ml-10">
                                    @error('middle_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <input id="last_name" type="last_name" placeholder="Last name" class="w-[250px] form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                
                                <div class="ml-10">
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
    
                            </div>
                        </div>
        
                       <div id="contact-number" class="">
                            <div class="flex flex-col mt-3">
                                <div class="flex flec-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[25px] mr-3">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ff731d" d="M181.3 32.4c17.4 2.9 29.2 19.4 26.3 36.8L197.8 128h95.1l11.5-69.3c2.9-17.4 19.4-29.2 36.8-26.3s29.2 19.4 26.3 36.8L357.8 128H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H347.1L325.8 320H384c17.7 0 32 14.3 32 32s-14.3 32-32 32H315.1l-11.5 69.3c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8l9.8-58.7H155.1l-11.5 69.3c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8L90.2 384H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h68.9l21.3-128H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h68.9l11.5-69.3c2.9-17.4 19.4-29.2 36.8-26.3zM187.1 192L165.8 320h95.1l21.3-128H187.1z"/>
                                    </svg>
                                    <h3 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg">
                                        Your Contact Number
                                    </h3>
                                </div>
                                <input id="contact_number" type="tel" placeholder="Contact number" class="w-[250px] my-2 form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>

                                <div class="ml-10">
                                    @error('contact_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       </div>

                       <div id="address" class="hidden">
                            <div class="flex flex-col">
                                <div class="flex flec-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[25px] mr-3">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ff731d" d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/>
                                    </svg>
                                    <h3 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg">
                                        Your Address
                                    </h3>
                                </div>

                                <input id="address" type="address" placeholder="Street" class="w-[250px] mt-2 form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>    

                                <div class="ml-10">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <input id="address" type="address" placeholder="Barangay" class="w-[250px] my-2 form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                <div class="ml-10">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>

                                <input id="address" type="address" placeholder="City/Municipal" class="w-[250px] form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                
                                <div class="ml-10">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div> --}}

                            </div>
                       </div>

                       <div id="new-account" class="hidden">
                            <div class="flex flex-col">
                                <div class="flex flec-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-[26px] mr-3">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ff731d" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                    </svg>
                                    <h3 class="font-bold uppercase text-xsm text-light bg-primary py-1 px-3 mt-1 rounded-lg">
                                        Your User Account
                                    </h3>
                                </div>

                                <input id="email" type="email" placeholder="Enter your Email" class="w-[250px] mt-2 form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>    

                                <div class="flex flex-row">
                                    <input id="password" type="password" placeholder="Create your password" class="w-[200px] my-2 form-control text-xsm p-3 py-3 border-none rounded-l-md shadow-md
                                    @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                    <div class="flex flex-row bg-primary w-[50px] rounded-r-md shadow-md my-2">
                                        {{-- Show Password --}}
                                        <button type="button" class="focus:outline-none" id="ShowPassword">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-[22px] ml-3">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#FFF7E9" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                            </svg>
                                        </button>

                                        {{-- Hide Password --}}
                                        <button type="button" class="focus:outline-none hidden" id="HidePassword">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-[25px] ml-3">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#FFF7E9" d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="flex flex-row">
                                    <input id="password-confirm" type="password" placeholder="Confirm your password" class="w-[200px] my-2 form-control text-xsm p-3 py-3 border-none rounded-l-md shadow-md
                                    @error('password') is-invalid @enderror" name="password_confirmation" value="{{ old('password') }}" required autocomplete="new-password" autofocus>

                                    <div class="flex flex-row bg-primary w-[50px] rounded-r-md shadow-md my-2">
                                        {{-- Show Password --}}
                                        <button type="button" class="focus:outline-none" id="ShowPasswordConfirm">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-[22px] ml-3">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#FFF7E9" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                            </svg>
                                        </button>

                                        {{-- Hide Password --}}
                                        <button type="button" class="focus:outline-none hidden" id="HidePasswordConfirm">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-[25px] ml-3">
                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#FFF7E9" d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                                <div class="ml-10">
                                    @error('password-confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="flex flex-col mt-3">
                            
                            <button id="first-button" class="text-light font-bold uppercase text-sm py-3 px-8 bg-primary
                                transition ease-in-out hover:bg-primary-dark shadow-lg">
                                Continue
                            </button>

                            <div id="first-button-container" class="hidden">
                                <div class="flex flex-row gap-3">
                                    <button id="first-back-button" class="text-light font-bold uppercase text-sm py-3 px-8 bg-dark
                                    transition ease-in-out hover:bg-darker shadow-lg">
                                        Back
                                    </button>
                                    <button id="second-button" class="text-light font-bold uppercase text-sm py-3 px-8 bg-primary
                                    transition ease-in-out hover:bg-primary-dark shadow-lg">
                                        Continue
                                    </button>
                                </div>
                            </div>

                            <div id="second-button-container" class="hidden">
                                <div class="flex flex-row gap-3">
                                    <button id="second-back-button" class="text-light font-bold uppercase text-sm py-3 px-8 bg-dark
                                    transition ease-in-out hover:bg-darker shadow-lg">
                                        Back
                                    </button>
                                    <button id="submit-button" type="submit" class="hidden text-light font-bold uppercase text-sm py-3 px-8 bg-primary
                                    transition ease-in-out hover:bg-primary-dark shadow-lg">
                                         {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            <span class="font-semibold mt-1 text-xsm text-center text-dark">
                                Already have an acount?
                                <a href="{{ route('login') }}" class="text-primary hover:text-dark">
                                    Login Now
                                </a>
                            </span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@include('auth.script.toggle_password')
@include('auth.script.continue_button')
@endsection
