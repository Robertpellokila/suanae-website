@include('app')
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">Berita terbaru</h2>
    <div class="container mx-auto p-6">
        <div class="flex flex-wrap justify-center sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($berita as $item)
            <div class="max-w-xs rounded-lg border border-gray-200 bg-white shadow-md" data-aos="flip-down" data-aos-duration="1000">
                <a href="{{ route('berita.detail', ['berita' => $item->slug]) }}">
                    <img class="rounded-t-lg object-cover" src="{{ asset('/storage/' . $item->image) }}"
                        alt="{{ $item->title }}">
                    <div class="p-4">
                        <h5 class="text-lg font-bold">{{ $item->title }}</h5>
                        <p class="text-gray-500">{!! \Illuminate\Support\Str::words(strip_tags($item->content), 10, '...') !!}</p>

                    </div>
                </a>
            </div>
            @empty
            <div class="col-span-full w-full flex justify-center items-center h-[200px]">
                <p class="text-xl text-red-500 text-center">Belum ada berita yang tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@include('footer')
