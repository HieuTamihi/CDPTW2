<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class CRUDEmloyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employer = Employer::all();
        return view('DashboardTemplate.Employer.index', compact('employer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardTemplate.Employer.addEmployer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['user_id'] = $request->user_id;
        $data['website'] = $request->website;
        $data['infor'] = $request->infor;
        $data['responsibility'] = $request->responsibility;
        $data['name_company'] = $request->name_company;
        $data['address'] = $request->address;
        $get_image = $request->file('image');
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('img', $new_image);
            $data['image'] = $new_image;
            DB::table('employers')->insert($data);
            Session::put('message', 'Cập nhật sản phẩm thành công');
            return Redirect::to('AdminEmloyer.index');
        }

        DB::table('employers')->insert($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('AdminEmloyer.index');
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
    public function destroy($id)
    {
        //
    }
}