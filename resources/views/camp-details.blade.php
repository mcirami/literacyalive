@extends('layouts.app')

@section('content')
<section class="location w-full py-20">
    <div class="container mx-auto px-5">
        <h2>Location</h2>
        <div class="text_wrap w-full text-left">
            <p class="">To engage campers in a variety of planned literacy activities that include hands-on learning and movement. The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
        </div>
    </div>
</section>
<section class="cost w-full pt-20 pb-40 text-center">
    <div class="container mx-auto px-5">
        <h2 class="dotted mb-10 inline-block relative">Cost</h2>
        <div class="text_wrap w-full mx-auto md:max-w-300">
            <p class="my-5 md:px-20">To engage campers in a variety of planned literacy activities that include hands-on learning and movement. The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
        </div>
    </div>
</section>
<section class="register w-full pb-40 text-center relative">
    <div class="slanted_div alt yellow z-1"></div>
    <div class="container mx-auto px-5 relative z-2">
        <h2 class="dotted mb-10 inline-block relative">Register</h2>
        <div class="text_wrap w-full mx-auto md:max-w-300">
            <p class="my-5 md:px-20">To engage campers in a variety of planned literacy activities that include hands-on learning and movement. The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
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
