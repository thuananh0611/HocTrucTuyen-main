<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('teacher.index');
    }

    public function teacherstore(request $request)
    {
        //dd($request->all());
        $role = isset($request->input['role']);
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role')
        ])) {
            return redirect()->route('teacher');
        }
        return redirect()->back();
    }
}
