<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cv\CreateCVRequest;
use App\Http\Requests\Cv\UpdateCVRequest;
use  App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $customer_id = Auth::user()->customer_id;
            $cv = Cv::where('customer_id', '=', $customer_id)->paginate(5);
            return view('manage_cv', compact('cv'))->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return view('error.404');
        }
    }

    public function viewCV($id)
    {
        if (Auth::check()) {
            $customer_id = Auth::user()->customer_id;
            $viewCV = Cv::where('id', '=', $id)->where('customer_id', '=', $customer_id)->get();
            return view('viewCV', compact('viewCV'));
        } else {
            return view('error.404');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCV');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCVRequest $request)
    {
        if ($request->has('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            $request->avatar->move('img', $filename);
            Cv::create([
                'namecv' => $request->namecv,
                'customer_id' => Auth::user()->customer_id,
                'fullname' => $request->fullname,
                'avatar' => $request->avatar = $filename,
                'apply_position' => $request->apply_position,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'date' => $request->date,
                'introduce' => $request->introduce,
                'exp_work' => $request->exp_work,
                'school_name' => $request->school_name,
                'learn_time' => $request->learn_time,
                'majors' => $request->majors,
                'infor_other' => $request->infor_other,
                'status' => $request->status = 0,
            ]);
            return redirect()->route('cv.create')->with('message', 'Tạo CV thành công!');
        } else {
            return redirect()->back()->with('error', 'Ảnh không được bỏ trống');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {
        if (Auth::check()) {
            $cv = Cv::where('id', '=', $cv->id)->where('customer_id', '=', Auth::user()->customer_id)->first();
            if ($cv == null) {
                return view('error.404');
            } else {
                return view('editCV', compact('cv'));
            }
        } else {
            return view('error.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCVRequest $request, $id)
    {
        if (Auth::check()) {
            $cv = Cv::where('id', '=', $id)->where('customer_id', '=', Auth::user()->customer_id)->first();
            //kiem tra duoi anh
            if ($cv == null) {
                return view('error.404');
            } else {
                if ($request->has('avatar')) {
                    $avatar = $request->file('avatar');
                    $filename = $avatar->getClientOriginalName();
                    //dua anh vao thu muc img
                    $imagePath = public_path('img/' . $cv->avatar);
                    $avatar->move('img', $filename);
                    if (File::exists($imagePath)) {
                        unlink($imagePath);
                    }
                    //update cv
                    $cv->namecv = $request->namecv;
                    $cv->customer_id = Auth::user()->customer_id;
                    $cv->avatar = $request->avatar = $filename;
                    $cv->fullname = $request->fullname;
                    $cv->apply_position = $request->apply_position;
                    $cv->email = $request->email;
                    $cv->phone_number = $request->phone_number;
                    $cv->date = $request->date;
                    $cv->introduce = $request->introduce;
                    $cv->exp_work = $request->exp_work;
                    $cv->school_name = $request->school_name;
                    $cv->learn_time = $request->learn_time;
                    $cv->majors = $request->majors;
                    $cv->infor_other = $request->infor_other;
                    $cv->status = $request->status = 0;
                    $cv->created_at = DATE(NOW());
                    $cv->updated_at = DATE(NOW());
                    $cv->update();
                    return redirect()->back()->with('message', 'Cập nhật thành công!');
                } else {
                    //update cv
                    $cv->namecv = $request->namecv;
                    $cv->customer_id = Auth::user()->customer_id;
                    $cv->fullname = $request->fullname;
                    $cv->apply_position = $request->apply_position;
                    $cv->email = $request->email;
                    $cv->phone_number = $request->phone_number;
                    $cv->date = $request->date;
                    $cv->introduce = $request->introduce;
                    $cv->exp_work = $request->exp_work;
                    $cv->school_name = $request->school_name;
                    $cv->learn_time = $request->learn_time;
                    $cv->majors = $request->majors;
                    $cv->infor_other = $request->infor_other;
                    $cv->status = $request->status = 0;
                    $cv->created_at = DATE(NOW());
                    $cv->updated_at = DATE(NOW());
                    $cv->update();
                    return redirect()->back()->with('message', 'Cập nhật thành công!');
                }
            }
        } else {
            return view('error.404');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        $cv = Cv::where('id', '=', $cv->id)->where('customer_id', '=', Auth::user()->customer_id)->first();
        if ($cv == null) {
            return view('error.404');
        } else {
            $cv->delete();
            return redirect()->route('cv.index')->with('message', 'Xóa thành công!');
        }
    }
}
