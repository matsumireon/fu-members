@include("parts.header")
@include("parts.nav")

<h1 class="text-center m-4">社員プロフィールページ</h1>

  
  <div class="profile container text-center w-100">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-6 col-xl-6">
            <img class="m-5" src=" {{ asset('storage/'.$picture)}}" width="400" height="400" alt="" />
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="m-5">
              <h1 class="name m-3">{{$name}}</h1>
              <h4>{{$email}}</h4>
            </div>
            <div class="m-5">
              <h4 class="theme">居住地域</h4>
              <h4>{{$address}}</h4>
              <h4 class="theme">趣味</h4>
              <h4 >{{$hobby}}</h4>
              <h4 class="theme">スキル</h4>
              <h4>{{$skill}}</h4>  
            </div>
            <div class="m-3">
              <h4 class="message m-3" width="500" style="white-space:pre-wrap;">{{$message}}</h4>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-outline-primary text-center m-3" onClick="history.back()">戻る</button>

  </div>
  
  @include("parts.footer")