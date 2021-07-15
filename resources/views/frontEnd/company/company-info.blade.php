@extends('frontEnd.master')

@section('title','Company | Info')

@push('css')
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

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

	<form id="regForm" action="{{ route('company.info.store') }}"  method="POST">
		@csrf

		<input type="hidden" name="id" value="{{ $user->id }}">

	  <h1 class="pb-4">Company Info:</h1>

	    @if(Session::get('message'))
	        <div class="alert alert-info alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert">&times;</button>
	          <strong>{{ Session::get('message')}}</strong>
	        </div>
      	@endif
      	@if(Session::get('error'))
	        <div class="alert alert-danger alert-dismissible">
	          <button type="button" class="close" data-dismiss="alert">&times;</button>
	          <strong>{{ Session::get('message')}}</strong>
	        </div>
      	@endif
	  <!-- One "tab" for each step in the form: -->
	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">We would like to know about your business!</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>What is your company registered name?</b>
	    <p><input placeholder="Company Name" oninput="this.className = '' "name="qtn_1" value="{{old('qtn_1')}}"></p>
	    <strong class="text-danger"> {{$errors->has('qtn_1') ? $errors->first('qtn_1') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>How long your company has been operating?</b>
	    <p>
	    	<select class="form-control" name="qtn_2">
	    		<option value="">Please select</option>
	    		<option value="1_year" @if(old('qtn_2') == '1_year') selected="selected" @endif>1 Year</option>
	    		<option value="2_year" @if(old('qtn_2') == '2_year') selected="selected" @endif>2 Year</option>
	    		<option value="3_year" @if(old('qtn_2') == '3_year') selected="selected" @endif>3 Year</option>
	    		<option value="4_year" @if(old('qtn_2') == '4_year') selected="selected" @endif>4 Year</option>
	    		<option value="5_year" @if(old('qtn_2') == '5_year') selected="selected" @endif>5 Year</option>
	    		<option value="6_year" @if(old('qtn_2') == '6_year') selected="selected" @endif>6 Year</option>
	    		<option value="7_year" @if(old('qtn_2') == '7_year') selected="selected" @endif>7 Year</option>
	    		<option value="8_year" @if(old('qtn_2') == '8_year') selected="selected" @endif>8 Year</option>
	    		<option value="9_year" @if(old('qtn_2') == '9_year') selected="selected" @endif>9 Year</option>
	    		<option value="10_year" @if(old('qtn_2') == '10_year') selected="selected" @endif>10 Year</option>
	    		<option value="11_year" @if(old('qtn_2') == '11_year') selected="selected" @endif>11 Year</option>
	    		<option value="12_year" @if(old('qtn_2') == '12_year') selected="selected" @endif>12 Year</option>
	    		<option value="13_year" @if(old('qtn_2') == '13_year') selected="selected" @endif>13 Year</option>
	    		<option value="14_year" @if(old('qtn_2') == '14_year') selected="selected" @endif>14 Year</option>
	    		<option value="15_year" @if(old('qtn_2') == '15_year') selected="selected" @endif>15 Year</option>
	    		<option value="16_year" @if(old('qtn_2') == '16_year') selected="selected" @endif>16 Year</option>
	    		<option value="17_year" @if(old('qtn_2') == '17_year') selected="selected" @endif>17 Year</option>
	    		<option value="18_year" @if(old('qtn_2') == '18_year') selected="selected" @endif>18 Year</option>
	    		<option value="19_year" @if(old('qtn_2') == '19_year') selected="selected" @endif>19 Year</option>
	    		<option value="20_year" @if(old('qtn_2') == '20_year') selected="selected" @endif>20 Year</option>
	    		<option value="21_year" @if(old('qtn_2') == '21_year') selected="selected" @endif>21 Year</option>
	    		<option value="22_year" @if(old('qtn_2') == '22_year') selected="selected" @endif>22 Year</option>
	    		<option value="23_year" @if(old('qtn_2') == '23_year') selected="selected" @endif>23 Year</option>
	    		<option value="24_year" @if(old('qtn_2') == '24_year') selected="selected" @endif>24 Year</option>
	    		<option value="25_year" @if(old('qtn_2') == '25_year') selected="selected" @endif>25 Year</option>
	    		<option value="26_year" @if(old('qtn_2') == '26_year') selected="selected" @endif>26 Year</option>
	    		<option value="27_year" @if(old('qtn_2') == '27_year') selected="selected" @endif>27 Year</option>
	    		<option value="28_year" @if(old('qtn_2') == '28_year') selected="selected" @endif>28 Year</option>
	    		<option value="29_year" @if(old('qtn_2') == '29_year') selected="selected" @endif>29 Year</option>
	    		<option value="30_year" @if(old('qtn_2') == '30_year') selected="selected" @endif>30 Year</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_2') ? $errors->first('qtn_2') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>Where your company located?</b> <br>
	  	<span>State</span>
	  	<p>
	    	<select class="form-control" name="qtn_3">
	    		<option value="">Please select</option>
	    		<option value="kl" @if(old('qtn_3') == 'kl') selected="selected" @endif>KL</option>
	    		<option value="selangor" @if(old('qtn_3') == 'selangor') selected="selected" @endif>Selangor</option>
	    		<option value="perlis" @if(old('qtn_3') == 'perlis') selected="selected" @endif>Perlis</option>
	    		<option value="kedah" @if(old('qtn_3') == 'kedah') selected="selected" @endif>Kedah</option>
	    		<option value="penang" @if(old('qtn_3') == 'penang') selected="selected" @endif>Penang</option>
	    		<option value="perak" @if(old('qtn_3') == 'perak') selected="selected" @endif>Perak</option>
	    		<option value="melaka" @if(old('qtn_3') == 'melaka') selected="selected" @endif>Melaka</option>
	    		<option value="ng_sembilan" @if(old('qtn_3') == 'ng_sembilan') selected="selected" @endif>Ng. Sembilan</option>
	    		<option value="johor" @if(old('qtn_3') == 'johor') selected="selected" @endif>Johor</option>
	    		<option value="pahang" @if(old('qtn_3') == 'pahang') selected="selected" @endif>Pahang</option>
	    		<option value="terengganu" @if(old('qtn_3') == 'terengganu') selected="selected" @endif>Terengganu</option>
	    		<option value="kelantan" @if(old('qtn_3') == 'kelantan') selected="selected" @endif>Kelantan</option>
	    		<option value="sabah" @if(old('qtn_3') == 'sabah') selected="selected" @endif>Sabah</option>
	    		<option value="sarawak" @if(old('qtn_3') == 'sarawak') selected="selected" @endif>Sarawak</option>
	    		<option value="labuan" @if(old('qtn_3') == 'labuan') selected="selected" @endif>Labuan</option>
	    		<option value="putrajaya" @if(old('qtn_3') == 'putrajaya') selected="selected" @endif>Putrajaya</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_3') ? $errors->first('qtn_3') : '' }} </strong><br>
		<span>Postcode</span>
	    <p><input placeholder="Please enter" oninput="this.className = '' "name="qtn_4" value="{{old('qtn_4')}}"></p>
	    <strong class="text-danger"> {{$errors->has('qtn_4') ? $errors->first('qtn_4') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>What type of business your company is?</b>
	    <p>
	    	<select class="form-control" name="qtn_5">
				<option value="">Please select</option>
	    		<option value="solo_proprietor" @if(old('qtn_5') == 'solo_proprietor') selected="selected" @endif>Solo Proprietor</option>
	    		<option value="partnership" @if(old('qtn_5') == 'partnership') selected="selected" @endif>Partnership</option>
	    		<option value="limited_liability_partnership" @if(old('qtn_5') == 'limited_liability_partnership') selected="selected" @endif>Limited Liability Partnership (LLP)</option>
	    		<option value="private_limited_company" @if(old('qtn_5') == 'private_limited_company') selected="selected" @endif>Private Limited Company (sdn bhd)</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_5') ? $errors->first('qtn_5') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>What is your business activity?</b>
	    <p>
	    	<select class="form-control" name="qtn_6">
	    		<option value="">Please select</option>
	    		<option value="agriculture" @if(old('qtn_6') == 'agriculture') selected="selected" @endif>Agriculture</option>
	    		<option value="construction" @if(old('qtn_6') == 'construction') selected="selected" @endif>Construction</option>
	    		<option value="manufacturing" @if(old('qtn_6') == 'manufacturing') selected="selected" @endif>Manufacturing</option>
	    		<option value="mining_and_quarring" @if(old('qtn_6') == 'mining_and_quarring') selected="selected" @endif>Mining and Quarring</option>
	    		<option value="service" @if(old('qtn_6') == 'service') selected="selected" @endif>Service</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_6') ? $errors->first('qtn_6') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>What is your business industry?</b>
	    <p>
	    	<select class="form-control" name="qtn_7">
	    		<option value="">Please select</option>
	    		<option value="aerospace" @if(old('qtn_7') == 'aerospace') selected="selected" @endif>Aerospace</option>
	    		<option value="automotive" @if(old('qtn_7') == 'automotive') selected="selected" @endif>Automotive</option>
	    		<option value="defence" @if(old('qtn_7') == 'defence') selected="selected" @endif>Defence</option>
	    		<option value="food_&_drink" @if(old('qtn_7') == 'food_&_drink') selected="selected" @endif>Food & Drink</option>
	    		<option value="furniture" @if(old('qtn_7') == 'furniture') selected="selected" @endif>Furniture</option>
	    		<option value="general_engineering" @if(old('qtn_7') == 'general_engineering') selected="selected" @endif>General Engineering</option>
	    		<option value="nuclear" @if(old('qtn_7') == 'nuclear') selected="selected" @endif>Nuclear</option>
	    		<option value="oil_&_gas" @if(old('qtn_7') == 'oil_&_gas') selected="selected" @endif>Oil & Gas</option>
	    		<option value="securities" @if(old('qtn_7') == 'securities') selected="selected" @endif>Securities</option>
	    		<option value="space" @if(old('qtn_7') == 'space') selected="selected" @endif>Space</option>
	    		<option value="telecommunication" @if(old('qtn_7') == 'telecommunication') selected="selected" @endif>Telecommunication</option>
	    		<option value="civil_engineering" @if(old('qtn_7') == 'civil_engineering') selected="selected" @endif>Civil Engineering</option>
	    		<option value="textile" @if(old('qtn_7') == 'textile') selected="selected" @endif>Textile</option>
	    		<option value="electrical_&_electronic_engineering" @if(old('qtn_7') == 'electrical_&_electronic_engineering') selected="selected" @endif>Electrical & Electronic Engineering</option>
	    		<option value="industrial_gas_&_turbine" @if(old('qtn_7') == 'industrial_gas_&_turbine') selected="selected" @endif>Industrial Gas & Turbine</option>
	    		<option value="rail" @if(old('qtn_7') == 'rail') selected="selected" @endif>Rail</option>
	    		<option value="marine" @if(old('qtn_7') == 'marine') selected="selected" @endif>Marine</option>
	    		<option value="petrochemical" @if(old('qtn_7') == 'petrochemical') selected="selected" @endif>Petrochemical</option>
	    		<option value="medical" @if(old('qtn_7') == 'medical') selected="selected" @endif>Medical</option>
	    		<option value="maritime_system" @if(old('qtn_7') == 'maritime_system') selected="selected" @endif>Maritime System</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_7') ? $errors->first('qtn_7') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>How many percent of your company equity is owned by Malaysian?</b>
	    <p>
	    	<select class="form-control" name="qtn_8">
	    		<option value="">Please select</option>
	    		<option value="less_than_50%" @if(old('qtn_8') == 'less_than_50%') selected="selected" @endif>Less than 50%</option>
	    		<option value="50%-60%" @if(old('qtn_8') == '50%-60%') selected="selected" @endif>50% to 60%</option>
	    		<option value="more_than_60%" @if(old('qtn_8') == 'more_than_60%') selected="selected" @endif>More than 60%</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_8') ? $errors->first('qtn_8') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>How many paid worker are helping you in your business?</b>
	    <p>
	    	<select class="form-control" name="qtn_9">
	    		<option value="">Please select</option>
	    		<option value="less_than_5" @if(old('qtn_9') == 'less_than_5') selected="selected" @endif>Less than 5</option>
	    		<option value="5-30" @if(old('qtn_9') == '5-30') selected="selected" @endif>5 – 30</option>
	    		<option value="31-75" @if(old('qtn_9') == '31-75') selected="selected" @endif>31 – 75</option>
	    		<option value="more_than_75" @if(old('qtn_9') == 'more_than_75') selected="selected" @endif>More than 75</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_9') ? $errors->first('qtn_9') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>Any staff changes in previous 12 months?</b>
	    <p>
	    	<select class="form-control" name="qtn_10">
	    		<option value="">Please select</option>
	    		<option value="increase" @if(old('qtn_10') == 'increase') selected="selected" @endif>Increase</option>
	    		<option value="decrease" @if(old('qtn_10') == 'decrease') selected="selected" @endif>Decrease</option>
	    		<option value="no_change" @if(old('qtn_10') == 'no_change') selected="selected" @endif>No Change</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_10') ? $errors->first('qtn_10') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>What is the percentage changes on the staff you have?</b>
	    <p>
	    	<select class="form-control" name="qtn_11">
	    		<option value="">Please select</option>
	    		<option value="less_than_30%" @if(old('qtn_11') == 'less_than_30%') selected="selected" @endif>Less than 30%</option>
	    		<option value="30%-50%" @if(old('qtn_11') == '30%-50%') selected="selected" @endif>30%-50%</option>
	    		<option value="more_than_50%" @if(old('qtn_11') == 'more_than_50%') selected="selected" @endif>More than 50%</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_11') ? $errors->first('qtn_11') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>How much is your company’s paid up capital?</b>
	    <p>
	    	<select class="form-control" name="qtn_12">
	    		<option value="">Please select</option>
	    		<option value="less_than_RM50K" @if(old('qtn_12') == 'less_than_RM50K') selected="selected" @endif>Less than RM50K</option>
	    		<option value="more_than_RM50K" @if(old('qtn_12') == 'more_than_RM50K') selected="selected" @endif>More than RM50K</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_12') ? $errors->first('qtn_12') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>How much your company earn last year? (Gross Revenue)</b>
	    <p>
	    	<select class="form-control" name="qtn_13">
	    		<option value="">Please select</option>
	    		<option value="less_than_RM300K" @if(old('qtn_13') == 'less_than_RM300K') selected="selected" @endif>Less than RM300K</option>
	    		<option value="more_than_RM300K" @if(old('qtn_13') == 'more_than_RM300K') selected="selected" @endif>More than RM300K</option>
	    	</select>
		</p>
		<strong class="text-danger"> {{$errors->has('qtn_13') ? $errors->first('qtn_13') : '' }} </strong>
	  </div>

	  <!-- <div class="tab">
	  	<b>Did your company register in SSM or other equivalent bodies?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_11" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_11" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Does your company has a SME Status Certificate from SMECorp?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_13" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_13" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Has your company done the SCORE/M-CORE assessment from SMECorp Malaysia?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_14" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_14" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>Has your company received any grants or incentives from government previously?</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_15" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_15" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div>

	  <div class="tab">
	  	<b>What is the government agency your company receive the grants/incentives from?</b>
	    <p>
	    	<select class="form-control" name="qtn_16">
	    		<option value="">Please select</option>
	    		<option value="mtdc">MTDC</option>
	    		<option value="mdec">MDEC</option>
	    		<option value="smecorp">SMECORP</option>
	    	</select>
		</p>
	  </div> -->

	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">What is your business pain
			point? We are here to listen to you.</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>In the last 24 months, did your company implement any new digital processes or solutions?
		</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_14" value="yes" style="width: 4%" @if(old('qtn_14') == 'yes') checked @endif>
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_14" value="no" style="width: 4%" @if(old('qtn_14') == 'no') checked @endif>
			<label for="no">No</label>
	    </p>
	    <strong class="text-danger"> {{$errors->has('qtn_14') ? $errors->first('qtn_14') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>Did it sustain or grow your business?
		</b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_15" value="yes" style="width: 4%" @if(old('qtn_15') == 'yes') checked @endif>
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_15" value="no" style="width: 4%" @if(old('qtn_15') == 'no') checked @endif>
			<label for="no">No</label>
	    </p>
	    <strong class="text-danger"> {{$errors->has('qtn_15') ? $errors->first('qtn_15') : '' }} </strong>
	  </div>

	  <!-- <div class="tab">
	  	<b>Do you think your company will be increasing its digital transformation efforts or adopt more digital solutions in the next 12 months? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_18" value="yes" style="width: 2%">
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_18" value="no" style="width: 2%">
			<label for="no">No</label>
	    </p>
	  </div> -->

	  <!-- <div class="tab">
	  	<b>What challenges do you encounter in your efforts to digitally transform the business and/or to adopt digital solutions? </b><br><br>
	    <p class="text-center">
	    	<input type="checkbox" id="" name="qtn_19[]" value="1" style="width: 2%">
			<label for="">Company does not see a need for a digital strategy and digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="2" style="width: 2%">
			<label for="">Company does not know how to start planning and implementing a digital strategy</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="3" style="width: 2%">
			<label for="">Lack of a long-term company digital strategy and/or Management support</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="4" style="width: 2%">
			<label for="">Lack of budget</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="5" style="width: 2%">
			<label for="">Hoping to find alternative financing options such as grants and loans to start digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="6" style="width: 2%">
			<label for="">Difficulty and/or confusing procedures to obtain grants and loans to implement more digital transformation initiatives</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="7" style="width: 2%">
			<label for="">Too many government regulations and other types external approvals when implementing digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="8" style="width: 2%">
			<label for="">Lack of internal talents to implement, support and operate the digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_19[]" value="9" style="width: 2%">
			<label for="">Other (Please Specify):</label><br>
	    </p>
	  </div> -->

	  <!-- <div class="tab">
	  	<b>Reason why NOT increasing its digital transformation efforts or adopt more digital solutions in the next 12 months? </b><br><br>
	    <p class="text-center">
	    	<input type="checkbox" id="" name="qtn_20[]" value="1" style="width: 2%">
			<label for="">Lack of budget and/or Reallocation of budget</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="2" style="width: 2%">
			<label for="">Lack of internal talents to implement, support and operate the digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="3" style="width: 2%">
			<label for="">Lack of a long-term company digital strategy and/or Management support</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="4" style="width: 2%">
			<label for="">Too many government regulations and other types external approvals when implementing digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="5" style="width: 2%">
			<label for="">Hoping to find alternative financing options such as grants and loans to start digital transformation</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="6" style="width: 2%">
			<label for="">Difficulty and/or confusing procedures to obtain grants and loans to implement more digital transformation initiatives</label><br>

			<input type="checkbox" id="" name="qtn_20[]" value="7" style="width: 2%">
			<label for="">Other (Please Specify):</label><br>
	    </p>
	  </div> -->

	  <div class="tab">
	  	<h3 class="text-center p-3" style="background-color: #abccca;">We would like to understand your company’s digital infrastructure and readiness</h3><br><br>
	  </div>

	  <div class="tab">
	  	<b>Do you give regular training and development to your workers? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_16" value="yes" style="width: 2%" @if(old('qtn_16') == 'yes') checked @endif>
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_16" value="no" style="width: 2%" @if(old('qtn_16') == 'no') checked @endif>
			<label for="no">No</label>
	    </p>
	    <strong class="text-danger"> {{$errors->has('qtn_16') ? $errors->first('qtn_16') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>Do you always review your workers’ performance in work? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_17" value="yes" style="width: 2%" @if(old('qtn_17') == 'yes') checked @endif>
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_17" value="no" style="width: 2%" @if(old('qtn_17') == 'no') checked @endif>
			<label for="no">No</label>
	    </p>
	    <strong class="text-danger"> {{$errors->has('qtn_17') ? $errors->first('qtn_17') : '' }} </strong>
	  </div>

	  <div class="tab">
	  	<b>Do you always try to improve your employees’ engagement? </b><br><br>
	    <p class="text-center">
	    	<input type="radio" id="yes" name="qtn_18" value="yes" style="width: 2%" @if(old('qtn_18') == 'yes') checked @endif>
			<label for="yes">Yes</label><br>
			<input type="radio" id="no" name="qtn_18" value="no" style="width: 2%" @if(old('qtn_18') == 'no') checked @endif>
			<label for="no">No</label>
	    </p>
	    <strong class="text-danger"> {{$errors->has('qtn_18') ? $errors->first('qtn_18') : '' }} </strong>
	  </div>

	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	    </div>
	  </div>

	  <!-- Circles which indicates the steps of the form: -->
	  <div style="text-align:center;margin-top:40px;">
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <!-- <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>	     -->
	  </div>
	</form>
@endsection


@push('js')
	<script src="{{ asset('public/frontEnd/company/js/custom.js') }}"></script>
@endpush
