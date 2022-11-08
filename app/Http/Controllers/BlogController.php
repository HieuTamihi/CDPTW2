<?php

use Carbon\Carbon;

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function featuredPosts()
    {
        $dayNow = \Carbon\Carbon::now()->addDay(1);
        $dayNowSub = \Carbon\Carbon::now()->subDay(4);
        $featuredPosts = Post::where('views', '>', '5')
            ->whereBetween('created_at', [$dayNowSub, $dayNow])->inRandomOrder()
            ->first();
        $newPost = Post::orderBy('id', 'desc')->paginate(4);
        $viewMore = Post::orderBy('views', 'desc')->limit(5)->get();

        // dd($featuredPosts->title);

        return view('blogit.blogit_home', compact('featuredPosts', 'viewMore', 'newPost'));
    }

    public function blogSearch(Request $request)
    {
        $blogSearch = Post::where('title', 'like', '%' . $request->keyword . '%')->paginate(4);
        return view('blogit.blogit_search', compact('request', 'blogSearch'));
    }

    public function blogDetail($id)
    {
        $viewMore = Post::orderBy('views', 'desc')->limit(5)->get();
        $postDetail = Post::find($id);
        // dd($postDetail->title);
        return view('blogit.blogit_details', compact('viewMore', 'postDetail'));
    }
}