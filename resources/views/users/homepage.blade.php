<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Homepage') }}</title>
  <link rel="icon" href="{{ asset('img/logo-sika3.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')
</head>
<body class="font-sans">
  <div>
    <x-navbar></x-navbar>

    {{-- hero --}}
    <div 
      class="hero min-h-svh" 
      style="background-image: url(https://cdn.suaranetwork.com/images/2024/07/25/aa8a7719af4c.jpg);">
      <div class="hero-overlay bg-opacity-80"></div>
      <div class="hero-content flex flex-row text-white items-center justify-center" style="height: 100vh;">
        <div class="w-1/3 flex items-center justify-center">
          <img src="{{ asset('img/logo-k3.png') }}" alt="logo-k3" class="h-60 w-auto">
        </div>
        <div class="w-2/3">
          <h1 class="mb-5 text-4xl font-bold">BUDAYAKAN K3 DARI SEKARANG</h1>
          <p class="mb-3">
              Keselamatan dan Kesehatan Kerja (K3) adalah tanggung jawab bersama. Mulailah dari diri sendiri, ciptakan lingkungan kerja yang lebih aman, nyaman, dan sehat bagi semua
          </p>
          <p class="mb-3 text-xl font-bold">Salam Sehat, Salam Safety!</p>
          <p class="mb-6">Karena keselamatan Anda adalah prioritas kami</p>
          <a href="" class="p-4 bg-blue-700 rounded-btn font-semibold hover:bg-blue-900">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>

    {{-- news --}}

    <x-footer></x-footer>
  </div>
</body>
</html>