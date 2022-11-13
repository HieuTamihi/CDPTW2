<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminPostsRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultPosts = Post::orderBy('id', 'desc')->paginate(5);
        return view('DashboardTemplate.dashboard_blog_home', compact('resultPosts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DashboardTemplate.dashboard_blog_add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPostsRequest $request)
    {
        if ($request->hasFile('post_image')) {
            $image = $request->post_image;
            $image_name = $image->getClientOriginalName();
            $image->move(base_path('public/img/blogit'), $image_name);
        }
        Post::create([
            'title' => $request->post_title,
            'content' => $request->post_content,
            'image' => $image_name,
        ]);
        // $posts->save();
        return redirect()->back()->with('msg', 'Post added successfully');
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
        $showDataEdit = Post::findOrFail($id);
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
        $posts = Post::findOrFail($id);
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

    public function blogTrash()
    {
        $resultPosts = Post::orderBy('id', 'desc')->onlyTrashed()->paginate(5);
        return view('DashboardTemplate.dashboard_blog_trash', compact('resultPosts'));
    }
    public function blogRestore($id)
    {
        $postDelete = Post::withTrashed()->find($id);
        $postDelete->restore();
        return redirect()->back()->with('msg', 'Post restore successfully');
    }
}
