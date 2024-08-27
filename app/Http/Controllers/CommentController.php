<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// class CommentController extends Controller
// {
//     // Hiển thị danh sách bình luận
//     public function index()
//     {
//         $comments = Comment::with('user', 'news')->get(); // Eager load relationships
//         return view('admin.comments.index', compact('comments'));
//     }

//     // Hiển thị form tạo bình luận mới
//     public function create()
//     {
//         $users = User::all();
//         $news = News::all();
//         return view('admin.comments.create', compact('users', 'news'));
//     }

//     // Xử lý việc lưu bình luận mới
//     public function store(Request $request)
//     {
//         $request->validate([
//             'noiDung' => 'required|string',
//             'user_id' => 'required|exists:users,id',
//             'news_id' => 'required|exists:news,id',
//         ]);

//         Comment::create([
//             'noiDung' => $request->input('noiDung'),
//             'user_id' => $request->input('user_id'),
//             'news_id' => $request->input('news_id'),
//         ]);

//         return redirect()->route('comments.index')->with('success', 'Bình luận đã được tạo thành công.');
//     }

//     // Hiển thị form chỉnh sửa bình luận
//     public function edit(Comment $comment)
//     {
//         $users = User::all();
//         $news = News::all();
//         return view('admin.comments.edit', compact('comment', 'users', 'news'));
//     }

//     // Xử lý việc cập nhật bình luận
//     public function update(Request $request, Comment $comment)
//     {
//         $request->validate([
//             'noiDung' => 'required|string',
//             'user_id' => 'required|exists:users,id',
//             'news_id' => 'required|exists:news,id',
//         ]);

//         $comment->update([
//             'noiDung' => $request->input('noiDung'),
//             'user_id' => $request->input('user_id'),
//             'news_id' => $request->input('news_id'),
//         ]);

//         return redirect()->route('comments.index')->with('success', 'Bình luận đã được cập nhật thành công.');
//     }

//     // Xử lý việc xóa bình luận
//     public function destroy(Comment $comment)
//     {
//         try {
//             $comment->delete();
//             return redirect()->route('comments.index')->with('success', 'Bình luận đã được xóa thành công.');
//         } catch (\Exception $e) {
//             return redirect()->route('comments.index')->withErrors(['error' => "Xóa thất bại: $e"]);
//         }
//     }
// }

