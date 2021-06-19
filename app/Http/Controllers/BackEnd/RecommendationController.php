<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Recommendation;
use Session;

class RecommendationController extends Controller
{
        public function index(){
        //$data['countRecommendation'] = Recommendation::count();
        $data['allData'] = Recommendation::all();
        return view('backEnd.recommendation.view-recommendation', $data);
    }

    public function create(){
        return view('backEnd.recommendation.add-recommendation');
    }

    public function store(Request $request){
        $this->validate($request, [
            'percentageRange' => 'required|unique:recommendations,percentageRange',
        ]);

        $data = new Recommendation();
        $data->percentageRange = $request->percentageRange;        
        $data->recommendation = $request->recommendation;        
        $data->save();
        Session::flash('message', 'Recommendation Added Successfully');
        return redirect()->route('recommendation.view');
    }

    public function edit($id){
        $editData = Recommendation::find($id);
        return view('backEnd.recommendation.edit-recommendation', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Recommendation::find($id);

        $this->validate($request, [
            'percentageRange' => 'required|unique:recommendations,percentageRange,'.$data->id,
        ]);

        $data->percentageRange = $request->percentageRange;        
        $data->recommendation = $request->recommendation;
        $data->save();
        Session::flash('message', 'Recommendation Updated Successfully');
        return redirect()->route('recommendation.view');
    }

    public function delete($id){
        $recommendation = Recommendation::find($id);
        $recommendation->delete();
        Session::flash('message', 'Recommendation Deleted Successfully');
        return redirect()->route('recommendation.view');
    }
}
