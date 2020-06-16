@extends('layouts.auth')

@section('title', 'photo/photoAdd')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
@endsection
    
@section('content')
    <h2>画像の投稿</h2>

    <div class="row">
        <form action="/photo/photoCreate" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="content">コンテツ</label>
                <textarea type="textarea" class="form-control" name="content"></textarea>
            </div>

            <div class="form-group">
                <p>画像選択</p>
                <input type="file" name="file">
            </div>
            
            <br><input type="submit" class="form-control">
        </form>
    </div>

@endsection

@section('footer')
    
@endsection