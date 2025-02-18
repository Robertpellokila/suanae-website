@include('app')
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <div class="container mx-auto p-6">

        <!-- Konten Halaman -->
        <h1 class="text-3xl font-bold mb-6 text-center text-green-700">Sambutan</h1>
        {{-- <div class="max-w-lg mx-auto"> --}}
            <img class="rounded-lg w-full" src="{{ asset('/storage/' . $show->image) }}" alt="{{ $show->name }}">
            <div class="p-6">
                <p class="text-gray-500 mb-6">{!! $show->sambutan !!}</p>
            </div>
        {{-- </div> --}}
        <div>
            <a href="{{ route('home') }}"
                class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Kembali</a>
        </div>
    </div>
</section>
@include('footer')