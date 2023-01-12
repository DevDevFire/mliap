@extends('layout')
@section('title', 'ブログ詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{ $blog->title }}</h2>
        <div>作成日：{{ date("Y年m月d日",strtotime($blog->created_at))  }}</div>
        <div>更新日：{{ date("Y年m月d日",strtotime($blog->updated_at))  }}</div>
        <p>{{ $blog->content }}</p>
    </div>
</div>
@endsection