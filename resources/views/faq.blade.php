@extends('layouts.app')

@section('content')
    <section class="faq w-full pb-60 pt-40">
        <div class="container mx-auto px-5 text-center">
            <h2 class="mb-10">Frequently Asked Questions</h2>

            <div id="accordion-collapse" class="text-left max-w-200 lg:max-w-250 mx-auto" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 rtl:text-right gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span>What is the camper to counselor ratio?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5">
                        <p class="mb-2">
                           There will be at least a 1:6 ratio of staff to campers each day.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border-t gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Does the camp have any religious education?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5">
                        <p class="mb-2 ">
                            No. Literacy Alive Summer Camp is not affiliated with Elliot Chapel. Our camp will be solely focused on teaching our campers literacy skills.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>Will my child learn to read?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5">
                        <p class="mb-2 ">
Every day there will be a major phonics concept taught to the whole group. Each concept will be reinforced in group games and individual centers. The Director will meet with each child in small group settings at least twice during the week.                           </p>
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-4">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                        <span>How many campers are you accepting?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                    <div class="p-5">
                        <p class="mb-2 ">
                            Each week long summer camp will accept no more than 24 campers.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-5">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                        <span>What if my camper needs to arrive late or be dismissed early?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                    <div class="p-5">
                        <p class="mb-2 ">
                            We are happy to accomodate your schedule if required. Please either email or write a note informing us of any changes. 
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
