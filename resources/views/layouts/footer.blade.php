<footer class="w-full text-center relative">
    <div class="container mx-auto px-2 md:px-5 z-2 relative">
        <div class="logo mx-auto max-w-60 md:max-w-80 flex justify-center items-center">
            <a class="w-full logo_wrap" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="footer_nav flex justify-center items-center flex-wrap mt-10 mb-5 gap-5 md:gap-10 text-white">
            <a class="@if(request()->is('/')) active @endif" href="/">Home</a>
            <a class="inline-block @if(request()->is('about-us')) active @endif" href="/about-us">About</a>
            <a class="inline-block @if(request()->is('daily-plan')) active @endif" href="/daily-plan">Daily Plan</a>
            <a class="inline-block @if(request()->is('camp-details')) active @endif" href="/camp-details">Camp Details</a>
            <a class="inline-block @if(request()->is('faq')) active @endif" href="/faq">FAQ</a>
            <a class="inline-block @if(request()->is('contact-us')) active @endif" href="/contact-us">Contact</a>
        </div>
        <p class="copyright">&copy; 2025 Literacy Alive. All rights reserved.</p>
    </div>
    <div class="w-full">
        <img src="{{ asset('images/footer-hands.png') }}" alt="">
    </div>
</footer>
