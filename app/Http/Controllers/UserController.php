<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\LoginRequest;
=======

>>>>>>> origin/confirm_email
class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function login(LoginRequest $request)
    {
        $validator = Validator::make($request->all(), []);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($arr)) {
            if (Auth::user()->status != 1) {
                return redirect()->route('login')->with('message', 'Tài khoản đã bị khóa');
            }
            if (Auth::user()->role == 1) {
                $_SESSION['permision'] = Auth::user()->employer_id;
                return view('DashboardTemplate.dashboard');
            }
            //dang nhap customer
            if (Auth::user()->role == 3) {
                return redirect()->route('index')->with('message', 'Đăng nhập thành công');
            } else {
                $_SESSION['permision'] = Auth::user()->employer_id;
                return redirect()->route('index')->with('message', 'Đăng nhập thành công');
            }
            // Dang nhap employer
            if (Auth::user()->role == 2) {
                return redirect()->route('index')->with('message', 'Đăng nhập thành công');
            } else {
                return redirect()->route('index')->with('message', 'Đăng nhập thành công');
            }
        } else {
            return redirect()->route('login')->with('message', 'Email hoặc mật khẩu không chính xác');
        }
    }
    public function register(RegisterRequest $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'phone' => 'required|numeric|min:10',
                'password' => 'required|confirmed|min:6',

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $conf = Str::random(10);
                $newUser = User::create([
                    'email' => $request->email,
                    'password' => $request->password,
                    'phone' => $request->phone,
                    'role' => $request->role = 2,
                    'status' => $request->status = 0,
                    'confirm' => $conf,
                ]);
<<<<<<< HEAD
<<<<<<< HEAD
                    if($request->role == 3){
                        Employer::create([
                            'user_id' => $request->user_id,
                            'name_company' => $request->name_company,
                            'email' => $request->email,
                            'phone_number' =>$request->phone,
                        ]);
                    }
=======
=======
>>>>>>> origin/change_password_employer

                //Add Employer table
                Employer::create([
                    'user_id' => $newUser->id,
                    'name_company' => $request->name_company,
                    'address' => $request->address,
                    'email' => $request->email,
                    'phone_number' => $request->phone,
                ]);

                //Send mail
<<<<<<< HEAD
                Mail::send('DashboardTemplate.emails.active', compact('newUser'), function ($email) use ($newUser) {
                    $email->subject('Active Acount');
                    $email->to($newUser->email);
                });
<<<<<<< HEAD
>>>>>>> RUEmployer_By_ID
=======
>>>>>>> origin/change_password_employer
                return redirect()->route('register')->with('message', 'Tạo tài khoản thành công !');
=======
                Mail::send('DashboardTemplate.emails.active',compact('newUser'),function($email) use($newUser) {
                    $email->subject('Active Acount');
                    $email->to($newUser->email);
                });
                return redirect()->route('register')->with('message', 'Tạo tài khoản thành công vui lòng vào email để xác thực!');
>>>>>>> origin/confirm_email
            } else {
                return redirect()->route('register')->with('message', 'Tài khoản đã tồn tại !');
            }
        }
    }


    public function getUserID()
    {
        $user_id = DB::table('users')->select('id')->orderBy('id', 'DESC')->first();
        (int)$user_id->id += 1;
        return view('register', compact('user_id'));
       
    }
    public function registerCT(RegisterRequest $request)
    {
        if ($request->isMethod('post')) {
<<<<<<< HEAD
            $validator = Validator::make($request->all(), [
            
            ]);
=======
            $validator = Validator::make($request->all(), []);
>>>>>>> origin/change_password_employer
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $conf = Str::random(10);
                $newUserCT = User::create([
                    'email' => $request->email,
                    'password' => $request->password,
                    'phone' => $request->phone,
                    'role' => $request->role = 3,
                    'status' => $request->status = 0,
                    'customer_id' => $request->customer_id,
                    'confirm' => $conf,
                ]);
                Customer::create([
                    'id' => $request->customer_id,
                    'email' => $request->email,
                    'phone_number' => $request->phone,
                    'status' => $request->status = 1,
                ]);

                 //Send mail
                 Mail::send('DashboardTemplate.emails.activeCT', compact('newUserCT'), function ($email) use ($newUserCT) {
                    $email->subject('Active Acount');
                    $email->to($newUserCT->email);
                });
                return redirect()->route('registerCT')->with('message', 'Tạo tài khoản thành công !');
            } else {
                return redirect()->route('registerCT')->with('message', 'Tài khoản đã tồn tại !');
            }
        }
    }
    public function getCustomerID()
    {
        $customer_id = DB::table('customers')->select('id')->orderBy('id', 'DESC')->first();
        (int)$customer_id->id += 1;
        return view('registerCT', compact('customer_id'));
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    // Active
    public function active(User $newUser, $confirm)
    {
        if ($newUser->confirm == $confirm) {
            $newUser->update([
                'status' => '1',
=======

    // Active
    public function active(User $newUser,$confirm)
    {
        if($newUser->confirm == $confirm){
            $newUser->update([
                'status'=> '1',
>>>>>>> origin/confirm_email
                'confirm' => '',
            ]);
            return redirect()->route('login');
        }
    }
<<<<<<< HEAD
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/confirm_email
}
=======
    // Active
    public function active(User $newUser, $confirm)
    {
        if ($newUser->confirm == $confirm) {
            $newUser->update([
                'status' => '1',
                'confirm' => '',
            ]);
            return redirect()->route('login');
        }
    }
}
>>>>>>> RUEmployer_By_ID
