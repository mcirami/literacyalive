@extends('layouts.app')

@section('content')
    <section class="schedule w-full pt-40 py-20">
        <div class="container mx-auto px-5">
            <h2>Schedule</h2>
            <div class="two_columns flex flex-wrap justify-center">
                <div class="column md:w-1/2 pr-4 mb-10 md:mb-0">
                    <p class="mb-5">
                        8:30 Arrival/Tactile Centers Open<br>
                        9:00 Meeting<br>
                        9:15 Team Building Activity<br>
                        9:30 Whole Group Lesson<br>
                        9:45 Large Group Song and Game<br>
                        10:00 Learning Stations<br>
                        10:30 Read Aloud (snack and bathroom break)<br>
                        10:45 Reader’s Theater<br>
                        11:00 One group presents<br>
                        11:15 Game Time<br>
                        11:40 Closing Discussion<br>
                        11:55 Dismissal Begins<br>
                    </p>
                </div>
                <div class="column md:w-1/2">
                    <div class="images_wrap">
                        <div class="w-full flex justify-center content-center gap-5 mb-5">
                            <div class="column">
                                <img src="{{ asset('images/our-story-1.png') }}" alt="">
                            </div>
                            <div class="column">
                                <img src="{{ asset('images/our-story-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-full flex justify-center content-center gap-5">
                            <div class="column">
                                <img src="{{ asset('images/our-story-3.png') }}" alt="">
                            </div>
                            <div class="column">
                                <img src="{{ asset('images/our-story-4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bring w-full pt-20 pb-40 text-center">
        <div class="container mx-auto px-5">
            <h2 class="dotted mb-10 inline-block relative">What to Bring</h2>
            <div class="text_wrap w-full mx-auto md:max-w-300">
                <p class="my-5 md:px-20">Water Bottle<br>
Snack - Please avoid snacks with nuts.<br>
Parishable items are permitted, however please label container with your child's name.<br>
Anything additional, please Contact Us!
</p>
            </div>
        </div>
    </section>
    <section class="themes w-full pb-20 text-center relative">
        <div class="slanted_div alt yellow z-1"></div>
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
    <section class="arrival w-full pt-20 pb-40 text-center">
        <div class="container mx-auto px-5">
            <h2 class="dotted mb-10 inline-block relative">Arrival and Dismissal</h2>
            <div class="text_wrap w-full mx-auto md:max-w-300">
                <p class="my-5 md:px-20">Campers should arrive between 8:30-8:45 each morning. After registration, all guardians will be contacted directly with further details for dismissal.</p>
            </div>
        </div>
    </section>

@endsection
