<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News; // Đảm bảo bạn đã import model News

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Lấy bài viết mới nhất mà anHien = 1
        $mainPost = News::where('anHien', '1')->latest()->first();

        // Lấy 3 bài viết mới nhất sau bài viết chính mà anHien = 1
        $subPostsFirstPart = News::where('anHien', '1')->latest()->skip(1)->take(3)->get();

        // Lấy 3 bài viết tiếp theo sau 3 bài viết trước mà anHien = 1
        $subPostsSecondPart = News::where('anHien', '1')->latest()->skip(4)->take(3)->get();

        // Đặt dữ liệu vào mảng để truyền đến view
        $data = [
            'mainPost' => $mainPost,
            'subPostsFirstPart' => $subPostsFirstPart,
            'subPostsSecondPart' => $subPostsSecondPart,
        ];

        // Trả về view với dữ liệu đã chuẩn bị
        return view('frontend.pages.home', $data);
    }

    public function single_post($slug = '')
    {
        $news = News::where('slug', $slug)->where('anHien', '1')->first();
        $data = ['news' => $news];
        return view("frontend.pages.single-post", $data);
    }

    public function category($slug = '')
    {
        $category_arr = DB::table('categories')->where('slug', $slug)->first();
        
        // Lọc bài viết theo category và anHien, sau đó phân trang
        $list_news = News::where('idLT', $category_arr->id)
                          ->where('anHien', '1')
                          ->paginate(6);

        $data = ['list_news' => $list_news, 'category_arr' => $category_arr];
        
        return view("frontend.pages.category", $data);
    }
}
