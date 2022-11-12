<?php

namespace App\Http\Controllers;

<<<<<<< HEAD:app/Http/Controllers/RecruimentController.php
use App\Models\Employer;
use App\Models\Recruitment;
=======
use App\Http\Requests\AdminPostsRequest;
>>>>>>> CRUD_post:app/Http/Controllers/AdminPostsController.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecruimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(AdminPostsRequest $request)
    {
<<<<<<< HEAD:app/Http/Controllers/RecruimentController.php
        $data = new Recruitment();
        $file = $request->file;
        if ($file) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('file', $filename);
            $data->file = $filename;
        }
        $data->introduce = $request->introduce;
        $data->customer_id = Auth::user()->customer_id;
        $data->jobposting_id = $request->id;
        $data->cv_id = $request->cv_id;
        $data->status = 0;
        $data->save();
        return redirect()->back()->with('message', 'Ứng tuyển thành công!');
=======
        $posts = new Post();
        if ($request->hasFile('post_image')) {
            $image = $request->post_image;
            $image_name = $image->getClientOriginalName();
            $image->move(base_path('public/img/blogit'), $image_name);
        }
        $posts->title = $request->post_title;
        $posts->content = $request->post_content;
        $posts->image = $image_name;
        $posts->save();
        return redirect()->back()->with('msg', 'Post added successfully');
>>>>>>> CRUD_post:app/Http/Controllers/AdminPostsController.php
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
        $showDataEdit = Post::find($id);
        return view('DashboardTemplate.dashboard_blog_edit', compact('showDataEdit'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPostsRequest $request, $id)
    {
        $posts = Post::find($id);
        if ($request->hasFile('post_image')) {
            $image = $request->post_image;
            $image_name = $image->getClientOriginalName();
            $image->move(base_path('public/img/blogit'), $image_name);
        }
        $posts->title = $request->post_title;
        $posts->content = $request->post_content;
        $posts->image = $image_name;
        $posts->update();
        return redirect()->back()->with('msg', 'Post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postDelete = Post::find($id);
        $postDelete->delete();
        return redirect()->back()->with('msg', 'Post deleted successfully');
    }
}
