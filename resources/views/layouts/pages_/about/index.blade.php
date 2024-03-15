@extends('layouts.inc.header')

@section('content')
<div class="section w-full h-160">
    

    {{-- About Top Container --}}
    <div class="about h-[50rem]">
        <img class="absolute bottom-0 z-0" 
        src="{{ URL::to('assets/img/wave-home.svg') }}" alt="wave-home-bottom">
    </div>


    <div class="relative -top-[38rem] h-[35rem]">
        <div class="flex flex-row ml-36 mr-32 gap-12 z-20">
        
            {{-- Left Container --}}
            <div class=" flex flex-col basis-2/5">
                <div class=" w-full h-[25rem]">
                    {{-- empty --}}
                </div>
    
                <div class="bg-white flex flex-col pt-3 py-8 px-8 shadow-xl rounded-3xl w-full">
                    <h1 class="mt-3 mb-3 text-center text-primary uppercase font-bold text-xl">
                        20 Years of Experience
                    </h1>
                    <p class="text-base text-center text-dark font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur? <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur? <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
    
    
            {{-- Right Container --}}
            <div class="flex flex-col basis-3/5">
                <div class="bg-white flex flex-col ml-20 mr-[6rem] pt-3 py-8 px-10 shadow-xl relative rounded-3xl h-[43rem]">
                    <h1 class="mt-3 mb-3 cusive-font text-dark text text-[40px]">About Us</h1>
                    <h2 class="text-primary leading-8 font-bold text-3xl mb-3">Welcome To The <br> Best Catering Company</h2>
        
                    <p class="text-base text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                        dolore unde consequuntur autem quidem est consequatur?
                    </p>
                        <h4 class="my-3 font-bold text-primary text-lg">10 Years Experience In This Business</h4>
                        <p class="text-base text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Omnis quis dolores vero reprehenderit quae culpa. Pariatur 
                            dolore unde consequuntur autem quidem est consequatur?
                        </p>
                    <ul class="mt-3 justify-center">
                        <li class="flex flex-row gap-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span>100% Guarantee For Our Product Quality</span>
                        </li>
                        <li class="flex flex-row my-2 gap-2">
                            <lord-icon src="https://cdn.lordicon.com/lomfljuq.json" trigger="hover" colors="primary:#ff731d" style="width:25px;height:25px"></lord-icon>
                            <span>100% Guarantee For Our Product Quality</span>
                        </li>
                        <li class="flex flex-row gap-2">
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
    
                <div class="mt-10">
                    <h1 class="text-[40px] font-bold text-dark mb-5">
                        Premium Catering Services <br> For Your Taste Only
                    </h1>
                    <p class="text-dark text-base text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Cumque nihil id, velit ducimus excepturi non voluptatum voluptas 
                        ea accusamus unde at soluta! Amet provident eveniet temporibus 
                        at, veritatis accusantium qui!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Cumque nihil id, velit ducimus excepturi non voluptatum voluptas 
                        ea accusamus unde at soluta! Amet provident eveniet temporibus 
                        at, veritatis accusantium qui!
                    </p>
                </div>
            </div>
        </div>
    </div>



    @include('layouts.inc.footer')
</div>
@endsection