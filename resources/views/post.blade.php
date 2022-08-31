@include("parts.header")
@Auth
@include("parts.nav")

<div class="m-3"></div>

<form action="check" id="create-account" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="profile container text-center">
    <h1 class="m-2">社員情報を追加します</h1>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-6 col-xl-6">
        <div class="m-5">
          <h4 class="name control-label">氏名</h4>
          <div class="">
            <input type="text" id="name" name="name" maxlength="50">
          </div>
        </div>
        <div class="m-5">
          <h4 class="control-label m-3" for="email">メールアドレス</h1>
          <div class="">        
            <input type="text" id="name" name="name" maxlength="50">
          </div>
        </div>
        <div class="m-5">
          <h4 class="control-label" for="address">居住地域</h4><br>
              <div class="">
                <select id="address" name="address">
                  <option value="北海道">北海道</option>
                  <option value="青森県">青森県</option>
                  <option value="岩手県">岩手県</option>
                  <option value="宮城県">宮城県</option>
                  <option value="秋田県">秋田県</option>
                  <option value="山形県">山形県</option>
                  <option value="福島県">福島県</option>
                  <option value="茨城県">茨城県</option>
                  <option value="栃木県">栃木県</option>
                  <option value="群馬県">群馬県</option>
                  <option value="埼玉県">埼玉県</option>
                  <option value="千葉県">千葉県</option>
                  <option value="東京都">東京都</option>
                  <option value="神奈川県">神奈川県</option>
                  <option value="新潟県">新潟県</option>
                  <option value="富山県">富山県</option>
                  <option value="石川県">石川県</option>
                  <option value="福井県">福井県</option>
                  <option value="山梨県">山梨県</option>
                  <option value="長野県">長野県</option>
                  <option value="岐阜県">岐阜県</option>
                  <option value="静岡県">静岡県</option>
                  <option value="愛知県">愛知県</option>
                  <option value="三重県">三重県</option>
                  <option value="滋賀県">滋賀県</option>
                  <option value="京都府">京都府</option>
                  <option value="大阪府">大阪府</option>
                  <option value="兵庫県">兵庫県</option>
                  <option value="奈良県">奈良県</option>
                  <option value="和歌山県">和歌山県</option>
                  <option value="鳥取県">鳥取県</option>
                  <option value="島根県">島根県</option>
                  <option value="岡山県">岡山県</option>
                  <option value="広島県">広島県</option>
                  <option value="山口県">山口県</option>
                  <option value="徳島県">徳島県</option>
                  <option value="香川県">香川県</option>
                  <option value="愛媛県">愛媛県</option>
                  <option value="高知県">高知県</option>
                  <option value="福岡県">福岡県</option>
                  <option value="佐賀県">佐賀県</option>
                  <option value="長崎県">長崎県</option>
                  <option value="熊本県">熊本県</option>
                  <option value="大分県">大分県</option>
                  <option value="宮崎県">宮崎県</option>
                  <option value="鹿児島県">鹿児島県</option>
                  <option value="沖縄県">沖縄県</option>
                </select>
              </div>
        <div class="m-5">
          <h4 class="control-label" for="number">社員番号</h4><br>
          <div class="">
            <input type="number" id="number" name="number" maxlength="100">
          </div>
        </div>

      </div>

    </div>
    <div class="col-md-12 col-lg-6 col-xl-6">

        <div class="m-5">
            <h4 class="control-label" for="hobby">趣味</h4><br>
            <div class="">
              <textarea type="text" id="hobby" name="hobby" maxlength="100" placeholder="趣味を記入して下さい"></textarea>
            </div>
        </div>
        
        <div class="m-5">
          <h4 class="control-label" for="skill">スキル</h4><br>
          <div class="">
            <textarea type="text" id="skill" name="skill" maxlength="100" placeholder="スキルを記入して下さい"></textarea>
          </div>
        </div>
        <div class="m-5">
          <h4 class="control-label" for="message">メッセージ</h4><br>
          <div class="">
            <textarea type="text" id="message" name="message" maxlength="100" placeholder="メッセージを入力してください（100字以内）"></textarea>
          </div>
        </div>
        <div class="m-5">
          <h4 class="control-label" for="picture">画像</h4><br>
          <div class="">
            <input type="file" id="picture" name="picture" size="35" accept="image/*" value="" required>  
          </div>
        </div>
    </div>

    <input type="hidden" id="google_id" name="google_id" value={{Auth::user()->google_id}}>

    <button type="button" class="btn btn-outline-primary text-center m-3" onClick="history.back()">戻る</button><button type="submit" class="btn btn-outline-success text-center m-3">登録内容の確認へ</button>

  </div>
</div>

</form>


@if ($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif

@endauth

@guest
<div class="members col text-center m-5">
<a class="btn btn-outline-primary rounded-pill btn-lg" href="{{ url('/auth/redirect') }}">ログイン</a>
</div>
@endguest

@include("parts.footer")
