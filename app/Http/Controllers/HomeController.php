<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use Uuid;

class HomeController extends Controller
{
    public function index(){
        $siswa = siswa::all();
        return view('siswa',compact('siswa'));
    }
    public function save(Request $request){
        $siswa = new siswa();
        $siswa->id = uuid::generate(4);
        $siswa->nama = $request->get('nama');
        $siswa->alamat = $request->get('alamat');
        $siswa->save();
        return redirect('/');
    }
    public function edit($id){
        $siswa = siswa::where('id',$id)->first();
        return view('edit',compact('siswa'));
    }
    public function update(Request $request, $id){
        $siswa = siswa::where('id',$id)->first();

        $siswa->id = $siswa->id;
        $siswa->nama = $request->get('nama');
        $siswa->alamat = $request->get('alamat');
        $siswa->save();
        return redirect('/');
    }
    public function delete($id){
        $siswa = siswa::where('id',$id)->first();
        $siswa->delete();
        return redirect('/');
    }
}
