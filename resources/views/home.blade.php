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

<section class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
    <h2 class="text-2xl md:text-4xl font-bold text-gray-900">Sambutan Kepala Desa</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center p-8">
        <!-- Gambar -->
        <div class="flex justify-center items-center">
            <img class="rounded-sm w-36 h-36 object-cover" src="{{ asset('logo.png') }}" alt="Extra large avatar">
        </div>

        <!-- Teks -->
        <div>

            <p class="text-gray-700 text-lg mt-4">
                Ini adalah deskripsi teks yang berada di samping gambar. Bisa digunakan untuk menjelaskan sesuatu atau
                memberikan informasi tambahan.
            </p>
            <a href="#"
                class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Selengkapnya</a>
        </div>
    </div>
</section>


<section class="bg-white ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl ">We
            invest in the world’s potential</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 ">Here at Flowbite we focus on
            markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 ">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            <a href="#"
                class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">
                Learn more
            </a>
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