<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'PT. Semen Indonesia Logistik') }}</title>
  <link rel="icon" href="{{ asset('img/logo-sika3.png') }}" type="image/x-icon">

  {{-- script --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

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
      <nav class="flex-1 px-4 py-2 mt-5">
        <a href="" class="block py-2 px-3 rounded hover:bg-gray-700">APD</a>
        <a href="" class="block py-2 px-3 rounded hover:bg-gray-700">APAR & P3K</a>
        <a href="" class="block py-2 px-3 rounded hover:bg-gray-700">Color Code</a>
        <a href="" class="block py-2 px-3 rounded hover:bg-gray-700">Risk Register</a>
      </nav>

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
                <span>Hai, {{ Auth::user()->username ?? 'hai' }}</span>
                
                <!-- Profile Image -->
                <img src="{{ Auth::user()->photo ?? 'ahi'}}" alt="Profile Picture" class="w-10 h-10 rounded-full object-cover">
            </div>
        </header>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                @yield('content')
            </div>
        </div>
    </div>
  </div>
    
</body>
</html>