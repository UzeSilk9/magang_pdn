<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\updaterequest;
use App\Http\Requests\UserRequest;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\facades\file;

class HomeController extends Controller
{
    public function index(){
        $data['user'] = Pengguna::get();
        return view('home/home',$data);
    }
    public function tambah(){
        return view('home/tambah');
    }
    public function save(UserRequest $r){
        if($r->validated()){
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/',$foto);

            Pengguna::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telpon' => $r->telpon,
                'foto' => $foto
            ]);
       return redirect('home')->with('pesan','input data berhasil');
        }
       
    }

    public function edit($id){
        $data['pengguna']= Pengguna::where('id',$id)->first();

        return view('home/edit',$data);
    }
    

    public function update(updaterequest $r, $id){
        if($r->validated()){
            if($r->foto){
                $cek = Pengguna::where('id',$id)->first();
                if(file::exists(public_path('foto/'.$cek->foto))){
                    file::delete(public_path('foto/'.$cek->foto));
                }
                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto/',$foto);

                $data['foto'] = $foto;
            }
            $data['nama'] = $r->nama;
            $data['email'] = $r->email;
            $data['telpon'] = $r->telpon;

            Pengguna::where('id',$id)->update($data);

            return redirect('home');
        }
}

    public function hapus($id){
        Pengguna::where('id',$id)->delete();

        return back();
    }

    public function dash(){
        return view('home.dashboard');
    }

    public function about(){
        return view('home.about');
    }
}