@extends('layouts.app')

@section('content')
    <section class="schedule w-full pb-20">
        <div class="page_hero text-center">
            <h2 class="inline-block relative mb-5">Summer Camp Schedule</h2>
        </div>
        <div class="container mx-auto px-5">
            <div class="two_columns flex flex-wrap-reverse justify-center content-start">
                <div class="column md:w-1/2">
                    <div class="images_wrap">
                        <div class="w-full flex justify-center content-center gap-5 mb-5">
                            <div class="column">
                                <img src="{{ asset('images/about-founders.png') }}" alt="">
                            </div>
                            <div class="column">
                                <img src="{{ asset('images/daily-plan-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-full flex justify-center content-center gap-5">
                            <div class="column">
                                <img src="{{ asset('images/daily-plan-3.png') }}" alt="">
                            </div>
                            <div class="column">
                                <img src="{{ asset('images/daily-plan-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column w-full md:w-1/2 px-5 mb-10 md:mb-0">
                    <ul class="mt-4">
                        <li class="mb-2">
                            <p><span>8:30</span> Arrival/Tactile Centers Open</p>
                        </li>
                        <li class="mb-2">
                            <p><span>9:00</span> Meeting</p>
                        </li>
                        <li class="mb-2">
                            <p><span>9:15</span> Team Building Activity</p>
                        </li>
                        <li class="mb-2">
                            <p><span>9:30</span> Whole Group Lesson</p>
                        </li>
                        <li class="mb-2">
                            <p><span>9:45</span> Large Group Song and Game</p>
                        </li>
                        <li class="mb-2">
                            <p><span>10:00</span> Learning Stations</p>
                        </li>
                        <li class="mb-2">
                            <p><span>10:30</span> Read Aloud (snack and bathroom break)</p>
                        </li>
                        <li class="mb-2">
                            <p><span>10:45</span> Reader’s Theater</p>
                        </li>
                        <li class="mb-2">
                            <p><span>11:00</span> One group presents</p>
                        </li>
                        <li class="mb-2">
                            <p><span>11:15</span> Game Time</p>
                        </li>
                        <li class="mb-2">
                            <p><span>11:40</span> Closing Discussion</p>
                        </li>
                        <li class="mb-2">
                            <p><span>11:55</span> Dismissal Begins</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bring about_us w-full pt-20 pb-50 text-center">
        <div class="container mx-auto px-5">
            <h2 class="dotted mb-10 inline-block relative">What to Bring</h2>
            <div class="text_wrap w-full mx-auto md:max-w-300">
                <p class="my-5 md:px-20">Water Bottle<br>
                    Snack - Please avoid snacks with nuts.<br>
                    Perishable items are permitted, however please label container with your child's name.<br>
                    Anything additional, please Contact Us!
                    </p>
            </div>
        </div>
    </section>
    <section class="themes w-full pb-20 text-center relative">
        <div class="container mx-auto px-5 relative z-2">
            <h2 class="dotted mb-10 inline-block relative">What NOT to bring!</h2>
            <div class="two_columns flex flex-wrap justify-center max-w-300 mx-auto">
                <p class="mb-10">Toys<br>
                Candy<br>
                Electronic Devices
                </p>
            </div>
            </div>
        </div>
    </section>
    <section class="arrival w-full pt-20 text-center relative">
        <div class="container mx-auto px-5 relative z-2">
            <div class="container mx-auto px-5">
                <h2 class="inline-block relative">Arrival and Dismissal</h2>
                <p class="mt-6 mb-4 small_container">
                    Campers should arrive between 8:30-8:45 each morning. After registration, all guardians will be contacted directly with further details for dismissal.
                </p>
            </div>
        </div>
    </section>

@endsection
