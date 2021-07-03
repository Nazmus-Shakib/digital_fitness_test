@extends('backEnd.master')

@section('title')
Add | Recommendation
@endsection

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-6"></div>
  <div class="col-sm-6">
    <a href="{{route('recommendation.view')}}" class="btn btn-primary float-right btn-sm"><i class="fa fa-list"></i> Manage Recommendation</a>
  </div>
</div><br>
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-11 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">
                      Add Recommendation!
                  </h1>
                </div>

                <p class="text-danger"><b>Note:</b> <br> <b>1. Enter Only The Last Number of a Range in Range Input. <br> 2. Range Last Number Must Start From 10 & End at 100. <br> 3. The Interval Between a Range Must Be 10. </b> </p>

                <form class="user" method="POST" action="{{ route('recommendation.save') }}" id="myForm" enctype="multipart/form-data">
                   @csrf

                 <div class="add_item">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label class="col-form-label">Section</label>
                        <select name="section" class="form-control">
                          <option value="">Please select</option>
                          @foreach($sections as $section)
                          <option value="{{ $section->id }}">{{ $section->name }}</option>
                          @endforeach
                        </select>
                        <strong class="text-danger"> {{$errors->has('section') ? $errors->first('section') : '' }} </strong>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <label class="col-form-label">Recommendation :</label><br>
                        <input type="text" name="recommendation[]" class="form-control" placeholder="Enter recommendation">
                        @if ($errors->has('recommendation.*'))
                          <span class="help-block">
                              <strong class="text-danger">{{ $errors->first('recommendation.*') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="col-sm-2">
                        <label class="col-form-label">Range :</label><br>
                        <input type="number" name="range[]" class="form-control" placeholder="Last Num">
                        @if ($errors->has('range.*'))
                          <span class="help-block">
                              <strong class="text-danger">{{ $errors->first('range.*') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group col-sm-1" style="padding: 35px;">
                        <span class="btn btn-success addeventmore mt-1"><i class="fa fa-plus-circle"></i></span>
                      </div>
                    </div>
                 </div>
                  <div class="form-group row">
                      <div class="col-sm-12 mt-3">
                        <input type="submit" name="btn" class="btn btn-primary btn-user btn-block" value="Save Recommendation">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Add Another Section -->
<div style="visibility: hidden;">
  <div class="whole_extra_item_add" id="whole_extra_item_add">
    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
      <div class="form-row">
        <div class="col-sm-8">
          <label class="col-form-label">Recommendation :</label><br>
          <input type="text" name="recommendation[]" class="form-control" placeholder="Enter recommendation">
          @if ($errors->has('recommendation.*'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('recommendation.*') }}</strong>
            </span>
          @endif
        </div>
        <div class="col-sm-2">
          <label class="col-form-label">Range :</label><br>
          <input type="number" name="range[]" class="form-control" placeholder="Last Num">
          @if ($errors->has('range.*'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('range.*') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-sm-2">
          <div class="form-row">
            <div class="col-sm-12">
              <label class="col-form-label ml-3">Options :</label>
            </div>
            <span class="btn  btn-success addeventmore ml-3"><i class="fa fa-plus-circle"></i></span>
            <span class="btn  btn-danger removeeventmore ml-1"><i class="fa fa-minus-circle"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
