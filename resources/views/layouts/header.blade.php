<header class="w-full mb-0 lg:mb-6 py-5 relative z-2">
    <div class="container mx-auto px-5 relative z-2">
        <nav>
            <div class="flex flex-wrap lg:flex-nowrap items-center justify-between mx-auto py-4">
                <a href="/" class="logo max-w-50 xl:max-w-60 flex justify-center items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="lg:hidden inline-flex items-center p-2 w-10 h-10 justify-center text-sm" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full lg:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col pr-4 pt-4 pb-4 pl-0 md:p-0 mt-4 md:flex-row space-x-2 md:space-x-4 xl:space-x-8 rtl:space-x-reverse md:mt-0">
                        <li class="pt-2 pb-2 pl-0 lx:pl-3 pr-3">
                            <a href="/"
                               class="text-lg inline-block @if(request()->is('/')) active @endif">
                                HOME
                            </a>
                        </li>
                        <li class="pt-2 pb-2 pl-0 lx:pl-3 pr-3">
                            <a href="/about-us"
                               class="text-lg inline-block @if(request()->is('about-us')) active @endif">
                                ABOUT US
                            </a>
                        </li>
                        <li class="pt-2 pb-2 pl-0 lx:pl-3 pr-3">
                            <a href="/daily-plan"
                               class="text-lg inline-block @if(request()->is('daily-plan')) active @endif">
                                DAILY PLAN
                            </a>
                        </li>
                        <li class="pt-2 pb-2 pl-0 lx:pl-3 pr-3">
                            <a href="/camp-details"
                               class="text-lg inline-block @if(request()->is('camp-details')) active @endif">
                                CAMP DETAILS
                            </a>
                        </li>
                        <li class="pt-2 pb-2 pl-0 lx:pl-3 pr-3">
                            <a href="/faq"
                               class="text-lg inline-block @if(request()->is('faq')) active @endif">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="/contact-us"
                               class="flex justify-between items-center button yellow gap-6 text-lg">
                                CONTACT US
                                <span class="arrow_wrap max-w-4">
                                    <img src="{{ asset('images/button-arrow.png') }}" alt="">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="slanted_div z-1"></div>
</header>
