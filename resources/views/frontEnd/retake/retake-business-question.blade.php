@extends('frontEnd.master')

@section('title','Company | Info')

@push('css')
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

@section('content')

	@php
     $userDetails = App\Model\Answer::where('user_id', auth()->id())->orderBy('id', 'desc')->first();
     $userMonth = $userDetails->created_at->diffInMonths();
    @endphp

    @if($userMonth <  6)
	    <div class="card" style="margin-top: 200px;">
		    <div class="card-body" style="text-align: center;">
		        <div class="alert alert-danger alert-dismissible">
		          <button type="button" class="close" data-dismiss="alert"></button>
		          <strong>Sorry! You Can't Take The DFT Within 6 Months</strong>
		          <p>Please go back home. <a href="{{ route('user.dashboard') }}">Dashboard</a></p>
		        </div>
		    </div>
		</div>
    @else

    @if($questionCount>0)
		<form id="regForm" action="{{ route('retake.business.questions.store') }}"  method="POST">
			@csrf

		  <!-- One "tab" for each step in the form: -->
			@foreach($questions as $question)
			  <div class="tab">
			  	<h3 class="pb-4 text-center"><u>Please Answer All The Questions</u></h3>
			  	<span class="text-center">{{ $question->name }}</span><br><br>
			    <p class="text-center">
			    	<input type="radio" id="yes" name="answer[{{ $question->id }}]" value="1" style="width: 2%">
					<label for="yes">Yes</label><br>
					<input type="radio" id="no" name="answer[{{ $question->id }}]" value="0" style="width: 2%">
					<label for="no">No</label>
			    </p>
			  </div>
		  	@endforeach

		<div class="tab">
			<h3 class="pb-4 text-center"><u>Please Read Carefully!!!</u></h3>
			<p>By clicking on the "Submit" button, I, for and on behalf of myself and the Company named in this submission hereby confirm to have read, understood and agreed to:</p>
			<ul>
				<li>Submit to IINFIN SME all the information on this form.</li>
				<li>Consent to IINFIN SME collecting, using and disclosing the given contact details to provide me / us / the Company with information via call, text, and/or email about any products, services, offers and events of IINFIN SME that in IINFIN SME opinion may be of interest to me / us/ the Company, or to contact me / us / the Company regarding this form or to assist in completing this form if it is incomplete or not submitted.</li>
			</ul>
		</div>

		  	@if(Session::has('error'))
		  		<strong class="text-danger" style="padding-left: 400px">{{ Session::get('error') }}</strong>
		  	@endif

		  <div style="overflow:auto;">
		    <div style="float:right;">
		      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
		      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
		    </div>
		  </div>


		  <!-- Circles which indicates the steps of the form: -->
		  <div style="text-align:center;margin-top:40px;">
		  	@for ($i=0; $i < $questionCount ; $i++) 
		    <span class="step"></span>
		    @endfor	  
			<span class="step"></span>  
		  </div>
		  
		</form>
	@else
	<div class="card">
		<div class="card-header">
			<h3 class="text-center text-danger">Sorry! no question available here.</h3>
		</div>
	</div>
	@endif

  @endif
@endsection


@push('js')
	<script src="{{ asset('public/frontEnd/company/js/custom.js') }}"></script>
@endpush