@extends('backEnd.master')

@section('title')
Edit | Recommendation
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
      <div class="col-xl-9 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      Edit Recommendation
                    </h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('recommendation.update', $editData->id) }}">
                     @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Percentage:</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="percentageRange">
                          <option value="">Please select</option>
                          <option value="1_to_10" {{($editData->percentageRange == '1_to_10') ? "selected":""}}>For range 1 to 10</option>
                          <option value="11_to_20" {{($editData->percentageRange == '11_to_20') ? "selected":""}}>For range 11 to 20</option>
                          <option value="21_to_30" {{($editData->percentageRange == '21_to_30') ? "selected":""}}>For range 21 to 30</option>
                          <option value="31_to_40" {{($editData->percentageRange == '31_to_40') ? "selected":""}}>For range 31 to 40</option>
                          <option value="41_to_50" {{($editData->percentageRange == '41_to_50') ? "selected":""}}>For range 41 to 50</option>
                          <option value="51_to_60" {{($editData->percentageRange == '51_to_60') ? "selected":""}}>For range 51 to 60</option>
                          <option value="61_to_70" {{($editData->percentageRange == '61_to_70') ? "selected":""}}>For range 61 to 70</option>
                          <option value="71_to_80" {{($editData->percentageRange == '71_to_80') ? "selected":""}}>For range 71 to 80</option>
                          <option value="81_to_90" {{($editData->percentageRange == '81_to_90') ? "selected":""}}>For range 81 to 90</option>
                          <option value="91_to_100" {{($editData->percentageRange == '91_to_100') ? "selected":""}}>For range 91 to 100</option>
                        </select>
                        <strong class="text-danger"> {{$errors->has('percentageRange') ? $errors->first('percentageRange') : '' }} </strong>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Recommendation:</label>
                      <textarea name="recommendation" id="" rows="8" class="col-sm-9 form-control">{{$editData->recommendation}}</textarea>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
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

@endsection
