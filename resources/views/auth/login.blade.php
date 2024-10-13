<x-auth-layout>
  <div class="card max-w-lg w-full bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-xl font-bold">Masuk Akun</h2>
      <p class="text-sm">Buat kamu yang sudah terdaftar, silahkan masuk ke akun kamu</p>
      <form id="loginForm" class="mb-t" method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <div class="mt-4">
          <input type="email" placeholder="Alamat E-Mail" name="email" class="input input-bordered input-info w-full" />
        </div>
        @error('email')
          <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
        @enderror

        {{-- Password --}}
        <div class="mt-5 relative">
          <div>
            <input id="passwordInput" type="password" placeholder="Password" name="password" class="input input-bordered input-info w-full pr-10" />
            <img id="toggleIcon" width="19" height="19" 
              src="https://img.icons8.com/fluency-systems-filled/19/invisible.png" alt="visible"
              class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer"
              style="filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(180deg);" 
              onclick="togglePasswordVisibility()" />
          </div>
        </div>
        @error('password')
          <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
        @enderror

        <div class="w-full mt-8">
          <button class="btn btn-primary w-full">
            Masuk
          </button>
        </div>
      </form>

      <div class="mt-4 flex text-sm">
        <p >Belum punya akun? <a href="{{ route('register') }}" class="link link-primary">Daftar</a></p>
        <a href="{{ route('homepage') }}" class="link link-primary">Kembali</a>
      </div>
    </div>
  </div>
</x-auth-layout>

