<nav class="navbar navbar-expand-lg navbar-light p-4 mb-3 border" style="background-color: #fff; font-size: 1.3em;">
    <a class="navbar-brand" style="font-size: 1.4em;" href="/"><i class="fa-solid fa-otter me-2"></i>MLIAP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{ route('blogs') }}">ブログ一覧 <span class="sr-only"></span></a>
        <a class="nav-item nav-link" href="{{ route('blogPost') }}">ブログ投稿</a>
        </div>
    </div>
</nav>