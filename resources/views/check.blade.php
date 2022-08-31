@include("parts.header")
@auth
@include("parts.nav")

<div class="m-3"></div>

<form action="insert" id="create-account" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="profile container text-center">
		<h1 class="m-2">登録内容の確認</h1>
		<p class="title">記入した内容を確認して、「登録する」ボタンをクリックしてください</p>

		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-6 col-xl-6">
				<div class="m-5">
					<h4 class="theme control-label">氏名</h4>
					<dd>{{$name}}</dd>
					<input type="hidden" id="name" name="name" value={{$name}}>
				</div>
				<div class="m-5">
					<h4 class="theme m-3" for="email">メールアドレス</h1>
					<dd>{{$email}}</dd>
					<input type="hidden" id="email" name="email" value={{$email}}>
				</div>
				<div class="m-5">
					<h4 class="theme" for="address">居住地域</h4><br>
					<dd>{{$address}}</dd>
					<input type="hidden" id="address" name="address" value={{$address}}>
				</div>
				<div class="m-5">
					<h4 class="theme" for="number">社員番号</h4><br>
					<dd>{{$number}}</dd>
					<input type="hidden" id="number" name="number" value={{$number}}>
				</div>

			</div>

			<div class="col-md-12 col-lg-6 col-xl-6">

				<div class="m-5">
					<h4 class="theme" for="hobby">趣味</h4><br>
					<dd>{{$hobby}}</dd>
					<input type="hidden" id="hobby" name="hobby" value={{$hobby}}>
				</div>
				
				<div class="m-5">
					<h4 class="theme" for="skill">スキル</h4><br>
					<dd>{{$skill}}</dd>
					<input type="hidden" id="skill" name="skill" value={{$skill}}>
				</div>
				<div class="m-5">
					<h4 class="theme" for="message">メッセージ</h4><br>
					<dd>{{$message}}</dd>
					<input type="hidden" id="message" name="message" value={{$message}}>
				</div>
				<div class="m-5">
					<h4 class="theme" for="picture">画像</h4><br>
					<img src=" {{ asset('storage/'.$picture)}}" width="100" alt="" />
					<input type="hidden" id="picture" name="picture" value={{$picture}}>
					<input type="hidden" id="google_id" name="google_id" value={{$google_id}}>
				</div>
			</div>

			<button type="button" class="btn btn-outline-primary text-center m-3" onClick="history.back()">書き直す</button> <button type="submit" class="btn btn-outline-success text-center m-3">登録する</button>

		</div>

	</div>

</form>


	@endauth

	@guest
	  <div class="members col text-center m-5">
		<a class="btn btn-outline-primary rounded-pill btn-lg" href="{{ url('/auth/redirect') }}">ログイン</a>
	  </div>
	@endguest

	@include("parts.footer")