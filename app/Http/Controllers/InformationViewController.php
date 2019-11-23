<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Information;


class InformationViewController extends Controller
{
    public function viewTeacherCode(){
    	$users = User::orderBy('id','asc')->get();
    	return view('welcome',compact('users'));
    }

    public function viewResult($id){
    	$show = Information::orderBy('id','asc')->where('teacher_code',$id)->get();
    	return view('result',compact('show','id'));
    }
}
