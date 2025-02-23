@include('app')
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">{{ $listings->title_satu }}</h2>
        <p class="text-justify p-2">{!! $listings->description_satu !!}</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
            @foreach ($listings->data_satu as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-down" data-aos-duration="1000">
                <!-- Gambar -->
                <div class="relative group">
                    <img src="{{ asset('storage/' . $item['gambar']) }}" alt="{{ $item['judul'] }}"
                        class="w-full h-64 object-contain rounded-t-lg transform transition duration-300 group-hover:scale-105 cursor-pointer"
                        data-modal-target="imageModal{{ $item['judul'] }}" data-modal-toggle="imageModal{{ $item['judul'] }}">
                   

                    <!-- Judul di atas gambar -->
                    <p
                        class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition duration-300 rounded-md">
                        {{ $item['judul'] }}
                    </p>
                </div>

                <!-- Deskripsi di bawah gambar -->
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $item['judul'] }}</h2>
                    <p class="text-sm text-gray-600 mt-2">
                        {{ \Illuminate\Support\Str::words(strip_tags($item['deskripsi']), 15, '...') }}
                    </p>
                </div>
            </div>

            <!-- Modal untuk gambar -->
            <div id="imageModal{{ $item['judul'] }}" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full bg-black bg-opacity-75 flex items-center justify-center">
                <div class="relative w-auto max-w-4xl">
                    <button type="button"
                        class="absolute top-3 right-3 text-white bg-gray-800 hover:bg-gray-900 rounded-full p-2"
                        data-modal-hide="imageModal{{ $item['judul'] }}">
                        ✕
                    </button>
                    <img src="{{ asset('storage/' . $item['gambar']) }}" class="rounded-lg shadow-lg max-h-[90vh]">
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">{{ $listings->title_dua }}</h2>
        <p class="text-justify p-2">{!! $listings->description_dua !!}</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
            @foreach ($listings->data_dua as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="flip-down" data-aos-duration="1000">
                <!-- Gambar -->
                <div class="relative group">
                    <img src="{{ asset('storage/' . $item['gambar']) }}" alt="{{ $item['judul'] }}"
                        class="w-full h-64 object-contain rounded-t-lg transform transition duration-300 group-hover:scale-105 cursor-pointer"
                        data-modal-target="imageModal{{ $item['judul'] }}" data-modal-toggle="imageModal{{ $item['judul'] }}">
                   

                    <!-- Judul di atas gambar -->
                    <p
                        class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition duration-300 rounded-md">
                        {{ $item['judul'] }}
                    </p>
                </div>

                <!-- Deskripsi di bawah gambar -->
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $item['judul'] }}</h2>
                    <p class="text-sm text-gray-600 mt-2">
                        {{ \Illuminate\Support\Str::words(strip_tags($item['deskripsi']), 15, '...') }}
                    </p>
                </div>
            </div>

            <!-- Modal untuk gambar -->
            <div id="imageModal{{ $item['judul'] }}" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full bg-black bg-opacity-75 flex items-center justify-center">
                <div class="relative w-auto max-w-4xl">
                    <button type="button"
                        class="absolute top-3 right-3 text-white bg-gray-800 hover:bg-gray-900 rounded-full p-2"
                        data-modal-hide="imageModal{{ $item['judul'] }}">
                        ✕
                    </button>
                    <img src="{{ asset('storage/' . $item['gambar']) }}" class="rounded-lg shadow-lg max-h-[90vh]">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('footer')