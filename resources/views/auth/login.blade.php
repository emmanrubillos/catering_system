@extends('layouts.app')

@section('content')
    <div class="login flex justify-center items-center h-screen bg-gray-100">
        <div class="flex flex-row justify-center h-[28rem] shadow-xl rounded-2xl shadow-dark/30">
            {{-- Left-Container --}}
            <div class="p-8 bg-light text-center rounded-l-2xl">
                <form method="POST" action="{{ route('login') }}">
                    @csrf    
                    <h1 class="cusive-font text-[45px] text-dark text-center">
                        Login
                    </h1>
                    <div class="flex flex-col mt-8">
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[25px] mr-3">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ff731d" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                            </svg>
                            <div class="flex flex-col">
                                <input id="email" type="email" placeholder="Enter your email" class="w-[300px] form-control text-xsm p-3 py-3 border-none rounded-md shadow-md
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="ml-10">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-[9px] text-center rounded-md text-light bg-red px-11 py-1 m-0">
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-col mt-6">
                       <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[25px] mr-3">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ff731d" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/>
                            </svg>
                            <div class="flex flex-col">
                                <div>
                                    <input id="password" type="password" placeholder="Enter your password" class="w-[250px] form-control text-xsm px-3 py-3 border-lg rounded-l-md shadow-md
                                    @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="flex flex-row bg-primary w-[50px] rounded-r-md shadow-md">
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
                        <div class="ml-10">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-[9px] text-center rounded-lg text-light bg-red px-2 py-1 m-0">
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="flex flex-row justify-between">
                        <div class="form-check flex flex-row">
                            <div class="mt-1 mr-1">
                                <input class="form-check-input text-xsm" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <div class="mt-[0.5px]">
                                <label class="form-check-label text-primary text-xsm text-center font-semibold hover:text-dark" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="text-primary text-xsm text-center font-semibold hover:text-dark" href="{{ route('password.request') }}">
                                    {{ __('forgot password?') }}
                                </a>
                            @endif 
                        </div>
                    </div>

                    
                    <div class="flex flex-col mt-8">
                        <button type="submit" class="text-light font-bold uppercase text-sm py-3 px-8 bg-primary
                        transition ease-in-out hover:bg-primary-dark shadow-lg">
                            {{ __('Login') }}
                        </button>
                        <span class="font-semibold mt-1 text-xsm text-center text-dark">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="text-primary hover:text-dark">
                                Signup Now
                            </a>
                        </span>
                    </div>
                     
                </form>
            </div>

            {{-- Right-Container --}}
            <div class="right-img w-[280px] p-8 flex justify-center items-center rounded-r-2xl">
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
        </div>
    </div>

    @include('auth.script.toggle_password')
@endsection
