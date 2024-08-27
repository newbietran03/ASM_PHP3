<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\News;
use DB;

class GlobalComposer
{
    public function compose(View $view)
    {
        $popularPosts = News::where('anHien', '1')
            ->orderBy('xem', 'desc')
            ->take(5)
            ->get();

        $trendingPosts = News::where('anHien', '1')
            ->orderBy('xem', 'asc')
            ->take(6)
            ->get();

        $latestPosts = News::latest()->take(3)->get();

        $categories_sidebar = DB::table('categories')
            ->where('anHien', '=', '1')
            ->orderby('thuTu', 'asc')
            ->limit(7)
            ->get();

        $categories_nav = DB::table('categories')->select('id', 'slug', 'ten')
            ->orderby('thuTu', 'asc')
            ->where('anHien', '=', '1')
            ->limit(5)
            ->get();

        $techPosts = News::where('idLT', 1)
            ->latest()
            ->get();

        $techPost = $techPosts->all();


        $view->with(compact('popularPosts', 'trendingPosts', 'latestPosts', 'categories_sidebar', 'categories_nav', 'techPost', ));
    }
}