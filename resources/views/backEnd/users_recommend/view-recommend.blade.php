@extends('backEnd.master')

@section('title')
View | Section
@endsection

@section('content')
<div class="card shadow mb-4">
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Sections</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Sl No</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Sections</th>
        </tr>
      </tfoot>
      <tbody>
        <?php $i=1;  ?>
        @foreach($user_recommends as $recommend)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $recommend['user']['name'] }}</td>
          <td>{{ $recommend['user']['email'] }}</td>
          @php
          $section_wises = App\Model\Answer::selectRaw('section_id')->where('user_id',$recommend->user_id)->groupBy('section_id')->get();
          @endphp
          <td>
            <table class="table table-bordered">
            @foreach($section_wises as $section)
              <tr>
                <td>{{ $section['section']['name'] }}</td>

                <td width="25%">
                  <a href="{{ route('users.recommend.details',[$section->section_id,$recommend->user_id]) }}" class="btn btn-info btn-sm" title="View Recommend">
                    <i class="fa fa-eye"></i>
                  </a>
                </td>
              </tr>
            @endforeach
            </table>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@endsection
