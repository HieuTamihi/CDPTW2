<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Customer;
use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Models\Job_posting;
use App\Http\Requests\Employer\UpdateRequest;
use App\Http\Requests\Employer\ChangePasswordRequest;

use function Psy\debug;

class RUEmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $id = Auth::user()->employer->id;
        $showEmploy = DB::table('employers')->where('id', $id)->first();
        if ($showEmploy == null) {
            return view('error.404');
        } else {
            return view('DashboardTemplate.employer.detail_employer', compact('showEmploy'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Auth::user()->employer->id;
        $showEmploy = DB::table('employers')->where('id', $id)->first();
        if ($showEmploy == null) {
            return view('error.404');
        } else {
            return view('DashboardTemplate.employer.edit_employer', compact('showEmploy'));
        }
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
        $check = DB::table('employers')->where('id', $id)->first();
        if ($check == null) {
            return view('error.404');
        } else {
            $Employer = Employer::find($id);
            if ($request->hasFile('image_upload')) {
                $file = $request->file('image_upload');
                $file_name = $file->getClientOriginalName();
                $file->move('img', $file_name);
                $imagePath = public_path('img/' . $Employer->image);
                if ($Employer->image != "" && File::exists($imagePath) && $Employer->image != $file_name) {
                    unlink($imagePath);
                }
                $Employer->image = $file_name;
            }
            $Employer->update([
                'website' => htmlspecialchars($request->website),
                'infor' => htmlspecialchars($request->infor),
                'responsibility' => htmlspecialchars($request->responsibility),
                'welfare' => htmlspecialchars($request->welfare),
                'name_company' => htmlspecialchars($request->name_company),
                'address' => htmlspecialchars($request->address),
                'email' => htmlspecialchars($request->email),
                'phone_number' => htmlspecialchars($request->phone_number),
            ]);
            return redirect()->back()->with('notify', 'Update Susscessfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = DB::table('recruitments')->where('id', $id)->first();
        if ($check == null) {
            return view('error.404');
        } else {
            $re = DB::table('recruitments')->select('id')->where('customer_id', '=', $id)->get();
            Recruitment::destroy($re[0]->id);
            return redirect()->route('CRUDJobByEmployer.show', Auth::user()->employer->id)->with('notify', 'Delete Susscessfully');
        }
    }

    public function detail_recruitment($id)
    {
        $check = DB::table('job_postings')->where('employer_id', Auth::user()->employer->id)->first();
        $check = Job_posting::findOrFail($check->id);
        $re = $check->customers;
        $array = array();
        for ($i = 0; $i < count($re); $i++) {
            $array[] = $re[$i]->id;
        }
        if (in_array($id, $array)) {
            $customer = DB::table('customers')->where('id', $id)->first();
            $re = DB::table('recruitments')->select('id')->where('customer_id', '=', $id)->get();
            $update_status = Recruitment::find($re[0]->id);
            $update_status->update([
                'status' => '1',
            ]);
            return view('DashboardTemplate.Job_postings.detail', compact('customer'));
        } else {
            return view('error.404');
        }
    }

    public function recruit(Customer $customer)
    {
        $id = DB::table('recruitments')->where('customer_id', $customer->id)->first();
        if ($id == null) {
            return view('error.404');
        } else {
            $id = Customer::findOrFail($customer->id);
            $job = $id->job_postings->take(1);
            $tomorrow = Carbon::tomorrow();
            Mail::send('DashboardTemplate.emails.send', compact('customer', 'job', 'tomorrow'), function ($email) use ($customer) {
                $email->subject('Thông báo tuyển dụng');
                $email->to($customer->email);
            });
            return redirect()->back()->with('notify', 'Send mail susscrssfully !');
        }
    }

    public function changepass(ChangePasswordRequest $request, $id)
    {
        $id = DB::table('users')->where('id', $id)->first();
        if ($id == null) {
            return view('error.404');
        } else {
            if (!Hash::check($request->old_pass, auth()->user()->password)) {
                return redirect()->back()->with("error", "Đổi mật khẩu thất bại!");
            } else {
                $change = User::find($id);
                $change->update([
                    'password' => $request->new_pass,
                ]);
                Auth::logout();
                return redirect()->route('login')->with("status", "Đổi mật khẩu thành công, Vui lòng đăng nhập lại!");
            }
        }
    }
    public function showlayout($id)
    {
        $id = Auth::user()->id;
        $showEmployByID = DB::table('users')->where('id', $id)->first();
        if ($showEmployByID == null) {
            return view('error.404');
        } else {
            return view('DashboardTemplate.employer.showlayout', compact('showEmployByID'));
        }
    }
}
