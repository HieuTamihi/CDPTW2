<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Recruitment;

class CustomerController extends Controller
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Customer $customer)
    // {
    // }

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
    //update info user
    public function ShowEditUser($id)
    {
        $customer = Customer::where('id', '=', $id)->first();
        return view('personal_info', compact('customer'));
    }

    public function editUser($id, Request $request)
    {
        $customer = Customer::where('id', '=', $id)->first();
        $user = User::where('customer_id', '=', $id)->first();
        $customer->fullname = $request->fullname;
        $customer->date = $request->date;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->gender = $request->gender;
        $customer->favorite = $request->favorite;
        $customer->created_at = DATE(NOW());
        $customer->updated_at = DATE(NOW());
        $user->email = $request->email;
        $user->phone = $request->phone_number;
        $customer->update();
        $user->update();

        return redirect()->route('ShowEditUser', ['id' => $customer->id])->with('message', 'Cập nhật thành công');
    }
    //change password
    public function changePassword()
    {
        return view('change_pass_log');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Đổi mật khẩu thất bại!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Auth::logout();
        return redirect()->route('login')->with("status", "Đổi mật khẩu thành công, Vui lòng đăng nhập lại!");
    }
}
