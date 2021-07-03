@extends('frontEnd.master')

@section('title')
Business | Type
@endsection

@section('content')

<div class="container">
    <div class="card" style="margin-top: 200px;">
        @php
         $userDetails = App\Model\Answer::where('user_id', auth()->id())->orderBy('id', 'desc')->first();
         $userMonth = $userDetails->created_at->diffInMonths();
        @endphp

        @if($userMonth <  6)
        <div class="card-body" style="text-align: center;">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h3><strong>Sorry! You Can't Take The DFT Within 6 Months</strong></h3>
              <p>Please go back home. <a href="{{ route('user.dashboard') }}">Dashboard</a></p>
            </div>
        </div>
        @else
        <div class="card-body" style="text-align: center;">
            <h3>Please Select Your Appropriate Business Type To Continue The DFT</h3><br>
            <div class="row">
                @foreach($businessTypes as $business)
                <div class="col-md-6">
                    <a href="{{ route('retake.business.questions',$business->id) }}" class="btn btn-info btn-block" style="margin-bottom: 5px; border-radius: 20px;">{{ $business->name }}</a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection