@extends('layouts.app')

@section('content')
<section class="location register w-full">
    <div class="page_hero text-center">
        <div class="container mx-auto px-5">
            <h2 class="inline-block relative mb-5">CHOOSE YOUR DATE</h2>
            <div class="w-1/3 mx-auto select_wrap relative">
                <select name="date" id="date" class="bg-white block p-2.5 w-full">
                    <option value="0">December 22, 2025</option>
                    <option value="1">March 16, 2026</option>
                    <option value="2">March 17, 2026</option>
                </select>
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="about_us details">
        <div class="container mx-auto px-5">
            <div class="text_wrap text_center w-full">
                <div class="text-center">
                    <p class="mt-5 sub_heading mx-auto">
                        Eliot Unitarian Chapel<br>
                        100 South Taylor Ave.<br>
                        Kirkwood, MO 63122
                    </p>
                    <p class="sub_heading mx-auto">
                        Classroom: Room 001 ( downstairs)
                    </p>
                </div>
                <p class="mt-4 text-center max-w-200 mx-auto">The campers will need to enter through the back of the building behind the chapel. There is a parking lot accessed from East Madison Avenue that is a one way driveway exiting onto Argonne Drive.</p>
            </div>
        </div>
    </div>
</section>
<section class="cost themes w-full pt-20 pb-40 text-center">
    <div class="container mx-auto px-5">

        <h2 class="inline-block relative">Cost</h2>
        <div class="text_wrap w-full mx-auto md:max-w-300">
            <p class="my-5 md:px-20">$200 per camper for the week.<br>
            What’s included? Take homes: books, prizes, crafts, learning and fun!
            </p>
        </div>

    </div>
</section>
<section class="home_register w-full pt-20 pb-40 text-center relative">
    <div class="container mx-auto px-5 relative z-2">
        <div class="container mx-auto px-5">
            <h2 class="inline-block relative">Register</h2>
            <div class="sub_heading_box">
                <p class="">Register today to attend our Literacy Alive summer Camp on <span class="camp_date font-bold">December 22, 2025</span>.</p>
            </div>
            <p class="mt-6 mb-4 small_container">
                Space is limited! We are trying to keep a small ratio of staff to campers. When we reach 24 enrolled campers we will turn off registration. If there is a lot more interest, we will look into offering another week of camp during the first week of August.
            </p>
            <a href="/camp-registration"
               class="data-register-link mt-5 flex justify-center items-center button green gap-3 text-lg uppercase max-w-60 mx-auto">
                Register Now
                <span class="arrow_wrap max-w-4 md:max-w-5">
                <img src="{{ asset('images/button-arrow.png') }}" alt="">
            </span>
            </a>
        </div>
    </div>
</section>

@endsection
