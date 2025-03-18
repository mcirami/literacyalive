@extends('layouts.app')

@section('content')
    <section class="schedule w-full py-20">
        <div class="container mx-auto px-5">
            <h2>Schedule</h2>
            <div class="two_columns flex flex-wrap justify-center">
                <div class="column md:w-1/2 pr-4 mb-10 md:mb-0">
                    <p class="mb-5">
                        The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make learning impactful for kids in their community who struggle with learning how to read in traditional ways. Karen Luning has been a teacher for over twenty years, and she sees how successful children are when they have the opportunity to get active and use multisensory methods when learning literacy skills.
                    </p>
                    <p>
                        Both founders have children of their own and have dealt with searching for camps for their kids in the summer. They were always looking for a camp that would not just be fun for their children, but a camp that they would attain skills and grow from as well. Then, they thought it would be fun to start a camp that integrates learning literacy skills with movement, hands-on activities and music! This idea is what sparked the concept of making literacy come alive with a camp like no other: Literacy Alive!
                    </p>
                </div>
                <div class="column md:w-1/2">
                    <div class="images_wrap">
                        <div class="w-full flex justify-center content-center gap-5 mb-5">
                            <div class="column">
                                <img src="{{ Vite::asset('resources/images/our-story-1.png') }}" alt="">
                            </div>
                            <div class="column">
                                <img src="{{ Vite::asset('resources/images/our-story-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-full flex justify-center content-center gap-5">
                            <div class="column">
                                <img src="{{ Vite::asset('resources/images/our-story-3.png') }}" alt="">
                            </div>
                            <div class="column">
                                <img src="{{ Vite::asset('resources/images/our-story-4.png') }}" alt="">
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
                <p class="my-5 md:px-20">To engage campers in a variety of planned literacy activities that include hands-on learning and movement. The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
            </div>
        </div>
    </section>
    <section class="themes w-full pb-20 text-center relative">
        <div class="slanted_div alt yellow z-1"></div>
        <div class="container mx-auto px-5 relative z-2">
            <h2 class="dotted mb-10 inline-block relative">Themes</h2>
            <div class="two_columns flex flex-wrap justify-center max-w-300 mx-auto">
                <div class="column mb-10 lg:mb-0">
                    <img src="{{ Vite::asset('resources/images/director.png') }}" alt="">
                </div>
                <div class="column w-full md:w-3/4 text-left md:pl-10">
                    <p class="mb-10">The director of the camp, Karen Luning, has been a reading specialist for the past sixteen years of her twenty-one years of teaching. In addition to volunteering at various camps, she has been involved in Boy Scouts with her two sons where they participated in numerous camp activities. </p>
                    <p>She and her son both have been diagnosed with ADHD and have found ways to not only cope with this disorder but with the right learning approaches have learned to thrive. Karen is a National Board Certified teacher and is constantly trying new and fun methodology that engages children. She understands that most children learn best when they are moving and having fun!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="arrival w-full pt-20 pb-40 text-center">
        <div class="container mx-auto px-5">
            <h2 class="dotted mb-10 inline-block relative">Arrival and Dismissal</h2>
            <div class="text_wrap w-full mx-auto md:max-w-300">
                <p class="my-5 md:px-20">To engage campers in a variety of planned literacy activities that include hands-on learning and movement. The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
            </div>
        </div>
    </section>

@endsection
