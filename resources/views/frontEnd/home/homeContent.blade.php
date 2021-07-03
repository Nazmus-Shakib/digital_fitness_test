@extends('frontEnd.master')

@section('title')
Home Page
@endsection

@section('content')
	@guest
		<!-- navbar -->
		<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
				<a class="navbar-brand" href="{{ route('frontEnd.home') }}">IINFIN SME</a>
				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> -->
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('frontEnd.home') }}">Home</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="container" id="firstMessage">
			<div class="pt-3"> 
				<h2 class="text-center pb-2">DIGITAL FITNESS TEST</h2>
				<p>This FREE service is part of IINFIN’s SME outreach program to complement the government’s initiatives to encourage SMEs to digitize their businesses through process transformation and adoption of digital solutions.</p>
				<ul>
					The objective of the DFT program is to help Malaysian SMEs:-
					<li>identify if they meet selected grants’ basic criteria</li>
					<li>propose a list of pre-approved and/or partner vendors based on SMEs requirements</li>
					<li>advise and assist SMEs as they apply the relevant grants or incentives</li>
				</ul>
				<p>This diagnostic takes approximately 5-10 minutes to complete.</p>
				<p>At the end of the DFT, SMEs will get a DFT score and a DFT recommendation. The DFT report is currently only available in English language. We look forward to providing the report in Malay and Chinese in the near future.</p>
			</div>

			<div>
				<h5>IMPORTANT:</h5>
				<ol>
					IINFIN SME undertakes to:-
					<li>NOT asking for your company’s detailed financial information and business plans.</li>
					<li>NOT to share the information provided in this GAP Diagnostic submission without prior approval from the company representative provided in this submission.</li>
					<li>IINFIN SME is NOT a SME Loan Consultancy company.  If you require SME Loan Assistance, you will get the loan programs available based on your replies in the Digital Fitness Test.</li>
				</ol>
			</div>

			<div>
				<p>Click on “NEXT” to proceed</p>
				<div class="d-flex">
					<button type="button" class="btn btn-danger btn-block mr-2">EXIT</button>
					<button type="submit" onclick="handleMessage(true)" class="btn btn-success btn-block ml-2">NEXT</button>
				</div>
			</div>
		</div>

		<div class="container">
		    <div class="p-4">
		    	<div class="text-center">
			      @if(Session::get('error'))
			        <div class="alert alert-danger alert-dismissible">
			          <button type="button" class="close" data-dismiss="alert">&times;</button>
			          <strong>{{ Session::get('error')}}</strong>
			        </div>
			      @endif
			    </div>

		        <div class="text-center" id="secondMessage" style="padding-top: 200px">
					<h2 class="pb-4">Start Your Digitalize Journey Now!!!</h2>
		            <a href="{{ route('user.info') }}" class="btn btn-info btn-block">Get Started</a>
		            <p class="pt-2">Already have an account? <a href="{{ route('login') }}">Login</a></p>
		        </div>
		    </div>
		</div>
	@else
		<div class="container">
	     <div class="card" style="margin-top: 200px;">
	       <div class="card-header">
	        <div class="alert alert-danger alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert"></button>
	          <strong>Sorry! You are already registered.</strong>
	        </div>
	       </div>
	     </div>
	   </div>
	@endguest

<script>
	document.getElementById("firstMessage").style.display = 'block';
	document.getElementById("secondMessage").style.display = 'none';

	function handleMessage(msg) {
		if(msg == true) {
			document.getElementById("secondMessage").style.display = 'block';
            document.getElementById("firstMessage").style.display = 'none';
		}
	}
</script>

@endsection