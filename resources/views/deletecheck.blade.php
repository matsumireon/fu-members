@include("parts.header")
@Auth
@include("parts.nav")

<body>
	<div id="wrap" class="text-center">
		<div id="head">
			<h1>社員情報削除</h1>
		</div>

		<div id="content" class="text-center">
			<p class=title>以下の内容を削除します</p>
			<form action="delete" id="create-account" method="POST" enctype="multipart/form-data">
        @csrf
		<dl>
			<dt>名前</dt>
			<dd>{{$name}}</dd>
			<input type="hidden" id="name" name="name" value={{$name}}>
			<dt>メールアドレス</dt>
			<dd>{{$email}}</dd>
			<input type="hidden" id="email" name="email" value={{$email}}>
			<dt>お住まいの都道府県</dt>
			<dd>{{$address}}</dd>
			<input type="hidden" id="address" name="address" value={{$address}}>
			<dt>社員番号</dt>
			<dd>{{$number}}</dd>
			<input type="hidden" id="number" name="number" value={{$number}}>
			<dt>趣味</dt>
			<dd>{{$hobby}}</dd>
			<input type="hidden" id="hobby" name="hobby" value={{$hobby}}>
			<dt>スキル</dt>
			<dd>{{$skill}}</dd>
			<input type="hidden" id="skill" name="skill" value={{$skill}}>
			<dt>メッセージ</dt>
			<dd>{{$message}}</dd>
			<input type="hidden" id="message" name="message" value={{$message}}>
			<dt>画像</dt>
			<img src=" {{ asset('storage/'.$picture)}}" width="100" alt="" />
			<input type="hidden" id="picture" name="picture" value={{$picture}}>
			<input type="hidden" id="google_id" name="google_id" value={{$google_id}}>
		</dl>
		<button type="button" class="btn btn-outline-primary text-center m-3" onClick="history.back()">戻る</button>
		| <button type="submit" class="btn btn-outline-danger text-center m-3">削除する</button>

			</form>
		</div>

	</div>

	@endauth

	@guest
	  <div class="members col text-center m-5">
		<a class="btn btn-outline-primary rounded-pill btn-lg" href="{{ url('/auth/redirect') }}">ログイン</a>
	  </div>
	@endguest


	@include("parts.footer")