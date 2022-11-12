<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
<<<<<<< HEAD
use App\Models\Recruitment;
use App\Http\Requests\Employer\UpdateRequest;
use Illuminate\Support\Facades\DB;
=======
use App\Models\Customer;
use App\Models\Recruitment;
use App\Http\Requests\Employer\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Employer\ChangePasswordRequest;
>>>>>>> origin/change_password_employer

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
        $showEmploy = Employer::find($id);
<<<<<<< HEAD
        return view('DashboardTemplate.employer.detail_employer',compact('showEmploy'));
=======
        return view('DashboardTemplate.employer.detail_employer', compact('showEmploy'));
>>>>>>> origin/change_password_employer
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showEmploy = Employer::find($id);
<<<<<<< HEAD
        return view('DashboardTemplate.employer.edit_employer',compact('showEmploy'));
=======
        return view('DashboardTemplate.employer.edit_employer', compact('showEmploy'));
>>>>>>> origin/change_password_employer
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
        $Employer = Employer::find($id);
<<<<<<< HEAD
        if($request->hasFile('image_upload'))
        {
            $file = $request->file('image_upload');
            $file_name = $file->getClientOriginalName();
            $file->move('img',$file_name);
            $Employer->image = $file_name;
        }
        $Employer->update($request->all());
        return redirect()->back()->with('notify','Update Susscessfully');
=======
        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $file_name = $file->getClientOriginalName();
            $file->move('img', $file_name);
            $imagePath = public_path('img/'.$Employer->image);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $Employer->image = $file_name;
        }
        $Employer->update($request->all());
        return redirect()->back()->with('notify', 'Update Susscessfully');
>>>>>>> origin/change_password_employer
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $re = DB::table('recruitments')->select('id')->where('customer_id','=',$id)->get();
        Recruitment::destroy($re[0]->id);
        return redirect()->route('CRUDJobPosting.index');
=======
        $re = DB::table('recruitments')->select('id')->where('customer_id', '=', $id)->get();
        Recruitment::destroy($re[0]->id);
        return redirect()->back()->with('notify','Delete Susscessfully');
    }

    public function detail_recruitment($id)
    {
        $customer = Customer::find($id);
        return view('DashboardTemplate.Job_postings.detail', compact('customer'));
    }
    public function recruit(Customer $customer)
    {
        Mail::send('DashboardTemplate.emails.send', compact('customer'), function ($email) use ($customer) {
            $email->subject('Thông báo tuyển dụng');
            $email->to($customer->email);
        });
        return redirect()->back()->with('notify', 'Send mail susscrssfully !');
    }

    public function changepass(ChangePasswordRequest $request,$id)
    {
        $request -> validate([
            
        ]);
        if(!Hash::check($request->old_pass,auth()->user()->password)){
            return redirect()->back()->with("error", "Đổi mật khẩu thất bại!");
        }
        else{
            $change = User::find($id);
            $change->update([
                'password' =>$request->new_pass,
            ]);
            Auth::logout();
            return redirect()->route('login')->with("status", "Đổi mật khẩu thành công, Vui lòng đăng nhập lại!");
        }
    }
    public function showlayout($id)
    {
        $showEmployByID = User::find($id);
        return view('DashboardTemplate.employer.showlayout',compact('showEmployByID')) ;
>>>>>>> origin/change_password_employer
    }
}
