<?php

use Carbon\Carbon;

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use App\Models\Comment;
=======
>>>>>>> blog_home
>>>>>>> merge_all_branch
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
<<<<<<< HEAD

=======
>>>>>>> blog_home
        return view('blogit.blogit_search', compact('request', 'blogSearch'));
    }

    public function blogDetail($id)
    {
        $viewMore = Post::orderBy('views', 'desc')->limit(5)->get();

        $postDetail = Post::findOrFail($id);

        $countView = Post::find($id)->increment('views');

        $resultComments = Comment::orderBy('id', 'desc')->paginate(5);

        return view('blogit.blogit_details', compact('viewMore', 'postDetail', 'resultComments'));
    }
}
=======
        $postDetail = Post::find($id);
        // dd($postDetail->title);
        return view('blogit.blogit_details', compact('viewMore', 'postDetail'));
    }
}
>>>>>>> blog_home
