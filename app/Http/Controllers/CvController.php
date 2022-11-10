<?php

namespace App\Http\Controllers;

use  App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_id = Auth::user()->customer_id;
        $cv = Cv::where('customer_id', '=', $customer_id)->paginate(5);
        return view('manage_cv', compact('cv'))->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function store(Request $request)
    {
        $avatar = $request->avatar;
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        $cv->delete();
        return redirect()->route('cv.index')->with('message', 'Xóa thành công!');
    }
}
