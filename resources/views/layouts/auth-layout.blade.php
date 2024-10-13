<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Authentication') }}</title>
  <link rel="icon" href="{{ asset('img/logo-sika3.png') }}" type="image/x-icon">

  {{-- script --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- font --}}
</head>
<body class="font-sans">
  <div class="bg-blue-500 min-h-screen flex items-center justify-center">
    <div class="absolute top-1/2 h-[40vw] w-[40vw] -translate-y-1/2 rounded-full bg-blue-700"></div>
    {{ $slot }}
  </div>
</body>
</html>