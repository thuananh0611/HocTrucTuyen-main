<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('teacher.index');
    }

    public function teacherstore(request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter', 
            'password' => 'required'
        ]);

    }
}
