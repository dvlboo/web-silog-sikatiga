@extends('layouts.admin-layout')

@section('content')
  <div class="mb-6">
    <h2 class="text-xl font-bold">Risk Register Management</h2>
  </div>

  <!-- Table for Risk Register Management -->
  <div class="bg-white shadow-md rounded-lg overflow-x-auto">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-2 px-6 text-left">No</th>
          <th class="py-2 px-6 text-left">Nama Pelapor</th>
          <th class="py-2 px-6 text-left">Nama Temuan</th>
          <th class="py-2 px-6 text-left">Deskripsi</th>
          <th class="py-2 px-6 text-left">Tanggal Temuan</th>
          <th class="py-2 px-6 text-left">Photo</th>
          <th class="py-2 px-6 text-left">Pengendalian</th>
          <th class="py-2 px-6 text-left">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach($risks as $index => $risk)
        <tr class="border-b">
          <td class="py-2 px-6">{{ $index + 1 }}</td>
          <td class="py-2 px-6">{{ $risk['name_reporter'] }}</td>
          <td class="py-2 px-6">{{ $risk['name_finding'] }}</td>
          <td class="py-2 px-6">{{ $risk['description'] }}</td>
          <td class="py-2 px-6">{{ $risk['date'] }}</td>
          <td class="py-2 px-6">
            <img src="{{ $risk['photo'] }}" alt="Risk Photo" class="w-12 h-12 object-cover">
          </td>
          <td class="py-2 px-6">{{ $risk['control'] }}</td>
          <td class="py-2 px-6">
            <button class="btn btn-sm btn-warning" onclick="showEditModal({{ $risk['id'] }})"><img width="21" height="21" src="https://img.icons8.com/material-rounded/21/edit--v1.png" alt="edit--v1"/></button>
            <button class="btn btn-sm btn-error" onclick="confirmDelete({{ $risk['id'] }})"><img width="21" height="21" src="https://img.icons8.com/ios-glyphs/21/filled-trash.png" alt="filled-trash"/></button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection