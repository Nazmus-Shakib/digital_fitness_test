@extends('frontEnd.master')

@section('title')
Business | Type
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
        <div class="card-body" style="text-align: center;">
            <h3>Please Select Your Appropriate Business Type To Continue The DFT</h3><br>
            <div class="row">
                @foreach($businessTypes as $business)
                <div class="col-md-6">
                    <a href="{{ route('business.wise.questions',$business->id) }}" class="btn btn-info btn-block" style="margin-bottom: 5px; border-radius: 20px;">{{ $business->name }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection