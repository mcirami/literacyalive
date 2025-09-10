<x-mail::message>
# Camp Registration Submitted

Camp Date: {{$date}}
<br>
<br>
Name: {{$name}}
<br>
<br>
Address: {{$address}}
<br>
<br>
City: {{$city}}
<br>
<br>
State: {{$state}}
<br>
<br>
Zip: {{$zip}}
<br>
<br>
Phone: {{$phone}}
<br>
<br>
Email: {{$email}}
<br>
<br>
Child Name: {{$child_name}}
<br>
<br>
School: {{$school}}
<br>
<br>
Age: {{$age}}
<br>
<br>
Allergies: {{$allergies}}
<br>
<br>
Emergency Contact: {{$emergency_contact}}
<br>
<br>
Emergency Contact Phone: {{$emergency_phone}}
<br>
<br>
Add Person(s) to Camp: {{$add_persons}}
<br>
<br>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
