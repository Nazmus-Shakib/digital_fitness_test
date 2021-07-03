@extends('backEnd.master')

@section('title')
Details | Recommendation
@endsection

@section('content')
<div class="card shadow mb-4">
<div class="card-body">
  <div>
    <a href="{{route('recommendation.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage Recommendation List</a>
  </div><br><br>
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Recommendation Details</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
        @foreach($details as $key => $recom)
        <tr class="text-center">
          <td width="30%">
            <b>{{ $key+1 }}. Recommendation - Range Last Number</b>
          </td>
          <td width="50%">
            <span>{{ $key+1 }}. {{ $recom->recommendation }}</span> - <b>{{ $recom->range }}</b>
          </td>
        </tr>
        @endforeach
      </table>
      </div>
    </div>
  </div>
</div>
@endsection