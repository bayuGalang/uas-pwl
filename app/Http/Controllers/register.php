<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index()
    {
        return view('register',[
            'judul'=>'Register'
        ]);
    }
    public function input(Request $request)
    {
        \App\Models\akun::create($request->all());
        return redirect('/data')->with('log', 'Halo Selamat Datang');
    }
}
