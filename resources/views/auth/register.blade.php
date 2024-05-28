@extends('auth.template')

@section('title')
    Login
@endsection

@section('content')

@if(session('pesan'))
<span class="w-full text-red-500 text-2x1">{{session('pesan')}}</span>
@endif
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
  <div class="w-4/5 bg-white px-6 pb-8 pt-10 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
    <div class="mx-auto max-w-md">
      <form action="{{route('register.post')}}" method="post">
        @csrf
        <div class="flex justify-center">
          Register
        </div>
        <div class="flex flex-col p-3">
          <label for="">Name<span class="text-red-500">{{$errors->first('email')}}</span></label>
          <input type="text" name="name" value="{{old('name')}}" 
          @class([
          'p-2', 
          'border',
          'rounded-md',
          'border-gray-500',
          'border-red-500'=>$errors->has('name')?? false])>
        </div>
        <div class="flex flex-col p-3">
          <label for="">Email <span class="text-red-500">{{$errors->first('email')}}</span></label>
          <input type="email" name="email" value="{{old('email')}}" @class(['p-2', 'border', 'rounded-md', 'border-gray-500', 'border-red-500'=>$errors->has('email')?? false])>
        </div>
        <div class="flex flex-col p-3">
          <label for="">Password <span class="text-red-500">{{$errors->first('password')}}</span></label>
          <input type="password" name="password" value="{{old('password')}}" @class(['p-2', 'border', 'rounded-md', 'border-gray-500', 'border-red-500'=>$errors->has('password')?? false])>
        </div>
        <div class="flex justify-end p-3">
          <button class="bg-blue-500 w-1/2 hover:bg-blue-400 text-white p-2 rounded-md" type="submit">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
@endsection