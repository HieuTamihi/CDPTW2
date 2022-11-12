<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Job_posting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Job_posting\StoreRequest;
use App\Http\Requests\Job_posting\UpdateRequest;
use App\Models\Recruitment;

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
        return view('DashboardTemplate.Job_postings.list_post_by_id', compact('result'));
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
            'title' => $request->title,
            'experience' => $request->experience,
            'type' => $request->type,
            'skill' => $request->skill,
            'required' => $request->required,
            'salary' => $request->salary,
            'token' => md5(Auth::user()->id),
        ]);
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Add news is successfully');
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
        $list_recruitmet = $show->customers()->paginate(3);
        $getstatus = DB::table('recruitments')->where('jobposting_id', '=', $id);
        return view('DashboardTemplate.Job_postings.detail_post', compact('show','list_recruitmet'));
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
        return view('DashboardTemplate.Job_postings.edit_post', compact('show'));
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
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Update Susscessfully');
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
            ->where([
                'id' => $id,
                'token' => $token
            ])
            ->delete();
        return redirect()->route('CRUDJobByEmployer.index')->with('notify', 'Delete Susscessfully');
    }
}
