<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class UpdatePageController extends Controller{

    
	public function update(Request $request){
        $date =Members::find($request->id);
        return view('update', $date);
    }
    
	public function updatego(Request $request){

        //画像が更新された場合のみ、新規に保存する。
        if($request->picture){
            $filename = date('YmdHis') . '_' . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('public', $filename);    
        }else{
            $filename = $request->old_picture;
        }
        
        Members::where('id', $request->id)->update([
            'name' => $request->name, 
            'email' => $request->email,
            'message' => $request->message,
            'address'=>$request->address,
            'skill'=>$request->skill,
            'hobby'=>$request->hobby,
            'picture' => $filename,
            'google_id' => $request->google_id,
            'number'=>$request->number

        ]);

        $values = Members::paginate(10);
        return view('/ok', compact('values'));
	}
    
    public function Adminupdate(Request $request){
        
        Members::where('google_id', $request->id)->update([
            'Admin'=>$request->Admin,
        ]);

        $values = Members::paginate(10);
        return view('/ok', compact('values'));
	}
}


