<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News; // Ensure you import the News model
use App\Models\Category; // Import the Category model

class IndexController extends Controller
{
    public function index(Request $request)
    {
        // Fetch categories with 'anHien' = 1
        $categories = DB::table('categories')
            ->select('id', 'ten', 'slug')
            ->where('anHien', 1)
            ->orderBy('id', 'asc')
            ->get();

        // Fetch the latest main post with 'anHien' = 1
        $mainPost = News::where('anHien', 1)->latest()->first();

        // Fetch 3 latest posts after the main post with 'anHien' = 1
        $subPostsFirstPart = News::where('anHien', 1)->latest()->skip(1)->take(3)->get();

        // Fetch 3 more posts after the first set with 'anHien' = 1
        $subPostsSecondPart = News::where('anHien', 1)->latest()->skip(4)->take(3)->get();

        // Fetch 4 categories for tabs
        $tabs = Category::where('anHien', 1)->take(4)->get();
        $activeTabId = $tabs->first()->id ?? null;

        // Fetch all posts with 'anHien' = 1
        $posts = News::where('anHien', 1)->get();

        // Fetch 9 random posts with 'anHien' = 1
        $randomPosts = News::where('anHien', 1)->inRandomOrder()->limit(9)->get();

        // Prepare data for the view
        $data = [
            'categories' => $categories,
            'mainPost' => $mainPost,
            'subPostsFirstPart' => $subPostsFirstPart,
            'subPostsSecondPart' => $subPostsSecondPart,
            'posts' => $posts,
            'activeTabId' => $activeTabId,
            'randomPosts' => $randomPosts,
        ];

        // Return the view with prepared data
        return view('frontend.pages.home', $data);
    }
}
