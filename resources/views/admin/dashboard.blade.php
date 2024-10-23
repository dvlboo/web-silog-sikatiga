@extends('layouts.admin-layout')

@section('content')
<div class="flex flex-col justify-center items-center">
  <h1 class="text-4xl font-bold my-6">Selamat Datang di Dashboard</h1>
  
  {{-- logo --}}
  <div class="flex gap-2 items-center justify-center">
    <img src="{{ asset('img/logo-sika3.png') }}" alt="logo-sika3" class="h-40 w-auto">
    <h1 class="text-8xl text-blue-600 font-black">SIKA<span class="text-green-400">TIGA</span></h1>
  </div>

  <div>
    <p>Selamat bertugas kepada saudara 
      @auth
        {{ Auth::user()->username }}
      @else
        Admin
      @endauth
    </p>
</div>

  <p class="text-2xl font-semibold my-6">Salam Sehat, Salam Safety</p>
</div>
  
@endsection