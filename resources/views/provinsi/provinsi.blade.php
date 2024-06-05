@extends('home.template')

@section('title')
    Halaman Mata Pelajaran
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data Mata Pelajaran</div>
    <div>
        <a href="{{ route('tambahm') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
    </div> 
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border border-red-700 p-3">
                <th class="border border-red-700 p-3">No</th>
                <th class="border border-red-700 p-3">Nama Mapel</th>
                <th class="border border-red-700 p-3">Guru</th>
                <th class="border border-red-700 p-3">Kelas</th>
                <th class="border border-red-700 p-3">Jadwal</th>
                <th class="border border-red-700 p-3">Gambar Buku</th>
                <th class="border border-red-700 p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelajaran as $i => $a)
            <tr class="border border-red-700 p-3">
               <td class="border border-red-700 p-3">{{$i+1}}</td>
               <td class="border border-red-700 p-3">{{$a->namamapel}}</td>
               <td class="border border-red-700 p-3">{{$a->guru}}</td>
               <td class="border border-red-700 p-3">{{$a->kelas}}</td>
               <td class="border border-red-700 p-3">{{$a->jadwal}}</td>
               <td class="border border-red-700 p-3"><img class="max-w-32" src="{{asset('gambarbuku/'.$a->gambarbuku)}}" alt=""></td>
               <td >
                <div class="flex gap-3 justify-center">
                    <a href="{{ route('editm',$a->id) }}" class="bg-green-500 flex items-center justify-center hover:bg-green-400 text-white rounded-md w-14 h-8">Edit</a>
                    <a href="{{ route('hapusm',$a->id) }}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                </div>
               </td>
               
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection