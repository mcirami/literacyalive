@extends('layouts.app')

@section('content')
<section class="location w-full pb-20 pt-20">
    <div class="container mx-auto px-5">
        <h2 class="dotted mb-10 inline-block relative">Location</h2>
        <div class="text_wrap w-full md:max-w-300">
            <p class="">
                Eliot Unitarian Chapel<br>
                100 South Taylor Ave.<br>
                Kirkwood, MO 63122
            </p>
            <p>
                Classroom: Room 001 ( downstairs)
            </p>
            <p class="mt-4">The campers will need to enter through the back of the building behind the chapel. There is a parking lot accessed from East Madison Avenue that is a one way driveway exiting onto Argonne Drive.</p>
        </div>
    </div>
</section>
<section class="cost w-full pt-20 pb-40 text-center">
    <div class="container mx-auto px-5">
        <h2 class="dotted mb-10 inline-block relative">Cost</h2>
        <div class="text_wrap w-full mx-auto md:max-w-300">
            <p class="my-5 md:px-20">$200 per camper for the week.<br>

What’s included? Take homes: books, prizes, crafts, learning and fun!
</p>
        </div>
    </div>
</section>
<section class="register w-full pb-40 text-center relative">
    <div class="slanted_div alt yellow z-1"></div>
    <div class="container mx-auto px-5 relative z-2">
        <h2 class="dotted mb-10 inline-block relative">Register</h2>
        <div class="text_wrap w-full mx-auto md:max-w-300">
            <p class="my-5 md:px-20">Space is limited! We are trying to keep a small ratio of staff to campers. When we reach 24 enrolled campers we will turn off registration. If there is a lot more interest, we will look into offering another week of camp during the first week of August.</p>
        </div>
        <a href="{{ Route('register.show') }}" class="uppercase mx-auto sm:max-w-50 flex justify-between items-center button yellow text-lg">
            <span>Register Now</span>
            <span class="arrow_wrap max-w-4">
                <img src="{{ asset('images/button-arrow.png') }}" alt="">
            </span>
        </a>
    </div>
</section>

@endsection
