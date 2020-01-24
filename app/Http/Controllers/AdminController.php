<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return "Login Page";
    }

    public function homePage(){
    	return view('admin.homePage');
    }
}
