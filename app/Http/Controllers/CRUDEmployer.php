<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Job_posting;
use Illuminate\Support\Facades\Auth;
class CRUDEmployer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->employer->id;
        $getPostByID = Employer::findOrFail($id);
        $result = $getPostByID->jobs;
        return view('DashboardTemplate.Employer.list_post_by_id',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardTemplate.Employer.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id =2;
        Job_posting::create([
            'employer_id' => Auth::user()->id,
            'title'=>$request->title,
            'experience' => $request->experience,
            'type' => $request->type,
            'skill' => $request->skill,
            'required' => $request->required,
            'salary' => $request->salary,  
            'token' => md5(Auth::user()->id),
        ]);
        return redirect()->route('CRUDEmployer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Job_posting::find($id);
        return view('DashboardTemplate.Employer.detail_post',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Job_posting::find($id);
        return view('DashboardTemplate.Employer.edit_post',compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job_posting::find($id);
        $job->update($request->all());
        return redirect()->route('CRUDEmployer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job_posting::destroy($id);
        return redirect()->route('CRUDEmployer.index');
    }
}
