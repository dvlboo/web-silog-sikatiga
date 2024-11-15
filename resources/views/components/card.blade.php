@props(['image', 'name', 'size', 'stock', 'valid_until'])

<div class="card w-full bg-white shadow-lg rounded-lg overflow-hidden">
  <img src="{{ $image }}" alt="APD Image" class="h-48 w-full object-contain">
  <div class="p-4">
    <h2 class="font-bold text-xl">{{ $name }}</h2>
    <p>Ukuran: {{ $size }}</p>
    <p>Stok: {{ $stock }}</p>
    <p>Masa Berlaku: {{ \Carbon\Carbon::parse($valid_until)->format('d M Y') }}</p>
  </div>
</div>