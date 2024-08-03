<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Các thuộc tính có thể được gán giá trị hàng loạt
    protected $fillable = ['noiDung', 'id_user', 'id_news'];

    // Thiết lập mối quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Thiết lập mối quan hệ với model News
    public function news()
    {
        return $this->belongsTo(News::class, 'id_user');
    }
}
