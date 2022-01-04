<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function index()
    {
        $data = \App\Models\data::all();
        return view('data',[
            'data' => $data,
            'judul'=> 'Dasboard'
        ]);   
    }

    public function input(Request $request)
    {
        \App\Models\data::create($request->all());
        return redirect('/data')->with('sukses', 'Data Berhasil Di Input');
    }

    public function Edit($id)
    {
        $dbarang = \App\Models\data::find($id);
        return view('/edit', [
            'info' => $dbarang,
            'judul'=> 'Edit Data'
        ]); 
    }

    public function update(Request $request,$id)
    {
        $dbarang = \App\Models\data::find($id);
        $dbarang->update($request->all());
        
        return redirect('/data');
    }
    public function deleted($id)
    {
        $dbarang = \App\Models\data::find($id);
        $dbarang->delete($dbarang);
        return redirect('/data')->with('sukses', 'Data Berhasil Di Hapus');

    }
}
