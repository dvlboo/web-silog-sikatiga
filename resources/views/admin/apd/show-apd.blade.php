@extends('layouts.admin-layout')

@section('content')
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold">Alat Pelindung Diri</h2>
    <a href="{{ url('admin/add-apd') }}"><button class="btn btn-success text-white">Tambah APD</button></a>
  </div>

  <!-- Table for APD Management -->
  <div class="bg-white shadow-md rounded-lg overflow-x-auto">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr class="text-center">
          <th class="py-2 px-6">No</th>
          <th class="py-2 px-6">Gambar</th>
          <th class="py-2 px-6">Nama APD</th>
          <th class="py-2 px-6">Ukuran</th>
          <th class="py-2 px-6">Jumlah Stok</th>
          <th class="py-2 px-6">Masa Berlaku</th>
          <th class="py-2 px-6">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($apds as $index => $apd)
        <tr class="border-b">
          <td class="py-2 px-6 text-center">{{ $index + 1 }}</td>
          <td class="py-2 px-6">
            <img src="{{ $apd['image'] }}" alt="APD Image" class="w-12 h-12 object-cover">
          </td>
          <td class="py-2 px-6">{{ $apd['name'] }}</td>
          <td class="py-2 px-6 text-center">{{ $apd['size'] }}</td>
          <td class="py-2 px-6 text-center">{{ $apd['stock'] }}</td>
          <td class="py-2 px-6 text-center">{{ \Carbon\Carbon::parse($apd['valid_until'])->format('d M Y') }}</td>
          <td class="py-2 px-6 text-center">
            <button class="btn btn-sm btn-warning" onclick="showEditModal({{ $apd['id'] }})"><img width="21" height="21" src="https://img.icons8.com/material-rounded/21/edit--v1.png" alt="edit--v1"/></button>
            <button class="btn btn-sm btn-error" onclick="confirmDelete({{ $apd['id'] }})"><img width="21" height="21" src="https://img.icons8.com/ios-glyphs/21/filled-trash.png" alt="filled-trash"/></button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{--

  <!-- Confirm Delete Modal -->
  <div id="deleteConfirmModal" class="modal hidden">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Konfirmasi Hapus</h3>
      <p>Apakah Anda yakin ingin menghapus APD ini?</p>
      <div class="modal-action">
        <button class="btn" onclick="closeModal()">Batal</button>
        <form id="deleteApdForm" method="POST" action="{{ route('apd.delete') }}">
          @csrf
          @method('DELETE')
          <input type="hidden" name="id" id="deleteApdId">
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>

  <!-- JavaScript to handle modals -->
  <script>
    function showAddModal() {
      document.getElementById('addModal').classList.remove('hidden');
    }

    function showEditModal(id) {
      const form = document.getElementById('editApdForm');
      form.action = `/admin/apd/${id}`;  // Update the form action with the correct APD id
      document.getElementById('editApdId').value = id;  // Set the hidden id input
      // Populate other form fields with APD data, if necessary
      openModal();
    }


    function confirmDelete(id) {
      document.getElementById('deleteApdId').value = id;
      document.getElementById('deleteConfirmModal').classList.remove('hidden');
    }

    function closeModal() {
      document.querySelectorAll('.modal').forEach(modal => {
        modal.classList.add('hidden');
      });
    }
  </script> --}}

@endsection