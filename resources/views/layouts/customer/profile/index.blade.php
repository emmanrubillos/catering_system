@extends('layouts.inc.header')
@section('content')

    <div class="section w-full h-160"> 
        
        <div id="profile-bg" class="h-[25rem] rounded-b-[15rem] shadow-lg">
            <div class="flex flex-col relative text-center top-40 mx-14">
                <h2 class="cusive-font text-[60px] text-dark drop-shadow-lg">
                  My Profile
                </h2>
            </div>
        </div>
        {{-- Right container --}}
        <div class="flex flex-row mx-20 mt-8 gap-5">
            <div class="Profile-Details flex flex-col h-[40rem] basis-1/4 bg-white px-5 py-3 shadow-xl rounded-xl mb-3">
            
              <img src="/assets/img/background-images/profile.png" alt="Profile Image" class="w-full h-auto rounded-full">

              <h1 class="font-bold text-dark text-xl text-center mt-3">
                Joan C. Urgel
              </h1>
    
              <hr class="text-dark my-2">

              
            <div>
              <div class="text-center">
                <button class="bg-primary uppercase text-light font-bold rounded shadow-xl py-2.5 px-10 mt-5
            transition ease-in-out hover:scale-110 hover:scale-110">
              My Reservation
            </button>
            </div>


            <div class="text-center">
                <button class="bg-primary uppercase text-light font-bold rounded shadow-xl py-2.5 px-10 mt-5
            transition ease-in-out hover:scale-110 hover:scale-110">
              Account Setting
            </button>
            </div>


            <div class="text-center">
                <button class="bg-primary uppercase text-light font-bold rounded shadow-xl py-2.5 px-10 mt-5
            transition ease-in-out hover:scale-110 hover:scale-110">
              Logout
            </button>
            </div>
       
        
            </div>
            </div>
    
            <div class="flex flex-col basis-3/4 gap-5">
              {{--? Left Container --}}
            <div class="basis-3/3 bg-light bg-opacity-90 shadow-lg rounded-lg">
              <div class="flex flex-row p-5">

                <div class="basis-1/4 mr-5 flex flex-col">
                  <h1 class="font-bold text-dark text-xl text-center mt-3">
                   Food Order
                  </h1>
                </div>

                <div class="basis-3/3 mr-3">
                  <h6 class="text-dark  font-bold text-base uppercase">
                    
                  </h6>
                  <ul class="list-disc list-inside text-light  font-semibold text-sm">
                   

                  </ul>
                </div>

                <div class="basis-3/3 mr-3">

                  
                  
                </div>


                <div class="basis-1/16">
                  
                </div>

              </div>
            </div>
          </div>
        </div>

        @include('layouts.inc.footer')
    </div>

@endsection
 