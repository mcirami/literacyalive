@extends('layouts.app')

@section('content')
    <section class="our_story w-full">
        <div class="page_hero text-center">
            <h2 class="inline-block relative mb-5">Our Story</h2>
        </div>
        <div class="container mx-auto px-5 relative">
            <div class="two_columns flex flex-wrap justify-center align-center">
                <div class="column w-full md:w-1/2 pr-4 mb-10 md:mb-0 content-center">
                    <p class="mb-5">
                        <span>
                            The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make reading engaging and impactful for children.
                        </span>
                    </p>
                    <p class="mb-5">
                        Literacy Alive focuses on children who tend to struggle with learning how to read in traditional ways.
                    </p>
                    <p>
                        As a teacher, Karen Luning has seen how successful children can be when they have the opportunity to be more active and use multisensory methods when learning literacy skills.
                    </p>

                </div>
                <div class="column w-full md:w-1/2 content-center">
                    <img src="{{ asset('images/about-first.png') }}" alt="">
                </div>
            </div>
            <div class="two_columns flex flex-wrap-reverse justify-center">
                <div class="column w-full md:w-1/2 content-center">
                    <img src="{{ asset('images/about-founders.png') }}" alt="">
                </div>
                <div class="column w-full md:w-1/2 pr-4 mb-10 md:mb-0 content-center">
                    <p class="mb-5">
                        <span>
                            The founders both have children of their own and have dealt with searching for meaningful summer camps.
                        </span>
                    </p>
                    <p class="mb-5">
                        Finding a camp that is not only fun for your child, but a camp that will help them attain skills and learn can be a challenge.
                    </p>
                    <p class="mb-5">
                        That sparked the idea that it would be fun to start a camp that integrates learning literacy skills with movement, hands-on activities and music! This initiated the concept of making literacy come alive with a camp like no other:
                    </p>
                    <p>
                        <span>Literacy Alive!</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="mission w-full text-center">
        <div class="container mx-auto px-5">
            <div class="image_wrap">
                {{--<img src="{{ asset('images/about-mission.png') }}" alt="">--}}
                <div class="image_content">
                    <h2 class="inline-block relative">Our Mission</h2>
                    <p class="mb-5">To engage campers in a variety of planned literacy activities that include hands-on learning and movement.</p>
                    <p>The daily experiences will promote physical, mental, and social development while inspiring creativity and the advancement of language.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="director w-full p-5 md:p-20 text-center relative">
        <div class="container mx-auto px-5 relative z-2">
            <div class="two_columns flex flex-wrap justify-center align-center mx-auto max-w-250">
                <div class="column w-full md:w-1/2 text-left">
                    <h2 class="inline-block relative">About The Director</h2>
                    <p class="mb-5">The director of the camp, Karen Luning, has been a teacher for the last twenty-one years and a reading specialist for the last sixteen.</p>
                    <p class="mb-5">In addition to volunteering at various camps, she also ran a summer camp at UMSL for elementary students. She has also been involved in Boy Scouts with her two sons where they participated in numerous camp activities.
                        She and one of her sons have both been diagnosed with ADHD and have found ways to not only cope with this disorder but with the right learning approaches have learned to thrive.
                    </p>
                    <p>Karen is a National Board Certified teacher and is constantly trying new and fun methodology that engages children. She understands that most children learn best when they are moving and having fun!</p>
                </div>
                <div class="column w-full md:w-1/2">
                    <img class="max-w-100 mx-auto" src="{{ asset('images/about-director.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
