@extends('layouts.app')

@section('content')

    <section class="hero w-full pt-20 md:pt-40 pb-20">
        <div class="container mx-auto px-5">
            <div class="columns_wrap flex flex-col lg:flex-row items-start justify-center ">
                <div class="column mb-4 lg:mb-0 w-full lg:w-1/2 pr-0 lg:pr-20">
                    <h2 class="mb-4">We believe learning to read can be active and fun <span>for all children!</span></h2>
                    <p>Literacy Alive is dedicated to providing an engaging environment for children ages 5-8 learning essential reading skills at our week long summer camp.</p>
                    <p>Each day of our summer camp will be themed and  focused on both learning and movement.</p>
                    <a href="/about-us" class="uppercase sm:max-w-50 flex justify-between items-center button yellow text-lg">
                        <span>More About Us</span>
                        <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="column w-full lg:w-1/2">
                    <img src="{{ asset('images/hero-image.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="challenge w-full pt-20 pb-40 text-center">
        <div class="container mx-auto px-5">
            <h2 class="dotted mb-10">Our Daily Themes</h2>
            <div class="text_wrap mx-auto max-w-200">
                <p class="my-5 px-20">We have designed an active summer camp to help young students learn essential literacy skills while moving their bodies. Our program will follow the daily themes and activities as shown below!</p>
            </div>

            <div class="boxes flex flex-wrap justify-center gap-15 my-15">
                <div class="column box1">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>Music</h3>
                    <p>Encorporating music using instruments, singing, and encourage dancing while enforcing phonic skills.</p>
                </div>
                <div class="column box2">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>Sports</h3>
                    <p>Playing new versions of baseball, table football, ping pong and more while encorporating spelling skills.</p>
                </div>
                <div class="column box3">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>Camping</h3>
                    <p>Reading in a tent, circling up around a fake fire, and reading ghost stories.</p>
                </div>
                <div class="column box4 ">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>Animals</h3>
                    <p>Books, games, and songs that revolve around the students' favorite animals.</p>
                </div>
                <div class="column box5">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>Princesses vs Heroes</h3>
                    <p>Dress up as your favorite princess or super hero and act out plays. </p>
                </div>
            </div>
            <h4 class="mb-4">Learn more about the Literacy Alive Summer Camp for your child by visiting our Camp Details.</h4>
            <a href="/camp-details" class="uppercase mx-auto sm:max-w-60 flex justify-between items-center button yellow gap-6 text-lg">
                <span>Camp Details</span>
                <span class="arrow_wrap max-w-4">
                    <img src="{{ asset('images/button-arrow.png') }}" alt="">
                </span>
            </a>
        </div>
    </section>

    <section class="fundraising w-full pb-20 text-center relative">
        <div class="slanted_div alt z-1"></div>
        <div class="container mx-auto px-5 z-2 relative">
            <div  class="flex items-center justify-center">
                <div class="image_col left">
                    <img src="{{ asset('images/girl-graphic.png') }}" alt="">
                </div>
                <div class="content_col">
                    <h2 class="text-white">Literacy Alive is ready for your child!</h2>
                    <p class="text-white my-5 max-w-200 mx-auto">Register today to attend our Literacy Alive Summer Camp 2025. <br>The camp will be held at Elliot Chapel, located at 100 South Taylor Ave., Kirkwood, MO 63122<br> the week of July 28th through August 1st. <br>Campers should arrive daily at 8:30 am and be released each day at noon.   </p>
                    <a href="/camp-register" class="uppercase mx-auto sm:max-w-60 flex justify-between items-center button white gap-6 text-lg">
                        <span>Register Now</span>
                        <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="image_col right">
                    <img src="{{ asset('images/rainbow-bird.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="community w-full pt-20 pb-40 text-center relative">
        <div class="container mx-auto px-5">
            <h2 class="dotted inline-block relative pb-10 mb-10">Help us make Literacy Alive</h2>
            <p class="mt-6 mb-4">Register or get in touch today!</p>
            <div class="two_columns flex justify-center max-w-200 mx-auto">
                <div class="column flex-shrink-2">
                    <img src="{{ asset('images/community-col-1.png') }}" alt="">
                </div>
                <div class="column flex-shrink-2">
                    <img src="{{ asset('images/community-col-2.png') }}" alt="">
                </div>
            </div>
            <div class="button_row  w-full max-w-200 mx-auto flex flex-col sm:flex-row justify-center items-center mt-5 gap-3 lg:gap-5">
                <a href="/camp-register" class="uppercase w-full mx-auto flex justify-between items-center button yellow text-lg">
                    <span>Register Now</span>
                    <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                </a>
                <a href="/faq" class="uppercase w-full mx-auto flex justify-between items-center button yellow text-lg">
                    <span>FAQ</span>
                    <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                </a>
                <a href="/contact-us" class="uppercase w-full flex justify-between items-center button yellow text-lg">
                    <span>Contact Us</span>
                    <span class="arrow_wrap max-w-4">
                        <img src="{{ asset('images/button-arrow.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
