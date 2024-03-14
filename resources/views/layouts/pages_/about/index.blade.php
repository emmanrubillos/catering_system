@extends('layouts.master')

@section('content')
<section class="w-full h-160">
    
    {{-- About Top Container --}}
    <div class="about h-full">
        <img class="absolute bottom-0 z-0" src="{{ URL::to('assets/img/wave-home.svg') }}" alt="wave-home-bottom">
    </div>

     {{-- Left Container --}}
     <div class="relative -top-56 flex justify-between">
         <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-32 mr-10 mx-2 rounded-3xl">
             <h1 class="mt-3 mb-3 text-center text-primary uppercase font-bold text-xl">
            20 Years of Experience
              </h1>
          <p class="text-base text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
            dolore unde consequuntur autem quidem est consequatur? <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
            dolore unde consequuntur autem quidem est consequatur? <br>
          </p>
        </div>


         {{-- Right Container --}}
             <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl relative ml-10 mr-32 mx-2 rounded-3xl">
                    <h1 class="mt-3 mb-3 cusive-font text-dark text text-[40px]">About Us</h1>
                    <h2 class="text-primary leading-8 font-bold text-3xl mb-3">Welcome To The <br> Best Catering Company</h2>

                    <p class="text-base text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur?
                    </p>
                     <h4 class="my-3 font-bold text-primary text-xl">10 Years Experience In This Business</h4>
                        <p class="text-base text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                            dolore unde consequuntur autem quidem est consequatur?
                        </p> <br>
                    <ul>
                        <li class="flex flex-row">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span>100% Guarantee For Our Product Quality</span>
                        </li>
                        <li class="flex flex-row my-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span>100% Guarantee For Our Product Quality</span>
                        </li>
                        <li class="flex flex-row">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span>100% Guarantee For Our Product Quality</span>
                        </li>
                    </ul>

                    <ul class="my-8">
                        <li class="flex flex-col text-center">
                            <h1 class="font-bold text-dark text-lg">NAME OF THE CATERER</h1>
                            <h2 class="uppercase font-semibold text-dark">The Caterer</h2>
                        </li>
                    </ul>
                </div>
</section>
@endsection