@extends('layouts.admin-layout')

@section('content')
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold">Alat Pelindung Diri</h2>
    <button class="btn btn-success text-white" onclick="showAddModal()">Tambah APD</button>
  </div>

  <!-- Table for APD Management -->
  <div class="bg-white shadow-md rounded-lg overflow-x-auto">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="py-2 px-6 text-left">No</th>
          <th class="py-2 px-6 text-left">Gambar</th>
          <th class="py-2 px-6 text-left">Nama APD</th>
          <th class="py-2 px-6 text-left">Ukuran</th>
          <th class="py-2 px-6 text-left">Jumlah Stok</th>
          <th class="py-2 px-6 text-left">Masa Berlaku</th>
          <th class="py-2 px-6 text-left">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($apds as $index => $apd)
        <tr class="border-b">
          <td class="py-2 px-6">{{ $index + 1 }}</td>
          <td class="py-2 px-6">
            <img src="{{ $apd['image'] }}" alt="APD Image" class="w-12 h-12 object-cover">
          </td>
          <td class="py-2 px-6">{{ $apd['name'] }}</td>
          <td class="py-2 px-6">{{ $apd['size'] }}</td>
          <td class="py-2 px-6">{{ $apd['stock'] }}</td>
          <td class="py-2 px-6">{{ $apd['valid_until'] }}</td>
          <td class="py-2 px-6">
            <button class="btn btn-sm btn-warning" onclick="showEditModal({{ $apd['id'] }})">Edit</button>
            <button class="btn btn-sm btn-error" onclick="confirmDelete({{ $apd['id'] }})">Hapus</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{-- <!-- Modal for Adding APD -->
  <div id="addModal" class="modal hidden">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Tambah APD Baru</h3>
      <form id="addApdForm" method="POST" action="{{ route('apd.store') }}">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Nama APD</label>
          <input type="text" name="name" id="name" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
          <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
          <input type="text" name="category" id="category" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
          <textarea name="description" id="description" class="textarea textarea-bordered w-full"></textarea>
        </div>
        <div class="modal-action">
          <button type="button" class="btn" onclick="closeModal()">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal for Editing APD -->
  <div id="editModal" class="modal hidden">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Edit APD</h3>
      <form id="editApdForm" method="POST" action="{{ route('apd.update', ['id' => $apd->id]) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="editApdId">
        <div class="mb-4">
          <label for="editName" class="block text-sm font-medium text-gray-700">Nama APD</label>
          <input type="text" name="name" id="editName" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
          <label for="editCategory" class="block text-sm font-medium text-gray-700">Kategori</label>
          <input type="text" name="category" id="editCategory" class="input input-bordered w-full">
        </div>
        <div class="mb-4">
          <label for="editDescription" class="block text-sm font-medium text-gray-700">Deskripsi</label>
          <textarea name="description" id="editDescription" class="textarea textarea-bordered w-full"></textarea>
        </div>
        <div class="modal-action">
          <button type="button" class="btn" onclick="closeModal()">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>

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