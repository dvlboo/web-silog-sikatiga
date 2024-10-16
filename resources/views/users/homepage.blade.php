<x-layout>
  
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

  {{-- partner --}}
  <div class="container mx-auto my-10">
    <h2 class="text-4xl font-bold text-center mb-5">Our Partner</h2>

    <div class="flex flex-row justify-around items-center">
      <div class="bg-white p-5 shadow-md rounded-md">
        <img src="{{ asset('img/logo-silog.png') }}" alt="logo-silog" class="h-14 w-auto mx-auto">
      </div>
      <div class="bg-white p-5 shadow-md rounded-md">
        <img src="{{ asset('img/logo-silog.png') }}" alt="logo-silog" class="h-14 w-auto mx-auto">
      </div>
      <div class="bg-white p-5 shadow-md rounded-md">
        <img src="{{ asset('img/logo-silog.png') }}" alt="logo-silog" class="h-14 w-auto mx-auto">
      </div>
    </div>
  </div>
  
  {{-- news --}}
  <div class="container mx-auto my-10">
    <h2 class="text-4xl font-bold text-center mb-5">Latest News</h2>

    <div class="grid grid-cols-3 gap-5">
      <div class="bg-white p-5 shadow-md rounded-md">
        <img src="https://cdn.suaranetwork.com/images/2024/07/25/aa8a7719af4c.jpg" alt="news" class="h-48 w-full object-cover rounded-md">
        <h3 class="text-xl font-bold mt-3">Lorem ipsum dolor sit amet</h3>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec...</p>
      </div>
      <div class="bg-white p-5 shadow-md rounded-md">
        <img src="https://cdn.suaranetwork.com/images/2024/07/25/aa8a7719af4c.jpg" alt="news" class="h-48 w-full object-cover rounded-md">
        <h3 class="text-xl font-bold mt-3">Lorem ipsum dolor sit amet</h3>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec...</p>
      </div>
      <div class="bg-white p-5 shadow-md rounded-md">
        <img src="https://cdn.suaranetwork.com/images/2024/07/25/aa8a7719af4c.jpg" alt="news" class="h-48 w-full object-cover rounded-md">
        <h3 class="text-xl font-bold mt-3">Lorem ipsum dolor sit amet</h3>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec...</p>
      </div>
    </div>
  </div>

</x-layout>