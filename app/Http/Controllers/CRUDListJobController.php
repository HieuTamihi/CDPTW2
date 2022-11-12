<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Job_posting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Job_posting\StoreRequest;
use App\Http\Requests\Job_posting\UpdateRequest;

class CRUDListJobController extends Controller
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
<<<<<<< HEAD
        return view('DashboardTemplate.Job_postings.list_post_by_id',compact('result'));
=======
        return view('DashboardTemplate.Job_postings.list_post_by_id', compact('result'));
>>>>>>> origin/change_password_employer
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardTemplate.Job_postings.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Job_posting::create([
            'employer_id' => Auth::user()->employer->id,
<<<<<<< HEAD
            'title'=>$request->title,
=======
            'title' => $request->title,
>>>>>>> origin/change_password_employer
            'experience' => $request->experience,
            'type' => $request->type,
            'skill' => $request->skill,
            'required' => $request->required,
<<<<<<< HEAD
            'salary' => $request->salary,  
            'token' => md5(Auth::user()->id),
        ]);
        return redirect()->route('CRUDJobByEmployer.index')->with('notify','Add news is successfully');
=======
            'salary' => $request->salary,
            'token' => md5(Auth::user()->id),
        ]);
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Add news is successfully');
>>>>>>> origin/change_password_employer
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
<<<<<<< HEAD
        $getstatus = DB::table('recruitments')->where('jobposting_id','=',$id);
        return view('DashboardTemplate.Job_postings.detail_post',compact('show'));
=======
        $getstatus = DB::table('recruitments')->where('jobposting_id', '=', $id);
        return view('DashboardTemplate.Job_postings.detail_post', compact('show'));
>>>>>>> origin/change_password_employer
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
<<<<<<< HEAD
        return view('DashboardTemplate.Job_postings.edit_post',compact('show'));
=======
        return view('DashboardTemplate.Job_postings.edit_post', compact('show'));
>>>>>>> origin/change_password_employer
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $job = Job_posting::find($id);
        $job->update($request->all());
<<<<<<< HEAD
        return redirect()->route('CRUDJobByEmployer.index')->with('notify','Update Susscessfully');
=======
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Update Susscessfully');
>>>>>>> origin/change_password_employer
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $token = md5(Auth::user()->employer->id);
        DB::table('Job_postings')
<<<<<<< HEAD
        ->where([
            'id' => $id,
            'token' => $token])
        ->delete();
        return redirect()->route('CRUDJobByEmployer.index')->with('notify','Delete Susscessfully');
=======
            ->where([
                'id' => $id,
                'token' => $token
            ])
            ->delete();
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Delete Susscessfully');
>>>>>>> origin/change_password_employer
    }
}
