@extends('layout')
@section('title', 'ブログ一覧')
@section('content')

<div class="row">
    <div class="offset-md-3 col-md-6">
        <h3>ブログ一覧</h3>
        @if (session('err_msg'))
            <p class="text-danger">
                {{ session('err_msg') }}
            </p>
        @endif
        
        @if($blogs->isNotEmpty())
        <div class="blog-list">
            @foreach($blogs as $blog)
            <article class="border-bottom pt-1">
                <header>
                    <img src="{{ asset('img/circle_user.svg') }}" width="6%" alt="">
                    <span>{{ date("Y年m月d日",strtotime($blog->created_at))  }}</span>
                </header>
                <h4 style="padding-left: 6%;">
                    <a href="/blog/{{ $blog->id }}" class="text-dark">
                        {{ $blog->title  }}
                    </a>
                </h4>
                <footer style="padding-left: 6%;">
                    <i class="fa-regular fa-heart like"></i>
                    <span>0</span>
                </footer>
            </article>
            @endforeach
            <div class="my-pagination">
                <div class="d-flex justify-content-center py-3">
                <span class="mx-3">1 / 1</span>
                <button type="button" class="my-pagination-button">＞</button>
                </div>
            </div>
        </div>
        @else
        <p>投稿された記事はありません</p>
        @endif
    </div>
</div>
<!-- row -->
<script>
function checkDelete(){
    if(window.confirm('削除してよろしいですか？')){
        return true;
    } else {
        return false;
    }
}
</script>
@endsection