<x-layout>
  <x-header>ALAT PELINDUNG DIRI</x-header>
  
  <div class="container mx-auto my-10 flex flex-col w-full">
    <div class="flex flex-row w-full mb-5 items-center gap-3">
      <input type="text" placeholder="Search" class="input input-bordered w-full" />
      <button class="btn btn-primary">Search</button>
    </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($apds as $apd)
          <x-card
            :image="$apd->image"
            :name="$apd->name"
            :size="$apd->size"
            :stock="$apd->stock"
            :valid_until="$apd->valid_until"
          />
        @endforeach
      </div>
  </div>
</x-layout>