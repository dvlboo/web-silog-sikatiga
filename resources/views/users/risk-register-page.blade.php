<x-layout>
  <x-header>
    RISK REGISTER
  </x-header>

  <div class="container mx-auto my-10 flex flex-col md:flex-row">

    {{-- main : form risk register --}}
    <div class="md:w-8/12 w-full">
      <table class="table-auto w-full">
        <tr>
          <td class="font-semibold p-2">Nama Pelapor</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2"><input type="text" placeholder="Nama Lengkap Pelapor" name="name" class="input input-bordered input-info w-96"/></td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Nama Temuan</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2"><input type="text" placeholder="Nama Temuan" name="object" class="input input-bordered input-info w-96"/></td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Tanggal Temuan</td>
          <td class="font-semibold">:</td>
          <td class="font-semibold p-2"><input type="date" name="date" class="input input-bordered input-info w-96"/></td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Deskripsi Temuan</td>
          <td class="font-semibold">:</td>
          <td class="font-normal p-2"><textarea name="description" placeholder="Jelaskan Temuan Anda" class="input p-2 input-bordered input-info w-96 h-32"></textarea></td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Foto Temuan</td>
          <td class="font-semibold">:</td>
          <td class="font-normal p-2">
            <input type="file" name="photo" class="file-input input-bordered input-info w-96" />
          </td>
        </tr>

        <tr>
          <td class="font-semibold p-2">Pengendalian </td>
          <td class="font-semibold">:</td>
          <td class="font-normal p-2"><textarea name="control" placeholder="Apa Pengendaliannya" class="input p-2 input-bordered input-info w-96 h-32"></textarea></td>
        </tr>
      </table>
    </div>

    {{-- side : news --}}
    <div class="md:w-4/12 w-full mt-10 md:mt-0">
      <p>News</p>
    </div>
  </div>
</x-layout>