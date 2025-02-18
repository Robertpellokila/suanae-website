@include('app')
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">Indeks Desa Membangun</h2>
    <div class="grid md:grid-cols-2 gap-1 p-4">
        <div>
            <h2 class="text-xl md:text-4xl font-bold text-green-700 p-2 text-start">IDM</h2>
            <p class="text-lg font-semibold text-gray-900 text-start p-2" data-aos="fade-up">Indeks Desa Membangun (IDM)
                merupakan indeks
                komposit yang dibentuk dari tiga indeks, yaitu Indeks Ketahanan Sosial, Indeks Ketahanan Ekonomi, dan
                Indeks Ketahanan Ekologi/Lingkungan</p>
        </div>
        <div class="gap-4 grid">
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
                data-aos="flip-down" data-aos-duration="1000">
                <div class="grid items-center">
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Skor IDM Tahun {{
                        $idm->tahun }}
                    </h5>
                    <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->skor }}
                    </p>
                </div>
            </div>
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
                data-aos="flip-down" data-aos-duration="1000">
                <div class="grid items-center">
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Status IDM Tahun {{
                        $idm->tahun }}
                    </h5>
                    <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->status }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-3 gap-4 p-4">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="grid items-center">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Target Status</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->target }}</p>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="grid items-center">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Skor Minimal</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->minimal }}</p>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="grid items-center">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Penambahan</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->penambahan }}
                </p>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-3 gap-4 p-4">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="grid items-center">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Skor IKS</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->skor_iks }}
                </p>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="grid items-center">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Skor IKE</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->skor_ike }}
                </p>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="grid items-center">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-white text-left">Skor IKL</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-right uppercase">{{ $idm->skor_ikl }}
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">PPID & APBD Desa</h2>
    <div class="p-8">
        <h2 class="text-xl md:text-4xl font-bold text-green-700 p-2 text-start">PPID</h2>
        <p class="text-xl font-semibold text-gray-900 text-start p-2 text-justify" data-aos="fade-up">Pejabat Pengelola
            Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan,
            pendokumentasian, dan/atau pelayanan informasi di bidang publik</p>
    </div>
    <div>
        <div x-data="{ open: false }">
            <!-- Tombol untuk membuka modal -->
            <button @click="open = true" type="button"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Dasar Hukum PPID
            </button>

            <!-- Modal -->
            <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
                <div class="bg-white rounded-lg shadow-lg max-w-3xl w-full">
                    <!-- Header Modal -->
                    <div class="flex justify-between items-center p-4 border-b">
                        <h2 class="text-lg font-bold">Dasar Hukum PPD</h2>
                        <button @click="open = false" class="text-gray-500 hover:text-gray-700">&times;</button>
                    </div>

                    <!-- Konten PDF -->
                    <div class="p-4">
                        <iframe src="{{ asset('storage/' . $idm->dasar_hukum) }}" class="w-full h-[500px]"></iframe>
                    </div>

                    <!-- Footer Modal -->
                    <div class="p-4 border-t flex justify-end">
                        <button @click="open = false"
                            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="p-8">
        <h2 class="text-xl md:text-4xl font-bold text-green-700 p-2 text-start">APB Desa Suanae</h2>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900"
            data-aos="flip-down" data-aos-duration="1000">
            <div class="md:flex items-center md:justify-between">
                <h5 class="text-xl font-semibold text-gray-900 dark:text-white text-center">APBD Desa Suanae Tahun ini</h5>
                <p class="text-4xl font-bold text-gray-900 dark:text-white text-center uppercase ">Rp.{{ number_format($idm->apbd, 0, ',', '.') }}
                </p>
            </div>
        </div>
        <div class="p-4">
            <div x-data="{ open: false }">
                <!-- Tombol untuk membuka modal -->
                <button @click="open = true" type="button"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    File APBD
                </button>
    
                <!-- Modal -->
                <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
                    <div class="bg-white rounded-lg shadow-lg max-w-3xl w-full">
                        <!-- Header Modal -->
                        <div class="flex justify-between items-center p-4 border-b">
                            <h2 class="text-lg font-bold">File APBD</h2>
                            <button @click="open = false" class="text-gray-500 hover:text-gray-700">&times;</button>
                        </div>
    
                        <!-- Konten PDF -->
                        <div class="p-4">
                            <iframe src="{{ asset('storage/' . $idm->file_apbd) }}" class="w-full h-[500px]"></iframe>
                        </div>
    
                        <!-- Footer Modal -->
                        <div class="p-4 border-t flex justify-end">
                            <button @click="open = false"
                                class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>