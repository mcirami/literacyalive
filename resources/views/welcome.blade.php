@extends('layouts.app')

@section('content')


    <section class="hero w-full pb-20">
        <div class="container mx-auto px-5">
            <div class="columns_wrap flex flex-col lg:flex-row items-start justify-center ">
                <div class="column w-full lg:w-1/2 pb-10 lg:pb-20 pr-0 lg:pr-20">
                    <h2 class="mb-4">Our hearts are big enough to address the literacy <span>challenge in our community</span></h2>
                    <p>Love Literacy is dedicated to ensuring that every child finds their best future through the benefits of literacy.</p>
                    <p>We are building community in and around the literacy landscape that clearly understands systemic literacy barriers and how to move the needle further.</p>
                    <a href="#" class="uppercase sm:max-w-50 flex justify-between items-center button yellow text-lg">
                        <span>Learn More</span>
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
            <h2 class="dotted mb-10">Our Challenge</h2>
            <div class="text_wrap mx-auto max-w-200">
                <p class="my-5 px-20">Sadly, only half of the children in Winston-Salem/Forsyth County Schools can read proficiently.</p>
                <p>In <span>Winston-Salem/Forsyth County Schools</span> there is a 40% reading proficiency gap between white children and children of color.</p>
            </div>

            <div class="boxes flex flex-wrap justify-center gap-15 my-15">
                <div class="column box1">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>54%</h3>
                    <p>of 3rd graders are not proficient in reading.</p>
                </div>
                <div class="column box2">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>68%</h3>
                    <p>of 3rd graders are not proficient in reading.</p>
                </div>
                <div class="column box3">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>72%</h3>
                    <p>of 3rd graders are not proficient in reading.</p>
                </div>
                <div class="column box4 ">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>58%</h3>
                    <p>of 3rd graders are not proficient in reading.</p>
                </div>
                <div class="column box5">
                    <div class="circle">
                        <div class="inner_circle"></div>
                    </div>
                    <h3>45%</h3>
                    <p>of 3rd graders are not proficient in reading.</p>
                </div>
            </div>
            <h4 class="mb-4">Learn more about the Literacy landscape in Forsyth County by visiting our dashboard.</h4>
            <a href="#" class="uppercase mx-auto sm:max-w-60 flex justify-between items-center button yellow gap-6 text-lg">
                <span>View Dashboard</span>
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
                    <h2 class="text-white">Love Literacy Seeks Fundraising
                        and Development Assistant</h2>
                    <p class="text-white my-5 max-w-200 mx-auto">Join our Team!Join Love Literacy (a small nonprofit organization) as a Fundraising and Development Assistant and contribute to transforming children's futures through literacy. In this role, you'll support event planning, manage donor relations, and drive marketing...</p>
                    <a href="#" class="uppercase mx-auto sm:max-w-60 flex justify-between items-center button white gap-6 text-lg">
                        <span>View Dashboard</span>
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
            <h2 class="dotted inline-block relative pb-10 mb-10">For the Love of Our Community.</h2>
            <p class="mt-6 mb-4">Volunteer, donate, sign up for our annual report.</p>
            <div class="two_columns flex justify-center max-w-200 mx-auto">
                <div class="column flex-shrink-2">
                    <img src="{{ asset('images/community-col-1.png') }}" alt="">
                </div>
                <div class="column flex-shrink-2">
                    <img src="{{ asset('images/community-col-2.png') }}" alt="">
                </div>
            </div>
            <div class="button_row  w-full max-w-200 mx-auto flex flex-col sm:flex-row justify-center items-center mt-5 gap-3 lg:gap-5">
                <a href="#" class="uppercase w-full mx-auto flex justify-between items-center button yellow text-lg">
                    <span>Volunteer</span>
                    <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                </a>
                <a href="#" class="uppercase w-full mx-auto flex justify-between items-center button yellow text-lg">
                    <span>Donate</span>
                    <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                </a>
                <a href="#" class="uppercase w-full flex justify-between items-center button yellow text-lg">
                    <span>Annual Report</span>
                    <span class="arrow_wrap max-w-4">
                        <img src="{{ asset('images/button-arrow.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
