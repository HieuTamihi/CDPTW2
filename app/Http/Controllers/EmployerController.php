<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Cv;
use App\Models\Employer;
use App\Models\Job_posting;
use App\Models\Recruitment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employer = Employer::all();
        $job = Job_posting::all();
        $name = Employer::leftjoin('job_postings', 'employers.id', '=', 'job_postings.employer_id')->select('name_company')->get();
        return view('index', compact('employer', 'job', 'name'));
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
        $detail = Employer::findOrFail($id);
        $relate = $detail->jobs->take(1);
        $job_relate = $detail->jobs->take(3);
        $date = Carbon::now()->day;
        if (Auth::check()) {
            $customer_id = Auth::user()->customer_id;
            $apply = Customer::leftJoin('users', 'users.customer_id', '=', 'customers.id')
            ->where('customers.id', '=', $customer_id)->first();
            $id = Auth::user()->customer_id;
            $cv = Cv::where('customer_id', '=', $id)->get();
            return view('detail_page', compact('detail', 'relate', 'job_relate', 'apply', 'cv','date'));
        }
        return view('detail_page', compact('detail', 'relate', 'job_relate', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
