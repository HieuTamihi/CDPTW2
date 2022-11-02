<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getsearch(Request $request)
    {
        $jobTitle = DB::table('job_posting')->where('title', 'like', '%' . $request->keywords . '%')
            ->orWhere('skill', 'like', '%' . $request->keywords . '%')
            ->orWhere('salary', 'like', '%' . $request->keywords . '%')
            ->get();

        dd($jobTitle);

        return view('search', compact('jobTitle'));
    }
}
