<?php

namespace App\Http\Controllers;

use App\Models\Job_posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobpostingController extends Controller
{
    public function showJob()
    {
        session_start();
        $id = $_SESSION['permision'];
        $all_job = Job_posting::where('employer_id', '=', $id)->get();
        return view('listjobPosting', compact('all_job'));
    }
}
