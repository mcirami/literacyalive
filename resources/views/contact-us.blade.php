@extends('layouts.app')

@section('content')
    <section class="contact w-full">
        <div class="page_hero text-center">
            <h2 class="inline-block relative mb-5">How Can We Help You?</h2>
        </div>
        <div class="bg_content_wrap">
            <div class="container mx-auto px-5 pb-20 text-center">
                <p class="max-w-150 mx-auto mt-2 sub_heading">We’re here to help and answer any questions you
                    might have.</p>
                <p class="sub_heading mb-5 mx-auto">We look forward to hearing from you! </p>
                @if (session()->has('success') )
                    <div class="alert alert-success max-w-200 mx-auto mb-6 my-20">
                        <h2>Your message has been sent!</h2>
                        <p class="mt-10">Thanks for contacting us.</p>
                        <p>We will get back to you shortly.</p>
                    </div>
                @else
                    <form class="max-w-150 mx-auto text-left" method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                        <input placeholder="Name" name="name" type="text" id="name" class="block p-2.5 w-full  @error('name') mb-0 @else mb-4 @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                        @enderror
                        <input placeholder="E-Mail Address" name="email" type="email" id="email" class="block p-2.5 w-full @error('email') mb-0 @else mb-4 @enderror" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                        @enderror
                        <textarea placeholder="Question" name="message" id="message" rows="10" class="block p-2.5 w-full text-sm @error('message') mb-0 @else mb-4 @enderror" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                        @enderror
                        <button type="submit" class="uppercase mt-6 w-full flex justify-center items-center button green gap-3 text-lg">
                            <span>Send Message</span>
                            <span class="arrow_wrap max-w-3 md:max-w-4">
                                <img src="{{ asset('images/button-arrow.png') }}" alt="">
                            </span>
                        </button>
                        @error('error')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $error }}</h3>
                            </div>
                        @enderror
                    </form>
                @endif
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'contact_form'})
                .then(function(token) {
                    // Put the token in a hidden input, so it gets submitted with the form
                    document.getElementById('recaptcha_token').value = token;
                });
            });
        });
    </script>
@endsection
