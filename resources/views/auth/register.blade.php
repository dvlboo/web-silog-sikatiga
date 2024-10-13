<x-auth-layout>
  <div class="card max-w-lg w-full bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-xl font-bold">Pendaftaran</h2>
      <p class="text-sm">Mohon Isi data berikut dengan benar</p>
      <form id="registerForm" class="mb-t" method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Nama Lengkap --}}
        <div class="my-4">
          <input type="text" placeholder="Nama Lengkap" name="name" class="input input-bordered input-info w-full" />
        </div>

        {{-- Username --}}
        <div class="my-4">
          <input type="text" placeholder="Username" name="username" class="input input-bordered input-info w-full" />

          @error('username')
            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Email --}}
        <div class="my-4">
          <input type="email" placeholder="Alamat E-Mail" name="email" class="input input-bordered input-info w-full" />
          
          @error('email')
            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Password --}}
        <div class="mt-4 relative">
          <input id="passwordInput" type="password" placeholder="Password" name="password" class="input input-bordered input-info w-full pr-10" />
          <img id="toggleIcon" width="19" height="19" 
            src="https://img.icons8.com/fluency-systems-filled/19/invisible.png" alt="visible"
            class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer"
            style="filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(180deg);" 
            onclick="togglePasswordVisibility()" />
        </div>
        
        {{-- Confirm Password --}}
        <div class="mt-4 relative">
          <input id="confirmPasswordInput" type="password" name="confirmPassword" placeholder="Konfirmasi Password" class="input input-bordered input-info w-full pr-10" />
          <img id="toggleIconConfirm" width="19" height="19" 
            src="https://img.icons8.com/fluency-systems-filled/19/invisible.png" alt="invisible"
            class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" 
            style="filter: invert(50%) sepia(100%) saturate(500%) hue-rotate(180deg);" 
            onclick="togglePasswordVisibility()"/>
        </div>

        <div class="w-full mt-8">
          <button class="btn btn-primary w-full">
            Daftar
          </button>
        </div>
      </form>

      <div class="mt-4 flex text-sm">
        <p>Sudah punya akun? <a href="{{ route('login') }}" class="link link-primary">Masuk</a></p>
        <a href="{{ route('homepage') }}" class="link link-primary">Kembali</a>
      </div>
    </div>

    {{-- @if ($errors->any())
      <div id="alertBox" class="fixed top-0 left-0 w-full bg-red-500 text-white text-center py-2 z-50">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}
  </div>
</x-auth-layout>

{{-- <script>
  setTimeout(function() {
    const alertBox = document.getElementById('alertBox');
    if (alertBox) {
      alertBox.style.transition = 'opacity 0.5s';
      alertBox.style.opacity = 0;
      setTimeout(() => alertBox.remove(), 500);
    }
  }, 5000);
</script> --}}
