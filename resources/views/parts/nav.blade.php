<!-- ナビゲーションメニュー -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="nav navbar-brand text-dark">メニュー</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <a class="nav-link text-dark" href="{{ url('/members') }}">社員紹介ページ<span class="sr-only">(current)</span></a>
            @if(Auth::user()->Admin == 1)
                <a class="nav-link text-dark" href="{{ url('/post') }}">社員を追加する<span class="sr-only">(current)</span></a>
                <a class="nav-link text-dark" href="{{ url('/Admin') }}">管理者ページ</a>
            @endif
            <a class="nav-link text-dark" href="{{ url('/logout') }}">ログアウト</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-link text-dark">{{Auth::user()->name}}さん ようこそ</a>
        </div>
    </div>
    </nav>

