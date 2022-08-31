@include("parts.header")
@Auth
@include("parts.nav")

<h1 class="text-center m-4">管理者ページ</h1>

<h4 class="theme text-center m-2">名前クリックでプロフィールページに飛びます</h2>

  <section class="members testimonials text-center bg-light m-4">
    <div class="center-block">
      <button type="button" class="btn btn-outline-secondary text-center m-1">@sortablelink('number','社員番号の昇降切り替え')</button>
    </div>
    
    <div class="members text-center">
        <div class="row">
          @foreach($values as $value)

            <div class="col-sm-5 col-md-5 col-lg-3 col-xl-2 m-4 w-auto h-auto">
              <div class="mx-auto mb-5 mb-lg-2 w-auto h-auto">
                <img class="img-fluid rounded-circle mb-3" src="{{ asset('storage/'.$value->picture)}}" alt="">
                <form action="/memberpage" method="post">
                  @csrf
                  <div class="col-lg-9 mx-auto">
                    <input type="hidden" id="id" name="id" value={{$value->id}}>
                    <input type="hidden" id="name" name="name" value={{$value->name}}>
                    <input type="hidden" id="email" name="email" value={{$value->email}}>
                    <input type="hidden" id="address" name="address" value={{$value->address}}>
                    <input type="hidden" id="hobby" name="hobby" value={{$value->hobby}}>
                    <input type="hidden" id="skill" name="skill" value={{$value->skill}}>
                    <input type="hidden" id="message" name="message" value={{$value->message}}>
                    <input type="hidden" id="picture" name="picture" value={{$value->picture}}>
                    <input type="hidden" id="google_id" name="google_id" value={{$value->google_id}}>
                    <input type="hidden" id="number" name="number" value={{$value->number}}>
                  </div>
                  <input class="name m-1" type="submit" value={{$value->name}}>
                </form>
                <p class="email m-2">{{$value->email}}</p>
                <p class="message font-weight-light mb-0">"{{$value->message}}"</p>
                
              </div>

              <form action="/update" method="POST">
                @csrf
                <div class="col-lg-9 mx-auto m-3">
                  <input type="hidden" id="id" name="id" value={{$value->id}}>
                  <input type="hidden" id="name" name="name" value={{$value->name}}>
                  <input type="hidden" id="email" name="email" value={{$value->email}}>
                  <input type="hidden" id="address" name="address" value={{$value->address}}>
                  <input type="hidden" id="hobby" name="hobby" value={{$value->hobby}}>
                  <input type="hidden" id="skill" name="skill" value={{$value->skill}}>
                  <input type="hidden" id="message" name="message" value={{$value->message}}>
                  <input type="hidden" id="picture" name="picture" value={{$value->picture}}>
                  <input type="hidden" id="google_id" name="google_id" value={{$value->google_id}}> 
                  <input type="hidden" id="number" name="number" value={{$value->number}}>
                  <button type="submit" class="btn btn-outline-success text-center m-1">編集</button>
                </div>
              </form>
              
              <form action="/deletecheck" method="POST">
                @csrf
                <div class="col-lg-9 mx-auto m-3">
                  <input type="hidden" id="id" name="id" value={{$value->id}}>
                  <input type="hidden" id="name" name="name" value={{$value->name}}>
                  <input type="hidden" id="email" name="email" value={{$value->email}}>
                  <input type="hidden" id="address" name="address" value={{$value->address}}>
                  <input type="hidden" id="hobby" name="hobby" value={{$value->hobby}}>
                  <input type="hidden" id="skill" name="skill" value={{$value->skill}}>
                  <input type="hidden" id="message" name="message" value={{$value->message}}>
                  <input type="hidden" id="picture" name="picture" value={{$value->picture}}>
                  <input type="hidden" id="google_id" name="google_id" value={{$value->google_id}}>
                  <input type="hidden" id="number" name="number" value={{$value->number}}>
                  <button type="submit" class="btn btn-outline-danger text-center m-1">削除</button>
                </div>
              </form>
              
            </div>
          @endforeach 
          
  </section>

  <div class="col-lg-2 mx-auto m-5">
    {{ $values->appends(request()->query())->links() }}
  </div>

  @endauth

  @guest
    <div class="members col text-center m-5">
      <a class="btn btn-outline-primary rounded-pill btn-lg" href="{{ url('/auth/redirect') }}">ログイン</a>
    </div>
  @endguest
  
@include("parts.footer")



