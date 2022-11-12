<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use Illuminate\Support\Facades\Auth;
use App\Models\Job_posting;

class viewController extends Controller
{
    public function getListPostByID()
    {
       
    }
    public function executeAdd(Request $request)
    {
        Job_posting::create([
            'user_id' => $request->Auth::user()->employer->id,
            'title'=>$request->title,
            'experience' => $request->experience,
            'type' => $request->type,
            'skill' => $request->skill,
            'required' => $request->required,
            'salary' => $request->salary  
        ]);
        return redirect()->resource('view_employer');
    }
    public function showPostByID($id)
    {
        $show = Job_posting::find($id);
        return view('DashboardTemplate.Employer.detail_post',compact('show'));
    }
    public function showEPostByID($id)
    {
        $show = Job_posting::find($id);
        return view('DashboardTemplate.Employer.edit_post',compact('show'));
    }
}
