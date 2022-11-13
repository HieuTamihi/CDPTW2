<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request)
    {

        $jobTitle = Employer::where('infor', 'like', '%' . $request->keyword . '%')
            ->orWhere('address', 'like', '%' . $request->keyword . '%')
            ->orWhere('name_company', 'like', '%' . $request->keyword . '%')
            ->get();
        return view('search', compact('jobTitle', 'request'));
    }
}
