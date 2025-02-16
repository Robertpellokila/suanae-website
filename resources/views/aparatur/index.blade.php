@include('app')
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 pb-6">Bagan Organisasi dan Tata Kerja Desa</h2>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Gambar -->
        <div class="relative group p-4">
            <img src="{{ asset('storage/' . $bagan->bagan) }}" alt="bagan"
                class="w-full h-full object-contain rounded-t-lg transform transition duration-300 group-hover:scale-105 cursor-pointer"
                data-modal-target="imageModal{{ $bagan->id }}" data-modal-toggle="imageModal{{ $bagan->id }}">


        </div>


    </div>

    <!-- Modal untuk gambar -->
    <div id="imageModal{{ $bagan->id }}" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full bg-black bg-opacity-75 flex items-center justify-center">
        <div class="relative w-auto max-w-4xl">
            <button type="button"
                class="absolute top-3 right-3 text-white bg-gray-800 hover:bg-gray-900 rounded-full p-2"
                data-modal-hide="imageModal{{ $bagan->id }}">
                ✕
            </button>
            <img src="{{ asset('storage/' . $bagan->bagan) }}" class="rounded-lg shadow-lg max-h-[90vh]">
        </div>
    </div>
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">Aparatur Desa</h2>

    <div class="container mx-auto p-6">
        <div class="flex flex-wrap justify-center sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="max-w-xs rounded-lg border border-gray-200 bg-white shadow-md">
                <img class="rounded-t-lg object-cover" src="{{ asset('/storage/' . $kades->image) }}"
                    alt="{{ $kades->name }}">
                <div class="p-4">
                    <h5 class="text-xl font-bold">{{ $kades->name }}</h5>
                    <h2 class="text-lg">Kepala Desa</h2>
                </div>
            </div>
            @forelse ($data as $item)
            <div class="max-w-xs rounded-lg border border-gray-200 bg-white shadow-md">
                <img class="rounded-t-lg object-cover" src="{{ asset('/storage/' . $item->image) }}"
                    alt="{{ $item->name }}">
                <div class="p-4">
                    <h5 class="text-xl font-bold">{{ $item->name }}</h5>
                    <h2 class="text-lg">{{ $item->jabatan }}</h2>
                </div>
            </div>
            @empty
            <div class="col-span-full w-full flex justify-center items-center h-[200px]">
                <p class="text-xl text-red-500 text-center">Belum ada Data yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@include('footer')