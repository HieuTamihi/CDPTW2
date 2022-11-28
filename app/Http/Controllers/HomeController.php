<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request)
    {

        $jobTitle = DB::table('job_postings')->where('title', 'like', '%' . $request->keyword . '%')
            ->orWhere('skill', 'like', '%' . $request->keyword . '%')
            ->orWhere('salary', 'like', '%' . $request->keyword . '%')
            ->get();
        return view('search', compact('jobTitle', 'request'));
    }
}