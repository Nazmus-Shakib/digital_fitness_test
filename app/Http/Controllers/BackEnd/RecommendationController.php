<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecommendationRequest;
use Illuminate\Http\Request;
use App\Model\Recommendation;
use App\Model\Section;
use Session;

class RecommendationController extends Controller
{
    public function index()
    {
        $recommendations = Recommendation::select('section_id')->groupBy('section_id')->get();
        return view('backEnd.recommendation.view-recommendation',compact('recommendations'));
    }

    public function create()
    {
        $sections = Section::orderBy('id','desc')->get();
        return view('backEnd.recommendation.add-recommendation',compact('sections'));
    }

    public function store(RecommendationRequest $request)
    {
        $countRange = count($request->range);

        if ($countRange != NULL) {
            for ($i=0; $i < $countRange; $i++) {
                $data = new Recommendation();
                $data->section_id     = $request->section;
                $data->recommendation = $request->recommendation[$i];
                $data->range          = $request->range[$i];
                $data->save();
            }
        }

        Session::flash('message','Recommendation save successfully!');
        return redirect()->route('recommendation.view');
    }

    public function edit($section_id)
    {
        $editRecommendation = Recommendation::where('section_id',$section_id)->get();
        $sections = Section::orderBy('id','desc')->get();
        return view('backEnd.recommendation.edit-recommendation',compact('editRecommendation','sections'));
    }

    public function update(RecommendationRequest $request)
    {
        if ($request->range !== NULL) {
            Recommendation::where('section_id',$request->section_id)->delete();

            $countRange = count($request->range);
            for ($i=0; $i < $countRange; $i++) { 
                $data = new Recommendation();
                $data->section_id     = $request->section;
                $data->recommendation = $request->recommendation[$i];
                $data->range          = $request->range[$i];
                $data->save();
            }

        }else{
            Session::flash('error','Sorry! You Do Not Select Any Item');
            return redirect()->back();
        }

        Session::flash('message','Recommendation Saved Successfully!');
        return redirect()->route('recommendation.view');
    }

    public function delete($section_id)
    {
        Recommendation::where('section_id',$section_id)->delete();
        Session::flash('message','Recommendation Deleted Successfully!');
        return redirect()->route('recommendation.view');
    }

    public function details($section_id)
    {
        $details = Recommendation::where('section_id',$section_id)->get();
        return view('backEnd.recommendation.details-recommendation',compact('details'));
    }
}
