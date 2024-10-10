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
      class="hero min-h-screen"
      style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-neutral-content text-center">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
          <p class="mb-5">
            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
            quasi. In deleniti eaque aut repudiandae et a id nisi.
          </p>
          <button class="btn btn-primary">Get Started</button>
        </div>
      </div>
    </div>

    <x-footer></x-footer>
  </div>
</body>
</html>