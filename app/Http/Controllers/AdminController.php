<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuanTriTin;
use App\Models\QuanTriLoaiTin;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index'); 
    }

    public function dstin()
    {
        $data = QuanTriTin::all()->sortByDesc('id');
        return view('admin.listtin', ['data' => $data]);
    }

    public function themtin()
    {
        $data = QuanTriLoaiTin::with('tin')->orderByDesc('id')->get();
        return view('admin.themtin', ['data' => $data]);
    }

    public function dsloaitin()
    {
        return view('admin.dsloaitin');
    }

    public function dsuser()
    {
        return view('admin.dsuser');
    }

    public function themtinmoi()
    {
        // Logic thêm tin mới
    }

    public function xoa($id)
    {
        // Logic xóa tin theo id
    }

    public function capnhat($id)
    {
        // Logic cập nhật tin theo id
    }
}
