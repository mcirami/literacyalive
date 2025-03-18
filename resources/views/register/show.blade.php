@extends('layouts.app')

@section('content')

    <section class="register w-full pb-40 pt-30">
        <div class="container mx-auto px-5 text-center">
            <h2 class="mb-10">Register For Camp</h2>
            @if (isset($paid_error))
                <div class="alert alert-danger mb-4 border-1 border-accent-red-800 p-2 mx-auto max-w-200">
                    <h3 class="accent-red-800 uppercase">Something went wrong. Please try again.</h3>
                </div>
            @endif

            @if ( session()->has('success') )
                <div class="alert alert-success max-w-200 mx-auto mb-6 my-20">
                    <h2>You Successfully Registered!</h2>
                    <p class="mt-10">Thanks for signing up!</p>
                    <p>We will get back to you with all the information you need to join us at the camp.</p>
                </div>
            @else
                <p class="max-w-200 mx-auto mb-6">
                    Please fill out the form below to register for camp. There is a fee of $200 for the camp.<br>
                    After you register you will be taken to a payment page.
                    Please submit your payment so we can finalize your registration.
                </p>
                <form class="max-w-150 mx-auto text-left" method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                    <label for="name" class="block mb-1">Parent's Name</label>
                    <input name="name" type="text" id="name" class="block p-2.5 w-full  @error('name') mb-0 @else mb-4 @enderror" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="alert alert-danger mb-4">
                        <h3 class="accent-red-800">{{ $message }}</h3>
                    </div>
                    @enderror

                    <label for="address" class="block mb-1">Address</label>
                    <input name="address" type="text" id="address" class="block p-2.5 w-full  @error('address') mb-0 @else mb-4 @enderror" value="{{ old('address') }}" required>
                    @error('address')
                        <div class="alert alert-danger mb-4">
                            <h3 class="accent-red-800">{{ $message }}</h3>
                        </div>
                    @enderror

                    <div class="two_columns flex justify-between items-center mb-4 gap-5">
                        <div class="w-full md:w-1/2">
                            <label for="city" class="block mb-1">City</label>
                            <input name="city" type="text" id="city" class="block p-2.5 w-full  @error('city') mb-0 @else mb-4 @enderror" value="{{ old('city') }}" required>
                        </div>
                        <div class="w-full md:w-1/2">
                            <label for="state" class="block mb-1">State</label>
                            <select name="state" id="state" class="block p-2.5 w-full  @error('state') mb-0 @else mb-4 @enderror" required>
                                <option value="">Select Your State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>

                    <div class="two_columns flex justify-between items-center mb-4 gap-5">
                        <div class="w-full md:w-1/2">
                            <label for="zip" class="block mb-1">Zip Code</label>
                            <input name="zip" type="text" id="zip" class="block p-2.5 w-full  @error('zip') mb-0 @else mb-4 @enderror" value="{{ old('zip') }}" required>
                            @error('zip')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2">
                            <label for="phone" class="block mb-1">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                                    </svg>
                                </div>
                                <input name="phone" type="text" id="phone" class="block pl-10 pt-2.5 pr-2.5 pb-2.5 w-full @error('phone') mb-0 @else mb-4 @enderror" value="{{ old('phone') }}" required>
                            </div>
                            @error('phone')
                                <div class="alert alert-danger mb-4">
                                    <h3 class="accent-red-800">{{ $message }}</h3>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="pb-4 border-b border-gray-200 mb-5">
                        <label for="email" class="block mb-1">E-Mail Address</label>
                        <input name="email" type="email" id="email" class="block p-2.5 w-full @error('email') mb-0 @else mb-4 @enderror" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="alert alert-danger mb-4">
                            <h3 class="accent-red-800">{{ $message }}</h3>
                        </div>
                        @enderror
                    </div>

                    <div class="two_columns flex justify-between items-center mb-4 gap-5">
                        <div class="w-full md:w-1/2">
                            <label for="child_name" class="block mb-1">Child's Name</label>
                            <input name="child_name" type="text" id="child_name" class="block p-2.5 w-full @error('child_name') mb-0 @else mb-4 @enderror" value="{{ old('child_name') }}" required>
                            @error('child_name')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2">
                            <label for="school" class="block mb-1">School</label>
                            <input name="school" type="text" id="school" class="block p-2.5 w-full @error('school') mb-0 @else mb-4 @enderror" value="{{ old('school') }}" required>
                            @error('school')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="two_columns flex items-center mb-5 gap-5 pb-4 border-b border-gray-200">
                        <div class="w-full md:w-1/2">
                            <label for="age" class="block mb-1">Age</label>
                            <input name="age" type="text" id="age" class="block p-2.5 w-full @error('age') mb-0 @else mb-4 @enderror" value="{{ old('age') }}" required>
                            @error('age')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2">
                            <label for="allergies" class="block mb-1">Allergies <small>(enter NA if no allergies)</small></label>
                            <input name="allergies" type="text" id="allergies" class="block p-2.5 w-full @error('allergies') mb-0 @else mb-4 @enderror" value="{{ old('allergies') }}" required>
                            @error('allergies')
                            <div class="alert alert-danger mb-4">
                                <h3 class="accent-red-800">{{ $message }}</h3>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <label for="emergency_contact" class="block mb-1">Emergency Contact <small>(different from parent)</small></label>
                    <input name="emergency_contact" type="text" id="emergency_contact" class="block p-2.5 w-full @error('emergency_contact') mb-0 @else mb-4 @enderror" value="{{ old('emergency_contact') }}" required>
                    @error('emergency_contact')
                    <div class="alert alert-danger mb-4">
                        <h3 class="accent-red-800">{{ $message }}</h3>
                    </div>
                    @enderror

                    <label for="emergency_phone" class="block mb-1">Emergency Contact Phone</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                            </svg>
                        </div>
                        <input name="emergency_phone" type="text" id="emergency_phone" class="block pl-10 pt-2.5 pr-2.5 pb-2.5 w-full @error('emergency_phone') mb-0 @else mb-4 @enderror" value="{{ old('emergency_phone') }}" required>
                    </div>

                    <label for="add_persons" class="block mb-1">Additional Person(s) authorized for pickup</label>
                    <input name="add_persons" type="text" id="add_persons" class="block p-2.5 w-full @error('add_persons') mb-0 @else mb-4 @enderror" value="{{ old('add_persons') }}">
                    @error('add_persons')
                        <div class="alert alert-danger mb-4">
                            <h3 class="accent-red-800">{{ $message }}</h3>
                        </div>
                    @enderror

                    <button type="submit" class="uppercase mt-6 w-full sm:max-w-60 flex justify-between items-center button yellow gap-6 text-lg">
                        <span>Register Now</span>
                        <span class="arrow_wrap max-w-4">
                            <img src="{{ asset('images/button-arrow.png') }}" alt="">
                        </span>
                    </button>
                    @error('error')
                        <div class="alert alert-danger mb-4">
                            <h3 class="accent-red-800">{{ $message }}</h3>
                        </div>
                    @enderror
                </form>
            @endif
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
