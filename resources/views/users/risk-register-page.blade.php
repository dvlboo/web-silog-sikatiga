<x-layout>
  <x-header>
    RISK REGISTER
  </x-header>

  <div class="container mx-auto my-10 flex flex-col md:flex-row">

    {{-- main : form risk register --}}
    <div class="md:w-8/12 w-full">
      <form id="uploadRisk" method="POST" action="{{ route('risk-register') }}" enctype="multipart/form-data">
        @csrf

        <table class="table-auto w-full">
          <tr>
            <td class="font-semibold p-2">Nama Pelapor</td>
            <td class="font-semibold">:</td>
            <td class="font-semibold p-2">
              <input type="text" placeholder="Nama Lengkap Pelapor" name="name_reporter" class="input input-bordered input-info w-96"/>
              @error('name_reporter')
                <p class="text-red-500 text-sm">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          
          <tr>
            <td class="font-semibold p-2">Nama Temuan</td>
            <td class="font-semibold">:</td>
            <td class="font-semibold p-2">
              <input type="text" placeholder="Nama Temuan" name="name_finding" class="input input-bordered input-info w-96"/>
              @error('name_finding')
                <p class="text-red-500 text-sm">{{ $message }}</p>
              @enderror
            </td>
          </tr>
  
          <tr>
            <td class="font-semibold p-2">Tanggal Temuan</td>
            <td class="font-semibold">:</td>
            <td class="font-semibold p-2">
              <input type="date" name="date" class="input input-bordered input-info w-96"/>
              @error('date')
                <p class="text-red-500 text-sm">{{ $message }}</p>
              @enderror
            </td>
          </tr>
  
          <tr>
            <td class="font-semibold p-2">Deskripsi Temuan</td>
            <td class="font-semibold">:</td>
            <td class="font-normal p-2">
              <textarea name="description" placeholder="Jelaskan Temuan Anda" class="input p-2 input-bordered input-info w-96 h-32"></textarea>
              @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
              @enderror
            </td>
          </tr>
  
          <tr>
            <td class="font-semibold p-2">Foto Temuan</td>
            <td class="font-semibold">:</td>
            <td class="font-normal p-2">
              <input type="file" name="photo" class="file-input input-bordered input-info w-96" />
              @error('photo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
              @enderror
            </td>
          </tr>
  
          <tr>
            <td class="font-semibold p-2">Pengendalian </td>
            <td class="font-semibold">:</td>
            <td class="font-normal p-2">
              <textarea name="control" placeholder="Apa Pengendaliannya" class="input p-2 input-bordered input-info w-96 h-32"></textarea>
              @error('control')
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

    {{-- side : news --}}
    <div class="md:w-4/12 w-full mt-10 md:mt-0">
      <p>News</p>
    </div>
  </div>
</x-layout>