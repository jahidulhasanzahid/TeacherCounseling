<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\admin;

class UserController extends Controller
{

	public function __construct()
      {
        $this->middleware('auth:admin');
      }

    
    public function userList(){
    	$users = User::where('status', 'pending')->orderBy('id','desc')->get();
    	return view('admin.user-list',compact('users'));
    }

    public function userListUpdate(Request $request, $id){

      $user = User::find($id);
      $user->status = 'Active';

      $user->save();

      session()->flash('success', 'User Active Now');
      return redirect()->back();
    }
}
