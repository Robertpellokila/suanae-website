@include('app')
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 p-2">Desa Suanae</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 p-4">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900" data-aos="flip-down" data-aos-duration="1000">
            <div class="flex items-center space-x-4">
                <div class="p-3 text-white bg-blue-500 rounded-lg">
                    <!-- Ikon -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Jumlah Penduduk</h5>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $data->jumlah_penduduk }}</p>
                </div>
            </div>
        </div>
    
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900" data-aos="flip-down" data-aos-duration="1000">
            <div class="flex items-center space-x-4">
                <div class="p-3 text-white bg-blue-500 rounded-lg">
                    <!-- Ikon -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Jumlah Dusun</h5>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $info->jumlah_dusun }}</p>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900" data-aos="flip-down" data-aos-duration="1000">
            <div class="flex items-center space-x-4">
                <div class="p-3 text-white bg-blue-500 rounded-lg">
                    <!-- Ikon -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Jumlah RT / RW</h5>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $info->jumlah_rt }}</p>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-600 dark:border-green-900" data-aos="flip-down" data-aos-duration="1000">
            <div class="flex items-center space-x-4">
                <div class="p-3 text-white bg-blue-500 rounded-lg">
                    <!-- Ikon -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-900 dark:text-white">Jumlah KK</h5>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $info->jumlah_kk }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md mt-8">
        <h2 class="text-xl font-semibold text-gray-700 text-center mb-4">Grafik Perkembangan Penduduk</h2>
        <div class="h-64" >
            <canvas id="chartPenduduk" data-aos="zoom-in" data-aos-duration="1000"></canvas>
        </div>
    </div>


</section>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('chartPenduduk').getContext('2d');

        // Ambil data dari Laravel ke JavaScript
        const labels = {!! json_encode($dataPenduduk->pluck('tahun')) !!};
        const data = {!! json_encode($dataPenduduk->pluck('jumlah_penduduk')) !!};

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Penduduk',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>
@include('footer')