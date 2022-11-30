<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultComment = Comment::with('customers', 'posts')->get();
        return view('DashboardTemplate.Comment.dashboard_comment_home', compact('resultComment'));
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commentDelete = Comment::findOrFail($id);
        $commentDelete->delete();
        return redirect()->back()->with('msg', 'Comment deleted successfully');
    }
    public function commentStatus($id, $status)
    {
        Comment::whereId($id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('msg', 'Status updated successfully');
    }
    public function commentTrash()
    {
        $resultComment = Comment::orderBy('id', 'desc')->onlyTrashed()->paginate(5);
        return view('DashboardTemplate.Comment.dashboard_comment_trash', compact('resultComment'));
    }
    public function commentRestore($id)
    {
        $commentDelete = Comment::withTrashed()->findOrFail($id);
        $commentDelete->restore();
        return redirect()->back()->with('msg', 'Comment restore successfully');
    }
}
