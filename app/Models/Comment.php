<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'noiDung',
    //     'id_user',
    //     'id_new',
    //     'name',
    //     'avatar',
    //     'level'
    // ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'id_user');
    // }

    // public function news()
    // {
    //     return $this->belongsTo(News::class, 'id_new'); // Hoặc bảng bài viết khác
    // }

    // public function parent()
    // {
    //     return $this->belongsTo(Comment::class, 'parent_id');
    // }

    // public function replies()
    // {
    //     return $this->hasMany(Comment::class, 'parent_id');
    // }
}


