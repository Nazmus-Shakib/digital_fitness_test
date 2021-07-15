@extends('frontEnd.master')

@section('title','User | Registration')

@push('css')
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/company/css/style.css') }}">
@endpush

@section('content')

  @guest
    <!-- Navbar -->
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

    <form id="regForm" method="POST" action="{{ route('user.info.store') }}" >
        @csrf
      <h1>Your Information:</h1>
      <!-- One "tab" for each step in the form: -->

      <div class="tab">
        <b>Please Enter Your Full Name</b>
        <p><input type="text" name="name" oninput="this.className = ''" placeholder="full name" value="{{ old('name') }}" /></p>
        <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
      </div>

      <div class="tab">
        <b>Please Enter Your Email</b>
        <p><input type="email" name="email" oninput="this.className = ''" placeholder="email" value="{{ old('email') }}" /></p>
        <strong class="text-danger"> {{$errors->has('email') ? $errors->first('email') : '' }} </strong>
      </div>

      <div class="tab">
        <b>Please Enter Your Phone Number</b>
        <p><input type="text" name="phone" oninput="this.className = ''" placeholder="phone number" value="{{ old('phone') }}" /></p>
        <strong class="text-danger"> {{$errors->has('phone') ? $errors->first('phone') : '' }} </strong>
      </div>

      <div class="tab">
        <b>Please Enter Your Title</b>
        <p>
            <select class="form-control" name="title">
                <option value="">please select title</option>
                <option value="tan_sri" @if(old('title') == 'tan_sri') selected="selected" @endif>Tan Sri</option>
                <option value="puan_sri" @if(old('title') == 'puan_sri') selected="selected" @endif>Puan Sri</option>
                <option value="dato_seri" @if(old('title') == 'dato_seri') selected="selected" @endif>Dato' Seri</option>
                <option value="datin_seri" @if(old('title') == 'datin_seri') selected="selected" @endif>Datin Seri</option>
                <option value="dato" @if(old('title') == 'dato') selected="selected" @endif>Dato</option>
                <option value="datuk" @if(old('title') == 'datuk') selected="selected" @endif>Datuk</option>
                <option value="datin" @if(old('title') == 'datin') selected="selected" @endif>Datin</option>
                <option value="prof" @if(old('title') == 'prof') selected="selected" @endif>Prof</option>
                <option value="dr" @if(old('title') == 'dr') selected="selected" @endif>Dr</option>
                <option value="ir" @if(old('title') == 'ir') selected="selected" @endif>Ir</option>
                <option value="mr" @if(old('title') == 'mr') selected="selected" @endif>Mr</option>
                <option value="mrs" @if(old('title') == 'mrs') selected="selected" @endif>Mrs</option>
                <option value="ms" @if(old('title') == 'ms') selected="selected" @endif>Ms</option>
            </select>
        </p>
        <strong class="text-danger"> {{$errors->has('title') ? $errors->first('title') : '' }} </strong>
      </div>

      <div class="tab">
        <b>Please Enter Your Designation</b>
        <p><input type="text" name="designation" oninput="this.className = ''" placeholder="designation" value="{{ old('designation') }}" /></p>
        <strong class="text-danger"> {{$errors->has('designation') ? $errors->first('designation') : '' }} </strong>
      </div>

      <div class="tab">
        <b>How did you get to know about Grants Access Processing (GAP) Diagnostic?</b>
        <p>
            <select class="form-control" name="grants_access">
                <option value="">please select grants access</option>
                <option value="daily_website" @if(old('grants_access') == 'daily_website') selected="selected" @endif>The SME Daily Website</option>
                <option value="masterclass_website" @if(old('grants_access') == 'masterclass_website') selected="selected" @endif>SME Masterclass Website</option>
                <option value="direct_mailer" @if(old('grants_access') == 'direct_mailer') selected="selected" @endif>Direct Mailer(EDM)</option>
                <option value="friends_colleagues" @if(old('grants_access') == 'friends_colleagues') selected="selected" @endif>Friends or Colleagues</option>
                <option value="social_media" @if(old('grants_access') == 'social_media') selected="selected" @endif>Social Media</option>
                <option value="media_coverage" @if(old('grants_access') == 'media_coverage') selected="selected" @endif>Media Coverage</option>
                <option value="events" @if(old('grants_access') == 'events') selected="selected" @endif>Events</option>
            </select>
        </p>
        <strong class="text-danger"> {{$errors->has('grants_access') ? $errors->first('grants_access') : '' }} </strong>
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

      </div>
    </form>
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

@endsection


@push('js')
    <script src="{{ asset('public/frontEnd/company/js/custom.js') }}"></script>
@endpush
