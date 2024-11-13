@extends('layouts.admin-layout')

@section('content')
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold">Alat Pelindung Diri</h2>
    <a href="{{ url('admin/show-apd') }}"><button class="btn btn-primary text-white">Lihat APD</button></a>
  </div>

  <div class="md:w-10/12 w-full">
    <form id="uploadAPD" method="POST" action="{{ route('apd.upload') }}" enctype="multipart/form-data">
      @csrf

      <table class="table-auto w-full">
        <tr>
          <td class="font-semibold p-2">Nama APD</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2">
            <input type="text" placeholder="Nama Alat Pelindung Diri" name="name" class="input input-bordered input-info w-96"/>
            @error('name')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </td>
        </tr>
        
        <tr>
          <td class="font-semibold p-2">Ukuran APD</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2">
            <select name="size" class="input input-bordered input-info w-96">
              <option value="" disabled selected>Pilih Ukuran APD</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
              <option value="XXL">XXL</option>
            </select>
            @error('size')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </td>
        </tr>
        
        
        <tr>
          <td class="font-semibold p-2">Jumlah APD</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2">
            <input type="number" placeholder="Jumlah APD" name="stock" class="input input-bordered input-info w-96" min="1"/>
            @error('stock')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Masa Berlaku</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2">
            <input type="date" name="valid_until" class="input input-bordered input-info w-96"/>
            @error('valid_until')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Foto Temuan</td>
          <td class="font-semibold">:</td>
          <td class="font-normal p-2">
            <input type="file" name="image" class="file-input input-bordered input-info w-96" />
            @error('image')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </td>
        </tr>

        <tr>
          <td></td>
          <td></td>
          <td class="p-2"><button type="submit" class="btn btn-primary w-96">Submit</button></td>
        </tr>
      </table>
    </form>
  </div>

@endsection