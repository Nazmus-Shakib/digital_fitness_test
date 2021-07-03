@extends('frontEnd.dashboard.app')

@section('title')
User | Recommendation
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">Result & Recommendation</li>
        </ol>
        <h3 class="text-center">Your Achieved Marks: </h3><br>
        <p style="display: none;">{{ $floatMark = ($recommendation->marks / $questionTotalMark)*100 }}</p>
        <p style="display: none;">{{ $recommendationMark = intval($floatMark) }}</p>

        <table class="table table-bordered" width="100%">
        	<tr>
        		<th>SL</th>
	        	<th>Section</th>
	        	<th>Mark</th>
	        	<th>Percentage</th>
        	</tr>
        	@php $key = 0; @endphp
        	<tr>
        		<td>{{ $key+1 }}</td>
        		<td>{{ $recommendation['section']['name'] }}</td>
            <td>{{ $recommendation->marks }} / {{$questionTotalMark}}</td>
            <td>{{ $recommendationMark }}%</td>
        	</tr>
        </table>       

        <h4 class="text-center pt-5 pb-2">Recommendation For You Below Here:</h4>

        @foreach($section_wise_recom as $recom)

        @if($recommendationMark >= 91 && $recommendationMark <= 100)
          @if($recom->range == 100) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 81 && $recommendationMark <= 90)
          @if($recom->range == 90) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 71 && $recommendationMark <= 80)
          @if($recom->range == 80) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 61 && $recommendationMark <= 70)
          @if($recom->range == 70) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 51 && $recommendationMark <= 60)
          @if($recom->range == 60) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 41 && $recommendationMark <= 50)
          @if($recom->range == 50) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 31 && $recommendationMark <= 40)
          @if($recom->range == 40) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 21 && $recommendationMark <= 30)
          @if($recom->range == 30) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 11 && $recommendationMark <= 20)
          @if($recom->range == 20) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @elseif($recommendationMark >= 0 && $recommendationMark <= 10)
          @if($recom->range == 10) 
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"></button>
              <h5 class="text-center"><strong>{{$recom->recommendation}}</strong></h5>
            </div>
          @endif
        @endif

        @endforeach

    </div>
</main>
@endsection