<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
class QuanTriTin extends Model
{
    use HasFactory;
    protected $table='new';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $data=['ngayDang'];
    protected $fillable = [
        'tieuDe', 
        'tomTat', 
        'urlHinh', 
        'ngayDang', 
        'noiDung', 
        'idLT',
        'xem',
        'noiBat', 
        'anHien', 'tags', 'lang'
    ];

    protected $rules = [
        'tieuDe' => 'required',
        'tomTat' => 'required',
        'urlHinh' => 'required',
        'idLT' => 'required'
    ];

    protected $messages = [
        'required' => ':attribute không được để trống.',
    ];

    /**
     * Định nghĩa mối quan hệ với model QuanTriLoaiTin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function loai_tin()
    {
        return $this->belongsTo('App\Models\QuanTriLoaiTin', 'idLT', 'id');
    }
}
