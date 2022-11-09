<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Employer;

class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

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
                $_SESSION['permision'] = Auth::user()->employer_id;
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
    public function register(Request $request)
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
                $newUser = User::create([
                    'email' => $request->email,
                    'password' => $request->password,
                    'phone' => $request->phone,
                    'role' => $request->role = 2,
                    'status' => $request->status = 1
                ]);
                Employer::create([
                    'user_id' => $newUser->id,
                    'name_company' => $request->name_company,
                    'address' => $request->address,
                    'email' => $request->email,
                    'phone_number' =>$request->phone,
                ]);
                return redirect()->route('register')->with('message', 'Tạo tài khoản thành công !');
            } else {
                return redirect()->route('register')->with('message', 'Tài khoản đã tồn tại !');
            }
        }
    }
    public function getUserID()
    {
        $user_id = DB::table('employers')->select('user_id')->orderBy('user_id', 'DESC')->first();
        (int)$user_id->user_id += 1;
        return view('register', compact('user_id'));
    }
    public function registerCT(Request $request)
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
                User::create([
                    'email' => $request->email,
                    'password' => $request->password,
                    'phone' => $request->phone,
                    'role' => $request->role = 3,
                    'status' => $request->status = 1,
                    'customer_id' => $request->customer_id
                ]);
                Customer::create([
                    'id' => $request->customer_id,
                    'email' => $request->email,
                    'phone_number' => $request->phone,
                    'status' => $request->status = 1,
                ]);
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
}
