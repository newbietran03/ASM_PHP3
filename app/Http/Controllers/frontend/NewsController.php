<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request){
        
        return view('frontend.pages.home');
    }

    
    function single_post ($slug = null){
        $news = DB::table('news')->where('slug', $slug)->first();
        $data = ['news'=>$news];
        return view("frontend.pages.single-post", $data);
        // return dd($data);
    }
    function category($slug = ''){
        $category_arr = DB::table('categories')->where('slug', $slug)->first();
        $list_news = DB::table('news')->where('idLT', $category_arr->id)->get();
        $data = [ 'list_news'=>$list_news, 'category_arr'=>$category_arr];
        return view("frontend.pages.category", $data);
    }
}
