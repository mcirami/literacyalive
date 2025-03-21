@extends('layouts.app')

@section('content')
    <section class="our_story w-full pt-20 pb-20 text-left">
        <div class="container mx-auto px-5 relative">
            <h2 class="inline-block relative mb-5">Our Story</h2>
            <div class="two_columns flex flex-wrap justify-center">
                <div class="column md:w-1/2 pr-4 mb-10 md:mb-0">
                    <p class="mb-5">
                        The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make reading engaging and impactful for children. Literacy Alive focuses on children who tend to struggle with learning how to read in traditional ways. As a teacher, Karen Luning has seen how successful children can be when they have the opportunity to be more active and use multisensory methods when learning literacy skills.
                    </p>
                    <p>
                        The founders both have children of their own and have dealt with searching for meaningful summer camps. Finding a camp that is not only fun for your child, but a camp that will help them attain skills and learn can be a challenge. That sparked the idea that it would be fun to start a camp that integrates learning literacy skills with movement, hands-on activities and music! This initiated the concept of making literacy come alive with a camp like no other: Literacy Alive!
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
    <section class="mission w-full pt-20 pb-40 text-center">
        <div class="container mx-auto px-5">
            <h2 class="dotted mb-10 relative inline-block">Our Mission</h2>
            <div class="text_wrap w-full mx-auto md:max-w-300">
                <p class="my-5 md:px-20">To engage campers in a variety of planned literacy activities that include hands-on learning and movement. The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
            </div>
        </div>
    </section>
    <section class="director w-full pb-40 text-center relative">
        <div class="slanted_div alt yellow z-1"></div>
        <div class="container mx-auto px-5 relative z-2">
            <h2 class="inline-block relative mb-15 dotted">About The Director</h2>
            <div class="two_columns flex flex-wrap justify-center max-w-300 mx-auto">
                <div class="column mb-10">
                    <img src="{{ asset('images/director.png') }}" alt="">
                </div>
                <div class="column w-full md:w-3/4 text-left md:pl-10">
                    <p class="mb-10">The director of the camp, Karen Luning, has been a teacher for the last twenty-one years and a reading specialist for the last sixteen. In addition to volunteering at various camps, she also ran a summer camp at UMSL for elementary students. She has also been involved in Boy Scouts with her two sons where they participated in numerous camp activities. </p>
                    <p>She and one of her sons have both been diagnosed with ADHD and have found ways to not only cope with this disorder but with the right learning approaches have learned to thrive. Karen is a National Board Certified teacher and is constantly trying new and fun methodology that engages children. She understands that most children learn best when they are moving and having fun!</p>
                </div>
            </div>
        </div>
    </section>

@endsection
