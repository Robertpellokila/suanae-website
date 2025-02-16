@include('app')
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <div class="container mx-auto p-6">

        <!-- Tombol Kembali dengan posisi sticky di kiri atas -->
        {{-- <a href="{{ route('berita') }}" class="fixed top-16 left-4 flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-3xl shadow-md hover:bg-blue-500 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5l-7 7 7 7" />
            </svg>
        </a> --}}

        <!-- Konten Halaman -->
        <h1 class="text-3xl font-bold mb-6 text-center">{{ $berita->title }}</h1>
        <div class="max-w-lg mx-auto">
            <img class="rounded-lg w-full" src="{{ asset('/storage/' . $berita->image) }}" alt="{{ $berita->title }}">
            <div class="p-6">
                <p class="text-gray-500 mb-6">{!! $berita->content !!}</p>
            </div>
        </div>
        <div>
            <a href="{{ route('berita') }}"
                class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Kembali</a>
        </div>
    </div>
</section>
@include('footer')