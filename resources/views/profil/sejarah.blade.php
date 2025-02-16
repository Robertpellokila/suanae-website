@include('app')
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700">Sejarah Desa</h2>
    <div>
        {{-- <p class=" text-gray-900 text-2xl p-4 text-justify " style="text-indent: 4rem;">
            {!! $sejarah->sejarah !!}
        </p> --}}
        <div class="prose prose-lg text-gray-900 p-4 text-justify !text-xl">
            {!! $sejarah->sejarah !!}
        </div>
        
    </div>
    <div>
        <a href="{{ route('profil') }}"
            class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Kembali</a>
    </div>
</section>
@include('footer')