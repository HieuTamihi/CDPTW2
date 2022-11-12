<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Job_posting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Job_posting\StoreRequest;
use App\Http\Requests\Job_posting\UpdateRequest;
<<<<<<< HEAD
=======
use App\Models\Recruitment;
>>>>>>> origin/detail_page

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
<<<<<<< HEAD
        return view('DashboardTemplate.Job_postings.list_post_by_id',compact('result'));
=======
        return view('DashboardTemplate.Job_postings.list_post_by_id', compact('result'));
>>>>>>> origin/change_password_employer
=======
        return view('DashboardTemplate.Job_postings.list_post_by_id', compact('result'));
>>>>>>> origin/detail_page
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
<<<<<<< HEAD
            'title'=>$request->title,
=======
            'title' => $request->title,
>>>>>>> origin/change_password_employer
=======
            'title' => $request->title,
>>>>>>> origin/detail_page
            'experience' => $request->experience,
            'type' => $request->type,
            'skill' => $request->skill,
            'required' => $request->required,
<<<<<<< HEAD
<<<<<<< HEAD
            'salary' => $request->salary,  
            'token' => md5(Auth::user()->id),
        ]);
        return redirect()->route('CRUDJobByEmployer.index')->with('notify','Add news is successfully');
=======
=======
>>>>>>> origin/detail_page
            'salary' => $request->salary,
            'token' => md5(Auth::user()->id),
        ]);
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Add news is successfully');
<<<<<<< HEAD
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/detail_page
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
<<<<<<< HEAD
        $getstatus = DB::table('recruitments')->where('jobposting_id','=',$id);
        return view('DashboardTemplate.Job_postings.detail_post',compact('show'));
=======
        $getstatus = DB::table('recruitments')->where('jobposting_id', '=', $id);
        return view('DashboardTemplate.Job_postings.detail_post', compact('show'));
>>>>>>> origin/change_password_employer
=======
        $list_recruitmet = $show->customers()->paginate(3);
        $getstatus = DB::table('recruitments')->where('jobposting_id', '=', $id);
        return view('DashboardTemplate.Job_postings.detail_post', compact('show','list_recruitmet'));
>>>>>>> origin/detail_page
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
<<<<<<< HEAD
        return view('DashboardTemplate.Job_postings.edit_post',compact('show'));
=======
        return view('DashboardTemplate.Job_postings.edit_post', compact('show'));
>>>>>>> origin/change_password_employer
=======
        return view('DashboardTemplate.Job_postings.edit_post', compact('show'));
>>>>>>> origin/detail_page
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
<<<<<<< HEAD
        return redirect()->route('CRUDJobByEmployer.index')->with('notify','Update Susscessfully');
=======
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Update Susscessfully');
>>>>>>> origin/change_password_employer
=======
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Update Susscessfully');
>>>>>>> origin/detail_page
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
<<<<<<< HEAD
        ->where([
            'id' => $id,
            'token' => $token])
        ->delete();
        return redirect()->route('CRUDJobByEmployer.index')->with('notify','Delete Susscessfully');
=======
=======
>>>>>>> origin/detail_page
            ->where([
                'id' => $id,
                'token' => $token
            ])
            ->delete();
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Delete Susscessfully');
<<<<<<< HEAD
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/detail_page
    }
}
