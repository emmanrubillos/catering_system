@extends('layouts.inc.header')

@section('content')

<div class="section w-full h-160 bg-light">


    <div class="relative text-center bg-light top-40">

        <div class="h-[80rem]">
            <div class="flex flex-row justify-center mx-12">
                <div class="flex flex-col">
                    
                    <h1 class="font-bold text-primary leading-10 text-[40px] my-5">
                        This is Profile Page
                    </h1>
                </div>
            </div>              
        </div>

    </div>

    @include('layouts.inc.footer')

</div>

@endsection