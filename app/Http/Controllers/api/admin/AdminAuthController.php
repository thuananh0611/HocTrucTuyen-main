<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    public function AdminLogin(){
        return view('auth.admin.index');
    }
}
