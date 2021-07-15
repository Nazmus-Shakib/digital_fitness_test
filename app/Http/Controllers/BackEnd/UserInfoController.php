<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Recommendation;
use App\Model\CompanyInfo;
use App\Model\Answer;
use App\User;
use Session;
use Auth;
use DB;

class UserInfoController extends Controller
{
    public function activeView()
    {
    	$users = User::where('user_type','user')->where('status',1)->orderBy('id','desc')->get();
    	return view('backEnd.users_info.active-user',compact('users'));
    }

    public function pendingView()
    {
    	$users = User::where('user_type','user')->where('status',0)->orderBy('id','desc')->get();
    	return view('backEnd.users_info.pending-user',compact('users'));
    }

    public function pendingDelete($id)
    {
    	User::find($id)->delete();
    	Session::flash('message','Pending user delete successfully!');
    	return redirect()->back();
    }

    public function companyView($id)
    {
    	$company_info = CompanyInfo::where('user_id',$id)->first();
    	return view('backEnd.users_info.company-info',compact('company_info'));
    }

    public function userRecommend()
    {
        $user_recommends = Answer::selectRaw('user_id')->groupBy('user_id')->orderBy('id','desc')->get();
        return view('backEnd.users_recommend.view-recommend',compact('user_recommends'));
    }

    public function recommendDetails($section_id, $user_id)
    {
        $recommendation    = Answer::selectRaw('section_id,sum(answers.marks) as marks')
            ->where('section_id', $section_id)
            ->where('user_id', $user_id)
            ->groupBy('section_id')->first();

        $questionData = DB::table('answers')
            ->select(DB::raw('sum(questions.weightage) as weightage'))
            ->join('questions', 'answers.question_id', '=', 'questions.id')
            ->where('answers.section_id', $section_id)
            ->where('answers.user_id', $user_id)
            ->get();

        $value = json_decode($questionData);
        $questionTotalMark = $value[0]->weightage;

        $section_wise_recom = Recommendation::where('section_id', $section_id)->get();


        return view('backEnd.users_recommend.user-recommend', compact('recommendation', 'questionTotalMark', 'section_wise_recom'));
    }
}
