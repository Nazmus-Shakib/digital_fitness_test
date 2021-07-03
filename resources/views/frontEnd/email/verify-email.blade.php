<p>Your Details:</p>
<div style="padding-left: 50px;">
	<p>E-mail: {{$email}}</p>
	<p>Verification Code: {{$code}}</p>
</div>
<p><strong>Here is your email and verification code. </strong><a href="{{ route('email.verify') }}">click here</a> to continue.</p>