<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CRUDCustomersRequests;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


class CRUDCustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::orderBy('id', 'desc')->Search()->paginate(5);
        return view('DashboardTemplate.customers.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardTemplate.customers.addcustomers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CRUDCustomersRequests $request)
    {
        Customer::create($request->all());
        return redirect()->route('AdminCustomers.index')->with('message', 'Thêm Customer thành công');
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
        $customer = Customer::find($id);
        return view('DashboardTemplate.customers.editCustomers', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CRUDCustomersRequests $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect()->route('AdminCustomers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::destroy($id);
        return redirect()->route('AdminCustomers.index')->with('message', 'Xóa Customer thành công');
    }
}