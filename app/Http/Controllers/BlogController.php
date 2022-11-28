<?php

use Carbon\Carbon;

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function featuredPosts()
    {
        $dayNow = \Carbon\Carbon::now()->addDay(1);

        $dayNowSub = \Carbon\Carbon::now()->subDay(5);

        $featuredPosts = Post::where('views', '>=', '5')
            ->whereBetween('created_at', [$dayNowSub, $dayNow])->inRandomOrder()
            ->first();

        $featuredPostsViews = Post::where('views', '>=', '5')->inRandomOrder()->first();

        $newPost = Post::orderBy('id', 'desc')->paginate(4);

        $viewMore = Post::orderBy('views', 'desc')->limit(5)->get();


        return view('blogit.blogit_home', compact('featuredPosts', 'viewMore', 'newPost', 'featuredPostsViews'));
    }

    public function blogSearch(Request $request)
    {
        $blogSearch = Post::where('title', 'like', '%' . $request->keyword . '%')->paginate(4);

        return view('blogit.blogit_search', compact('request', 'blogSearch'));
    }

    public function blogDetail($id, Request $request)
    {
        $viewMore = Post::orderBy('views', 'desc')->limit(5)->get();

        $postDetail = Post::findOrFail($id);

        $countView = Post::findOrFail($id)->increment('views');

        $resultComment = Comment::with('customers')->where('post_id', $id)
            ->where('status', 1)
            ->get()->toArray();
        return view('blogit.blogit_details', compact('viewMore', 'postDetail', 'resultComment'));
    }

    public function storeComments(Request $request, $id)
    {

        Comment::create([
            'customer_id' => Auth::user()->customer_id,
            'post_id' => $id,
            'comment' => $request->comment,
            'created_at' => $request->created_at,
        ]);
        return redirect()->back()->with('msg', 'Bình luận thành công');
    }

    public function destroyComments($id)
    {
    }
}
