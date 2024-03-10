@extends('layouts.master')
@section('content')

<section class="w-full h-160">
    

    {{--? Home Top Container  --}}
    <div class="home h-full relative">
        <div class="relative absolute top-0 right-0
        ">
            {{--? About Top --}}
            <div class="flex flex-row bg-light w-3/5 mx-auto rounded-3xl shadow-xl">
    
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
        </div>
        

        <img class="absolute bottom-0 z-0"
        src="{{ URL::to('assets/img/wave-home.svg') }}" alt="wave-home-bottom">

    </div>
    
</section>
@endsection
