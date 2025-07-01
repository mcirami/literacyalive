@extends('layouts.app')

@section('content')

    <section class="hero w-full p-40">
        <div class="container mx-auto px-5">
            <div class="content_wrap mx-auto">
                <h2 class="text-center">
                    <span class="span1">We Believe</span>
                    learning to read can be
                    <span class="span1">active and fun</span>
                    for all
                    <span class="span1">children!</span>
                </h2>
            </div>
        </div>
    </section>
    <section class="about_us w-full text-center">
        <div class="container mx-auto px-5">
            <div class="image_wrap max-w-50 sm:max-w-75 md:max-w-100 mx-auto mb-4">
                <img src="{{ asset('images/logo-alt.png') }}" alt="">
            </div>
            <div class="content_wrap max-w-150 mx-auto">
                <p class="mb-8">is dedicated to providing an <span>engaging environment</span> for children ages 5-8 learning essential <span>reading skills</span>
                    at our <span>week long summer camp.</span>
                </p>
                <p class="mb-8">
                    Each day of our <span>summer camp</span> will be themed and focused on both <span>learning and movement.</span>
                </p>
                <a href="/about-us"
                   class="flex justify-center items-center button green gap-3 text-lg uppercase max-w-60 mx-auto">
                    More About Us
                    <span class="arrow_wrap max-w-4 md:max-w-5">
                        <img src="{{ asset('images/button-arrow.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="themes w-full pb-20 text-center relative">
        <div class="container mx-auto px-5 z-2 relative">
            <h2 class="uppercase">Our Daily Themes</h2>
            <div class="small_container">
                <p>We have designed an active summer camp to help young students learn essential literacy skills while
                    moving their bodies. Our program will follow the daily themes and activities as shown below!</p>
            </div>
            <div class="white_box flex justify-center flex-wrap md:nowrap items-start w-full mx-auto mt-10">
                <div class="accordion_col w-full md:w-1/2">
                    <div id="accordion-collapse" class="text-left w-full mx-auto" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button" class="flex items-center justify-between w-full pt-5 pr-5 pb-5 rtl:text-right gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>MUSIC</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <p class="mb-4">
                                Incorporating music using instruments, singing, and encourage dancing while enforcing phonic skills.
                            </p>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full pt-5 pr-5 pb-5 font-medium rtl:text-right border-t gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>SPORTS</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <p class="mb-4 ">
                                Playing new versions of baseball, table football, ping pong and more while incorporating spelling skills.
                            </p>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button" class="flex items-center justify-between w-full pt-5 pr-5 pb-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                <span>CAMPING</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <p class="mb-2 ">
                                Reading in a tent, circling up around a fake fire, and reading ghost stories.
                            </p>
                        </div>

                        <h2 id="accordion-collapse-heading-4">
                            <button type="button" class="flex items-center justify-between w-full pt-5 pr-5 pb-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                <span>ANIMALS</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                            <p class="mb-2 ">
                                Books, games, and songs that revolve around the students' favorite animals.
                            </p>
                        </div>
                        <h2 id="accordion-collapse-heading-5">
                            <button type="button" class="flex items-center justify-between w-full pt-5 pr-5 pb-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                <span>PRINCESS VS HEROES</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                            <p class="mb-2 ">
                                Dress up as your favorite princess or super hero and act out plays.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="image_col w-full md:w-1/2">
                    <img src="{{ asset('images/music-img.png') }}" alt="">
                </div>
            </div>
            <div class="w-full">
                <div class="small_container">
                    <p class="my-8">
                        Learn more about the Literacy Alive Summer Camp for your child by visiting our Camp Details.
                    </p>
                </div>
                <a href="/camp-registration"
                   class="flex justify-center items-center button green gap-3 text-lg uppercase max-w-60 mx-auto">
                    Register Now
                    <span class="arrow_wrap max-w-4 md:max-w-5">
                        <img src="{{ asset('images/button-arrow.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
    </section>
    <div class="text_scroll">
        <ul class="flex justify-around items-center w-full">
            <li>
                <h3>
                    MUSIC
                </h3>
            </li>
            <li>
                <h3>
                    SPORTS
                </h3>
            </li>
            <li>
                <h3>
                    CAMPING
                </h3>
            </li>
            <li>
                <h3>
                    ANIMALS
                </h3>
            </li>
            <li>
                <h3>
                    PRINCESSES VS HEROES
                </h3>
            </li>
        </ul>
    </div>
    <section class="home_register w-full pt-20 pb-40 text-center relative">
        <div class="container mx-auto px-5">
            <h2 class="inline-block relative">LITERACY ALIVE<br/> IS READY FOR YOUR CHILD</h2>
            <div class="sub_heading_box">
                <p class="">Register today to attend our Literacy Alive summer Camp 2025.</p>
            </div>
            <p class="mt-6 mb-4 small_container">
                The camp will be held at Elliot Chapel, located at <span class="font-bold">100 South Taylor Ave., Kirkwood, MO 63122</span>
                the week of <span class="yellow">July 28th through August 1st.</span>
                Campers should arrive daily at 8:30 am and be released each day at noon.
            </p>
            <a href="/camp-registration"
               class="mt-5 flex justify-center items-center button green gap-3 text-lg uppercase max-w-60 mx-auto">
                Register Now
                <span class="arrow_wrap max-w-4 md:max-w-5">
                    <img src="{{ asset('images/button-arrow.png') }}" alt="">
                </span>
            </a>
        </div>
    </section>
    <section class="join_now w-full text-center">
        <div class="container mx-auto p-5">
            <div class="orange_box flex-wrap sm:flex-nowrap md:columns-2 mx-auto flex justify-start items-center w-full text-left">
                <div class="text_col w-full sm:w-2/3">
                    <h2>JOIN US AND MAKE LITERACY COME ALIVE</h2>
                    <p>Register or <span>get in touch today!</span></p>
                    <a href="/camp-registration"
                       class="mt-5 flex justify-center items-center button green gap-3 text-lg uppercase xs:max-w-60">
                        Register Now
                        <span class="arrow_wrap max-w-4 md:max-w-5">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="image_col w-full sm:w-1/3">
                    <img src="{{ asset('images/join-boy.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
