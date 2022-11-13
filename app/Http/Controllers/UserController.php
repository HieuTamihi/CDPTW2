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
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\RegisterCTRequest;
use App\Http\Requests\User\LoginRequest;
use Carbon\Carbon;

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
                Auth::logout();
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
            $validator = Validator::make($request->all(), [ ]);
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
                //Add Employer table
                Employer::create([
                    'user_id' => $newUser->id,
                    'name_company' => $request->name_company,
                    'address' => $request->address,
                    'email' => $request->email,
                    'phone_number' => $request->phone,
                ]);
                //Send mail
                Mail::send('DashboardTemplate.emails.active', compact('newUser'), function ($email) use ($newUser) {
                    $email->subject('Active Acount');
                    $email->to($newUser->email);
                });
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
    public function registerCT(RegisterCTRequest $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), []);
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
//forget password
public function resetPass()
{
    return view('reset_pass');
}
public function update_new_pass()
{
    return view('change_pass');
}
public function recover_pass(Request $request)
{
    $data = $request->all();
    $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
    $title_mail = "Lấy lại mật khẩu" . ' ' . $now;
    $user = DB::table('users')->where('email', $data['email'])->get();
    foreach ($user as $key => $value) {
        $id = $value->id;
    }
    if ($user) {
        $count_user = count($user);
        if ($count_user == 0) {
            return redirect()->back()->with('error', 'Email chưa được đăng ký để khôi phục tài khoản');
        } else {
            $token_random = Str::random();
            $user = User::find($id);
            $user->token = $token_random;
            $user->save();
            //send mail
            $to_email = $data['email'];
            $link_reset_pass = url('/update-new-pass?email=' . $to_email . '&token=' . $token_random);

            $data = array('name' => $title_mail, 'body' => $link_reset_pass, 'email' => $data['email']);
            Mail::send('mail.active', ['data' => $data], function ($message) use ($title_mail, $data) {
                $message->to($data['email'])->subject($title_mail);
                $message->from($data['email'], $title_mail);
            });
            return redirect()->back()->with('message', 'Gửi mail thành công, vui lòng vào email để reset password');
        }
    }
}
public function reset_new_pass(Request $request)
{
    $request->validate([
        'password' => 'required|confirmed',
    ]);

    $data = $request->all();
    $token_random = Str::random();
    $user = DB::table('users')->where('email', $data['email'])->where('token', $data['token'])->get();
    $count = count($user);
    if ($count > 0) {
        foreach ($user as $key => $us) {
            $id = $us->id;
        }
        $reset = User::find($id);
        $reset->password = $request->password;
        $reset->token = $token_random;
        $reset->save();
        return redirect()->back()->with('message', 'Mật khẩu đã cập nhật mới. Quay lại trang đăng nhập');
    } else {
        return redirect()->back()->with('error', 'Vui lòng nhập lại email vì link đã quá hạn');
    }
}
}
