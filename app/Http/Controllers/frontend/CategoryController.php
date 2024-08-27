<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        // Fetch categories for the tabs
        $categories = Category::all();

        // Determine the active tab id
        $activeTabId = $request->query('activeTabId', $categories->first()->id ?? null);

        // Fetch posts for the active category
        $posts = News::where('idLT', $activeTabId)->latest()->get();

        return view('frontend.pages.category', [
            'categories' => $categories,
            'activeTabId' => $activeTabId,
            'posts' => $posts
        ]);
    }

    // Function to display single post
    public function singlePost($slug = '')
    {
        $post = News::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.single-post', ['post' => $post]);
    }

    // Function to display posts by category
    public function category($slug = '')
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = News::where('idLT', $category->id)->get();
        return view('frontend.pages.category', [
            'categories' => Category::all(),
            'activeTabId' => $category->id,
            'posts' => $posts
        ]);
    }
}
