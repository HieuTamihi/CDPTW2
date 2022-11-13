<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Wish_lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->customer_id;
        $wishlist = Wish_lists::leftjoin('customers', 'wish_lists.customer_id', '=', 'customers.id')
            ->leftjoin('job_postings', 'wish_lists.job_posting_id', '=', 'job_postings.id')
            ->leftjoin('employers', 'employers.id', '=', 'job_postings.employer_id')
            ->where('customers.id', '=', $id)
            ->select('image', 'wish_lists.id', 'wish_lists.job_posting_id', 'salary', 'name_company','employers.address')->get();
        return view('tracking_work', compact('wishlist'));
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
        Wish_lists::create([
            'customer_id' => Auth::user()->customer_id,
            'job_posting_id' => $request->id,
        ]);
        return redirect()->route('wishlist.index')->with('message', 'Công việc đã được thêm vào danh sách theo dõi');
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
    public function destroy(Wish_lists $wishlist)
    {
        $wishlist->delete();
        return redirect()->route('wishlist.index')->with('message', 'Bạn đã hủy theo dõi công việc này!');
    }
}