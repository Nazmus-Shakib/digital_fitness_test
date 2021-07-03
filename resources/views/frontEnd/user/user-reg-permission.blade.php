@extends('frontEnd.master')

@section('title')
User | Permission
@endsection

@section('content')
<!-- navbar -->
		<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
				<a class="navbar-brand" href="{{ route('frontEnd.home') }}">IINFIN SME</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('frontEnd.home') }}">Home</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

<div class="container">
    <div class="card" style="margin-top: 200px;">
      <div class="text-center">
        @if(Session::get('message'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ Session::get('message')}}</strong>
          </div>
        @endif
      </div>
        <div class="card-body text-center">
            <div style="width: 90%; margin: auto;">
              <h4 style="color: #9f14b9">Thank you for taking the time to participate in the Digital Fitness Test (DFT).  Please wait as we generate your score. </h4>
              <p>Please click on the link below to get a confirmation email from hello@iinfin.com for your login information.</p>
              <h5>Please <a href="{{ route('user.upate') }}">Click Here</a></h5>
            </div>
        </div>
    </div>
</div>
@endsection