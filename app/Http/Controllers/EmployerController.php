<?php

namespace App\Http\Controllers;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employer = Employer::all();
        return view('index', compact('employer'));
    }
    public function show($id)
    {
        $getEmployerByiD = Employer::findOrFail($id);
        $getRelate = ($getEmployerByiD->jobs)->take(1);
        // dd($getRelate);
        return view('detail_page',compact('getEmployerByiD','getRelate'));
    }
}
