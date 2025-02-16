@include('app')


{{-- Open Carousel --}}
<div id="carousel-wrapper" class="relative w-full overflow-hidden">
    <div id="carousel-inner" class="flex transition-transform duration-700 ease-in-out">
        @foreach ($images as $index => $image)
        <div class="w-full flex-shrink-0 relative">
            <img src="{{ asset('/storage/' . $image->image) }}" class="w-full h-60 md:h-96 object-cover rounded-3xl"
                alt="...">
            <div
                class="absolute inset-0 flex flex-col items-center justify-center text-center bg-black/50 text-white p-4 rounded-3xl">
                <h2 class="text-3xl md:text-4xl font-bold">{{ $image->title }}</h2>
                <p class="text-sm md:text-lg mt-2">{{ $image->description }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Slider Indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
        @foreach ($images as $index => $image)
        <button class="indicator w-3 h-3 rounded-full bg-gray-300" data-index="{{ $index }}"></button>
        @endforeach
    </div>

    <!-- Slider Controls -->
    <button id="prevSlide"
        class="absolute top-1/2 left-5 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full">❮</button>
    <button id="nextSlide"
        class="absolute top-1/2 right-5 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full">❯</button>
</div>
{{-- Close Carousel --}}

<section class="bg-white ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl drop-shadow-[2px_2px_5px_rgba(255,255,0,0.75)]">
            Selamat Datang di Website Desa Suanae</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 ">Website ini untuk membantu
            memberikan informasi digital mengenai Desa Suanae.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="{{ route('profil') }}"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 ">
                Lihat Profil
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            <a href="{{ route('sejarah') }}"
                class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">
                Sejarah Desa
            </a>
        </div>
    </div>
</section>

<section class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
    <h2 class="text-2xl md:text-4xl font-bold text-gray-900">Sambutan Kepala Desa</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center p-8">
        @foreach ($kades as $item)
        <!-- Gambar -->
        <div class="flex justify-center">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">

                <img class=" w-full h-72 object-contain mx-auto m-2"
                    src="{{ asset('/storage/' . $item->image) }}" alt="" />
                <div class="p-5">
                    <p class="mb-3 font-bold text-xl text-gray-900">{{ $item->name }}</p>
                </div>
            </div>
        </div>

        <!-- Teks -->
        <div class="flex flex-col justify-center">
            <p class="text-gray-500 text-lg text-justify" style="text-indent: 4rem;">{!!
                \Illuminate\Support\Str::words(strip_tags($item->sambutan), 80, '...') !!}</p>
            <a href="#" class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                Selengkapnya
            </a>
        </div>
        @endforeach
    </div>
</section>


<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <h2 class="text-2xl md:text-4xl font-bold text-gray-900">Aparatur Desa</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center p-8">
        @foreach ($aparatur as $item)
        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-green-800 dark:border-green-700">
            <div class="flex justify-end px-4 pt-4">

            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full object-contain shadow-lg"
                    src="{{ asset('/storage/' . $item->image) }}" alt="{{ $item->name }}" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $item->name }}</h5>
                <span class="text-sm text-white">{{ $item->jabatan }}</span>

            </div>
        </div>
        @endforeach

    </div>
    <div>
        <a href="{{ route('aparatur') }}"
            class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Selengkapnya</a>
    </div>
</section>

{{-- awal berita section --}}
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <h2 class="text-2xl md:text-4xl font-bold text-gray-900">Berita Terbaru</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center p-8">
        @forelse ($berita as $item)
        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-green-800 dark:border-green-700">
            <div class="flex justify-end px-4 pt-4">

            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-full h-56 object-cover mb-3  shadow-lg" src="{{ asset('/storage/' . $item->image) }}"
                    alt="{{ $item->title }}" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $item->title }}</h5>
                <p class="text-white text-sm">
                    {{ \Illuminate\Support\Str::words(strip_tags($item->content), 10, '...') }}
                </p>

            </div>
        </div>
        @empty
        <div class="col-span-full w-full flex justify-center items-center h-[200px]">
            <p class="text-xl text-red-500 text-center">Belum ada berita yang tersedia.</p>
        </div>
        @endforelse

    </div>
    <div>
        <a href="{{ route('berita') }}"
            class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Selengkapnya</a>
    </div>
</section>

{{-- akhir berita section --}}



{{-- awal lokasi --}}
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <!-- Peta Lokasi -->
    <div>
        <h2 class="text-2xl md:text-4xl font-bold text-gray-900 p-4">Lokasi Desa</h2>

        <div class="w-full h-96">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12950.527707699302!2d124.32698183234413!3d-9.566144398289577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c558f0003b0c2f3%3A0xdff1ee21e3b4b69a!2sDesa%20suanae!5e1!3m2!1sid!2sid!4v1739691436181!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.8258911704497!2d123.6018531740428!3d-10.157709689955876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569cc78848e3c7%3A0xa63e72b4a7dd0236!2sArsenet%20Global%20Solusi!5e1!3m2!1sid!2sid!4v1737796469910!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </div>
</section>
@include('footer')


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const carouselInner = document.getElementById("carousel-inner");
        const slides = document.querySelectorAll("#carousel-inner > div");
        const indicators = document.querySelectorAll(".indicator");
        const prevButton = document.getElementById("prevSlide");
        const nextButton = document.getElementById("nextSlide");
        let currentIndex = 0;
        const totalSlides = slides.length;

        function updateSlide() {
            // Pindahkan slide
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update indikator
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle("bg-gray-800", index === currentIndex);
                indicator.classList.toggle("bg-gray-300", index !== currentIndex);
            });
        }

        // Next button
        nextButton.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlide();
        });

        // Prev button
        prevButton.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlide();
        });

        // Indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener("click", () => {
                currentIndex = index;
                updateSlide();
            });
        });

        // Auto-slide setiap 3 detik
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlide();
        }, 3000);

        updateSlide(); // Inisialisasi pertama kali
    });
</script>