<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin;

class AdminController extends Controller
{
    public function __construct()
      {
        $this->middleware('auth:admin');
      }

    public function index(){
    	return view('admin.index');
    }

    
}
