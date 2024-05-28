@extends('home.template')

@section('title')
    Halaman Home
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data User</div>
    <div>
        <a href="{{ route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
    </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border border-red-700 p-3">
                <th class="border border-red-700 p-3">No</th>
                <th class="border border-red-700 p-3">Nama</th>
                <th class="border border-red-700 p-3">Email</th>
                <th class="border border-red-700 p-3">Telepon</th>
                <th class="border border-red-700 p-3">Foto</th>
                <th class="border border-red-700 p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $i => $a)
            <tr>
                <td class="text-center border-red-700 border p-3">{{$i+1}}</td>
                <td class="text-center border-red-700 border p-3">{{$a->nama}}</td>
                <td class="text-center border-red-700 border p-3">{{$a->email}}</td>
                <td class="text-center border-red-700 border p-3">{{$a->telpon}}</td>
                <td class="text-center border-red-700 border p-3"><img class="max-w-32" src="{{asset('foto/'.$a->foto)}}" alt=""></td>
                <td class="border-red-700 border p-3">
                    <div class="flex gap-3 justify-center ">
                    <a href="{{ route('edit',$a->id) }}" class="bg-green-500 flex items-center justify-center hover:bg-green-400 text-white rounded-md w-14 h-8">Edit</a>
                    <a href="{{ route('hapus',$a->id) }}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                    </div>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection