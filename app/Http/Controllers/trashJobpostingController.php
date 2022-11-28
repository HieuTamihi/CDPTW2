<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job_posting;

class trashJobpostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobposting = Job_posting::onlyTrashed()->search()->get();
        return view('DashboardTemplate.Jobposting.trash_Jobposting', compact('jobposting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobposting = Job_posting::withTrashed($id);
        $jobposting->restore();
        return redirect()->route('AdminJobposting.index')->with('message', 'Khôi phục Jobposting thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobposting = Job_posting::withTrashed()->find($id);
        $jobposting->forceDelete();
        return redirect()->route('AdminJobposting.index')->with('message', 'Xóa vĩnh viễn Jobposting thành công');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}