@extends('home.template')

@section('title')
    Edit Data
@endsection

@section('content')

<form action="{{route('updatem',$pelajaran->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col gap-2">
        <label for="">Nama Mata Pelajaran</label>
        <input type="text" name="namamapel" value="{{$pelajaran->namamapel}}" class="p-2 border rounded-md">
        <span>{{$errors->first('namamapel')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Guru</label>
        <input type="text" name="guru" value="{{$pelajaran->guru}}" class="p-2 border rounded-md">
        <span>{{$errors->first('guru')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="{{$pelajaran->kelas}}" class="p-2 border rounded-md">
        <span>{{$errors->first('kelas')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Jadwal</label>
        <input type="text" name="jadwal" value="{{$pelajaran->jadwal}}" class="p-2 border rounded-md">
        <span>{{$errors->first('jadwal')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Gambar Buku</label>
        <input type="file" name="gambarbuku" class="p-2 border rounded-md">
        <span>{{$errors->first('gambarbuku')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
    </div>
</form>

@endsection