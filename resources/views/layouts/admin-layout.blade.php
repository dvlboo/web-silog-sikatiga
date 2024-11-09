<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'PT. Semen Indonesia Logistik') }}</title>
  <link rel="icon" href="{{ asset('img/logo-sika3.png') }}" type="image/x-icon">

  {{-- script --}}
  @vite(['resources/css/app.css', 'resources/js/admin.js'])

  {{-- font --}}
</head>
<body class="font-sans">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-gray-100 flex flex-col">
      {{-- logo --}}
      <a href="{{ url('/') }}" class="flex gap-2 items-center justify-center py-4">
        <img src="{{ asset('img/logo-sika3.png') }}" alt="logo-sika3" class="h-8 w-auto">
        <h1 class="text-2xl text-blue-600 font-black">SIKA<span class="text-green-400">TIGA</span></h1>
      </a>
        
      {{-- menu --}}
      <ul class="menu rounded-box w-auto px-4 py-2 mt-5 flex-1">
        <li>
          <details open>
            <summary>APD</summary>
            <ul>
              <li><a href="{{ url('/admin/add-apd') }}" class="block py-2 px-3 rounded hover:bg-gray-700">Tambah APD</a></li>
              <li><a href="{{ url('/admin/show-apd') }}" class="block py-2 px-3 rounded hover:bg-gray-700">Data APD</a></li>
            </ul>
          </details>
        </li>
        <li><a>APAR & P3K</a></li>
        <li><a>Color Code</a></li>
        <li><a href="{{ url('/admin/risk-register') }}" class="block py-2 px-3 rounded hover:bg-gray-700">Risk Register</a></li>
      </ul>

      <div class="border-t border-gray-700 p-4">
        <a href="{{ route('logout') }}" class="block py-2 px-3 rounded bg-red-600 text-center">Logout</a>
      </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="flex items-center justify-between bg-white shadow px-6 py-3">
        <h1 class="text-lg font-bold">Dashboard</h1>
        
        <div class="flex items-center space-x-4">
          <!-- Greeting -->
          <span>Hai, {{ Auth::user()->username ?? 'Admin' }}</span>
          
          <!-- Profile Image -->
          <img src="{{ Auth::user()->photo ?? 'https://res.cloudinary.com/dqr9vycth/image/upload/v1717192588/profile_dummy.png'}}" alt="Profile Picture" class="w-10 h-10 rounded-full object-cover">
        </div>
      </header>

      <!-- Main Content -->
      <div class="flex-1 p-2 bg-gray-100">
        <div class="bg-white p-6 rounded-lg shadow-lg h-full">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>