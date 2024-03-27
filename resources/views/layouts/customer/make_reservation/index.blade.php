@extends('layouts.inc.header')
@section('content')

    <div class="section w-full h-160">

        <div class="menu-bg h-[30rem] rounded-b-[15rem] shadow-lg">

            <div class="flex flex-col relative text-center top-[12rem] mx-14">
                <h2 class="cusive-font text-[95px] text-dark drop-shadow-lg">
                    Making your Reservation
                </h2>
            </div>
        
        </div>

        <form action="">
            @csrf 

            {{-- step-1 --}}
            @include('layouts.customer.make_reservation.partials.calendar') 

            {{-- step-2 --}}
            @include('layouts.customer.make_reservation.partials.event')

            {{-- step-3.5 for Package--}}
            @include('layouts.customer.make_reservation.partials.service.packageOrPax')

            {{-- step-3.5 for Pax --}}
            @include('layouts.customer.make_reservation.partials.service.by_pax_service')

        </form>


        @include('layouts.inc.footer')
            
    </div>


    @include('layouts.pages_._services._services-modal._wedding')
    @include('layouts.pages_._services._services-modal._birthday')
    @include('layouts.pages_._services._services-modal._christening')
    @include('layouts.pages_._services._services-modal._anniversary')
    @include('layouts.pages_._services._services-modal._feast')
    @include('layouts.pages_._services._services-modal._conference')
    @include('layouts.pages_._services._services-modal._alumni')
    @include('layouts.pages_._services._services-modal._burial')
    @include('layouts.pages_._services._services-modal._seminar')
    @include('layouts.pages_._services.scripts.read-more-services-script')
    
    @include('layouts.customer.make_reservation.partials.service.script.reservation_step')
    
@endsection