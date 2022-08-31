<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Members;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class MembersPageController extends Controller{

	public function show(Request $request){
                $values = Members::sortable()->paginate(10);
                return view('members', compact('values'));
        }

        public function memberpage(Request $request){
                $date =Members::find($request->id);
                return view('memberpage', $date);
        }

        public function deletecheck(Request $request){
                $date =Members::find($request->id);
                return view('deletecheck', $date);
        }

        public function delete(Request $request) {       
                Members::where('google_id', $request->google_id)->delete();
                $values = Members::paginate(10);
                return view('members', compact('values'));
        }

        public function Admin(Request $request){
                $values = Members::sortable()->paginate(10);
                return view('Admin', compact('values'));
        }

}


