<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //←追加。DB接続に必要なクラスをインポートする。
use Illuminate\Support\Facades\Auth;

$param=[];

class PostController extends Controller
{

    public function post(Request $request) {
        return view('post'); 
    }

    //formの値を取得し$dataに代入
    //確認画面に表示。
    public function check(Request $request) {

        //入力バリデーション
        $request->validate([
            'email' => 'required|unique:members',
            'google_id' => 'required|unique:members',
        ],
        [
            'email.unique' => 'そのメールアドレスは既に登録されています。',
            'google_id.unique' => 'あなたの情報は既に登録されています。',
        ]);

        //競合を避けるため、画像の名前に日付と時間を追加
        $filename = date('YmdHis') . '_' . $request->file('picture')->getClientOriginalName();

        $data = [
            //取得したいデータをinput要素のname属性へ。
            'name' => $request->name, 
            'email' => $request->email,
            'address'=>$request->address,
            'hobby'=>$request->hobby,
            'skill'=>$request->skill,
            'message' => $request->message,
            'picture' => $filename,
            'google_id' => $request->google_id,
            'number'=>$request->number
        ];

        $request->file('picture')->storeAs('public', $filename);

        return view('check', $data);

    }
    
    public function insert(Request $request) {

        $param = [
            //取得したいデータをinput要素のname属性へ。
            'name' => $request->name, 
            'email' => $request->email,
            'address'=>$request->address,
            'hobby'=>$request->hobby,
            'skill'=>$request->skill,
            'message' => $request->message,
            'picture' => $request->picture,
            'google_id' => $request->google_id,
        ];

        //DBに接続しデータを挿入する。第１パラメータにSQL文、第２に$paramを。
        DB::insert('insert into members (name, email, address, hobby, skill, message, picture, google_id) values (:name, :email, :address, :hobby, :skill, :message, :picture, :google_id)', $param);
        //完了ページに遷移する
        return redirect('/ok');
    }

    public function ok(){
        return view('ok');
	}


}