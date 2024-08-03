<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class QuanTriTinController extends Controller
{
    public function index()
    {
        $news = News::all();
        $categories = Category::all();

        return view('admin.news.index', compact('news', 'categories'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'lang' => 'required',
        'idLT' => 'required|integer',
        'tieuDe' => 'required',
        'urlHinh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'noiDung' => 'required|string',
        'anHien' => 'required|boolean',
    ]);

    // Handle the image upload
    if ($request->hasFile('urlHinh')) {
        $image = $request->file('urlHinh');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $imagePath = 'images/' . $name;
    }

    News::create([
        'lang' => $request->input('lang'),
        'idLT' => $request->input('idLT'), // Ensure idLT is being handled here
        'id_user'=>Auth::id()??1,
        'tieuDe' => $request->input('tieuDe'),
        'urlHinh' => $imagePath,
        'noiDung' => $request->input('noiDung'),
        'anHien' => $request->input('anHien'),
    ]);

    return redirect()->route('news.index')->with('success', 'Tin được tạo thành công.');
}

    public function show(News $news)
    {
        // return view('quantri.tin.show', compact('tin'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all();  // Giả sử bạn có bảng Category để quản lý loại tin
        return view('admin.news.edit', compact('news', 'categories'));

    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'lang' => 'required',
            'tieuDe' => 'required',
            'idLT' => 'required',
            // Thêm các rules validation khác nếu cần
        ]);
    
        $news = News::findOrFail($id);
        $news->update($request->all());
    
        return redirect()->route('news.index')->with('success', 'Tin tức đã được cập nhật thành công');
    }
    

    public function destroy( $news)
    {
        
        try{
            $news = News::findOrFail($news);
            // $news->delete();
            $kt=$news->delete();
            if( $kt){
                return redirect()->route('news.index')->with('success', 'Tin được xóa thành công.');
            }
            // return redirect()->route('news.index')->with('success', 'Tin được xóa thành công.');
        }catch(\Exception $e){

            return redirect()->route('news.index')->withErrors(['error'=>"Xoá thất bại $e  "]);
        }
        
    }
}


