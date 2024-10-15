<x-auth-layout>
  <div class="card max-w-lg w-full bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title text-xl font-bold">Verifikasi OTP</h2>
      <p>Masukkan kode OTP yang telah dikirim ke email Anda.</p>
      
      @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
      @endif

      <form method="POST" action="{{ route('otp.verify') }}">
        @csrf
        <div class="my-4">
          <input type="text" name="otp_code" placeholder="Masukkan Kode OTP" class="input input-bordered w-full" />
          @error('otp_code')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary w-full">Verifikasi</button>
      </form>
    </div>
  </div>
</x-auth-layout>
  