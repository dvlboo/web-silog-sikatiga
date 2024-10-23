<div {{ $attributes->merge(['class' => 'top-0 left-0 w-full z-50 flex flex-row px-6 py-3 bg-white border-b border-blue-600 items-center justify-between']) }}>
  
  {{-- logo --}}
  <a href="{{ url('/') }}" class="flex gap-2 items-center">
    <img src="{{ asset('img/logo-sika3.png') }}" alt="logo-sika3" class="h-10 w-auto">
    <h1 class="text-4xl text-blue-600 font-black">SIKA<span class="text-green-400">TIGA</span></h1>
  </a>

  {{-- menu --}}
  <div class="flex flex-row justify-between gap-10 text-blue-600">
    <a class="font-semibold hover:font-bold" href="">APD</a>
    <a class="font-semibold hover:font-bold" href="">APAR & P3K</a>
    <a class="font-semibold hover:font-bold" href="">COLOR CODE</a>
    <a class="font-semibold hover:font-bold" href="{{ url('/risk-register') }}">RISK REGISTER</a>
  </div>

  {{-- profile --}}
  <div class="flex flex-row items-center gap-2">
    @if (Auth::check())
    <h3 class="font-bold text-blue-600">Hai, {{ Auth::user()->username }}</h3>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="profile"
            src="{{ Auth::user()->photo }}" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li><a class="font-semibold" href="">Dashboard</a></li>
        <li><a class="font-semibold" href="{{ route('logout') }}">Logout</a></li>
      </ul>
    </div> <!-- Penutup div dropdown -->
    @else
    <div class="flex gap-3">
      <a href="{{ route('login') }}" class="py-2 px-5 font-semibold text-white bg-blue-500 hover:bg-blue-700 rounded-lg">Masuk</a>
      <a href="{{ route('register') }}" class="py-2 px-5 font-semibold text-white bg-green-500 hover:bg-green-700 rounded-lg">Daftar</a>
    </div>
    @endif
  </div>

</div>