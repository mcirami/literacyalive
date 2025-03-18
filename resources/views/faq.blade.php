@extends('layouts.app')

@section('content')
    <section class="faq w-full pb-60 pt-40">
        <div class="container mx-auto px-5 text-center">
            <h2 class="mb-10">Frequently Asked Questions</h2>

            <div id="accordion-collapse" class="text-left max-w-200 lg:max-w-250 mx-auto" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 rtl:text-right gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span>What is ActiveCampaign?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5">
                        <p class="mb-2">
                            The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make learning impactful for kids in their community who struggle with learning how to read in traditional ways. Karen Luning has been a teacher for over twenty years, and she sees how successful children are when they have the opportunity to get active and use multisensory methods when learning literacy skills.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border-t gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>How does ActiveCampaign work?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5">
                        <p class="mb-2 ">
                            The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make learning impactful for kids in their community who struggle with learning how to read in traditional ways. Karen Luning has been a teacher for over twenty years, and she sees how successful children are when they have the opportunity to get active and use multisensory methods when learning literacy skills.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>Can I extend my free trial?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5">
                        <p class="mb-2 ">
                            The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make learning impactful for kids in their community who struggle with learning how to read in traditional ways. Karen Luning has been a teacher for over twenty years, and she sees how successful children are when they have the opportunity to get active and use multisensory methods when learning literacy skills.
                        </p>
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-4">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                        <span>Can I extend my free trial?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                    <div class="p-5">
                        <p class="mb-2 ">
                            The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make learning impactful for kids in their community who struggle with learning how to read in traditional ways. Karen Luning has been a teacher for over twenty years, and she sees how successful children are when they have the opportunity to get active and use multisensory methods when learning literacy skills.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-5">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right  border-t gap-3" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                        <span>Does ActiveCampaign provide landing pages?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                    <div class="p-5">
                        <p class="mb-2 ">
                            The Literacy Alive Camp concept was sparked between the two founders when they were discussing ideas on how to make learning impactful for kids in their community who struggle with learning how to read in traditional ways. Karen Luning has been a teacher for over twenty years, and she sees how successful children are when they have the opportunity to get active and use multisensory methods when learning literacy skills.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
