@extends('admin.layoutadmin')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Chỉnh Sửa Tin Tức</h2>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Trang Chủ</a></li>
            <li><a>Quản Lý Loại Tin</a></li>
            <li class="active"><strong>Chỉnh Sửa</strong></li>
        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Thông Tin Tin Tức</h5>
                </div>
                <div class="ibox-content">
                    <form method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Ngôn Ngữ</label>
                            <input type="text" name="lang" value="{{ $news->lang }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input type="text" name="tieuDe" value="{{ $news->tieuDe }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Loại Tin</label>
                            <select name="idLT" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $news->idLT == $category->id ? 'selected' : '' }}>{{ $category->ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="urlHinh">Ảnh</label>
                            <input type="file" name="urlHinh" id="urlHinh" class="form-control" required>
                            @if ($news->urlHinh)
                                <img src="{{ asset($news->urlHinh) }}" height="64" alt="Current Image">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea name="noiDung" id="Content" class="form-control">
                                {{ $news->noiDung }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
