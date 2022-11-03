<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Contracts\Session\Session;

session_start();
class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->status != 1) {
                return redirect()->route('login')->with('message', 'Tài khoản đã bị khóa');
            }
            if (Auth::user()->role == 1) {
                $_SESSION['permision'] = Auth::user()->employer_id;
                return view('admin_homePage');
            } else {
                $_SESSION['permision'] = Auth::user()->employer_id;
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
                'phone' => 'required|numeric|min:11',
                'password' => 'required|confirmed|min:6',

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->email  = $request->email;
                $newUser->phone  = $request->phone;
                $newUser->password = $request->password;
                $newUser->role = $request->role;
                $newUser->status = $request->status;
                $newUser->save();
                return redirect()->route('register')->with('message', 'Tạo tài khoản thành công !');
            } else {
                return redirect()->route('register')->with('message', 'Tài khoản đã tồn tại !');
            }
        }
    }
}
