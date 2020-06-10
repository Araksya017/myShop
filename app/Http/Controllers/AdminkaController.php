<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminkaController extends Controller
{
    public function login(){
        return view('adminka.admin_login');
    }
}
