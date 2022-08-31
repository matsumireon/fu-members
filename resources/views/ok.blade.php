@include("parts.header")
@Auth
@include("parts.nav")

<body>
  <div class="text-center">
    <h1 class="m-3">社員登録完了</h1>
    <h4 class="theme">社員の登録が完了しました</h4>
    <a class="btn btn-outline-primary rounded-pill btn-lg m-4" href="{{ url('/members') }}">社員紹介ページへ戻る</a>
 </div>
  
    @endauth

    @guest
      <div class="members col text-center m-5">
        <a class="btn btn-primary rounded-pill btn-lg" href="{{ url('/auth/redirect') }}">ログイン</a>
      </div>
    @endguest
  
    @guest
      <div class="members col text-center m-5">
        <a class="btn btn-outline-primary rounded-pill btn-lg" href="{{ url('/auth/redirect') }}">ログイン</a>
      </div>
    @endguest
    
@include("parts.footer")