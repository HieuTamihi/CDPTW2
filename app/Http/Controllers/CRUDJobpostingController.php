<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CRUDJobpostingRequest;
use App\Models\Job_posting;
use Illuminate\Support\Facades\DB;

class CRUDJobpostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobposting = Job_posting::orderBy('id', 'desc')->paginate(5);
        return view('DashboardTemplate.Jobposting.index', compact('jobposting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardTemplate.Jobposting.addJobposting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CRUDJobpostingRequest $request)
    {
        Job_posting::create($request->all());
        return redirect()->route('AdminJobposting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobposting = Job_posting::find($id);
        return view('DashboardTemplate.Jobposting.editJobposting', compact('jobposting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CRUDJobpostingRequest $request, $id)
    {
        $jobposting = Job_posting::find($id);
        $jobposting->update($request->all());
        return redirect()->route('AdminJobposting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobposting = Job_posting::destroy($id);
        return redirect()->route('AdminJobposting.index');
    }
}