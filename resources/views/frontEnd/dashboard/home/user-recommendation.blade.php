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

        <h4 class="text-center pt-5 pb-2">Your Recommendation below here:</h4>

        @if($recommendationMark >= 91 && $recommendationMark <= 100)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '91_to_100')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 81 && $recommendationMark <= 90)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '81_to_90')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 71 && $recommendationMark <= 80)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '71_to_80')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 61 && $recommendationMark <= 70)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '61_to_70')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 51 && $recommendationMark <= 60)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '51_to_60')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 41 && $recommendationMark <= 50)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '41_to_50')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 31 && $recommendationMark <= 40)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '31_to_40')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 21 && $recommendationMark <= 30)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '21_to_30')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 11 && $recommendationMark <= 20)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '11_to_20')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>

        @elseif($recommendationMark >= 0 && $recommendationMark <= 10)
        <div class="alert alert-success alert-dismissible">
          @php  
            $recommendMsg = App\Model\Recommendation::where('percentageRange', '1_to_10')->first();
          @endphp 
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>{{$recommendMsg->recommendation}}</strong>
        </div>
        @endif
        
    </div>
</main>
@endsection