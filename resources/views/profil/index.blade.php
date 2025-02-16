@include('app')



<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700 pb-6">Bagan Organisasi dan Tata Kerja Desa</h2>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Gambar -->
        <div class="relative group p-4">
            <img src="{{ asset('storage/' . $profil->bagan) }}" alt="bagan"
                class="w-full h-full object-contain rounded-t-lg transform transition duration-300 group-hover:scale-105 cursor-pointer"
                data-modal-target="imageModal{{ $profil->id }}" data-modal-toggle="imageModal{{ $profil->id }}">


        </div>


    </div>

    <!-- Modal untuk gambar -->
    <div id="imageModal{{ $profil->id }}" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full bg-black bg-opacity-75 flex items-center justify-center">
        <div class="relative w-auto max-w-4xl">
            <button type="button"
                class="absolute top-3 right-3 text-white bg-gray-800 hover:bg-gray-900 rounded-full p-2"
                data-modal-hide="imageModal{{ $profil->id }}">
                ✕
            </button>
            <img src="{{ asset('storage/' . $profil->bagan) }}" class="rounded-lg shadow-lg max-h-[90vh]">
        </div>
    </div>
</section>

<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700">Aparatur Desa</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center p-8">
        @foreach ($kades as $item)
        <div class="flex justify-center">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">

                <img class=" w-full h-72 object-contain mx-auto m-2" src="{{ asset('/storage/' . $item->image) }}"
                    alt="" />
                <div class="p-5">
                    <p class="mb-3 font-bold text-xl text-gray-900">{{ $item->name }}</p>
                    <span class="text-sm text-gray-900">Kepala Desa</span>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($aparatur as $item)
        <div class="flex justify-center">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">

                <img class=" w-full h-72 object-contain mx-auto m-2" src="{{ asset('/storage/' . $item->image) }}"
                    alt="" />
                <div class="p-5">
                    <p class="mb-3 font-bold text-xl text-gray-900">{{ $item->name }}</p>
                    <span class="text-sm text-gray-900">{{ $item->jabatan }}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div>
        <a href="{{ route('aparatur') }}"
            class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Selengkapnya</a>
    </div>
</section>

{{-- awal visi dan misi --}}
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700">Visi</h2>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 items-center p-4">

        <!-- Teks -->
        <div>

            <p class="text-gray-700 text-lg">
                Visi adalah suatu gambaran yang menantang tentang keadaan masa depan yang diinginkan dengan melihat
                potensi dan kebutuhan desa. Maka berdasarkan pengertian tersebut Visi yang kami usung adalah:
            </p>
            <h4 class="md:text-3xl font-bold text-gray-900 mt-2">{!! $profil->visi !!}
            </h4>

        </div>
    </div>
</section>

<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700">Misi</h2>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 items-center p-4">
        <!-- Gambar -->
        {{-- <div class="flex justify-center items-center">
            <img class="rounded-sm w-36 h-36 object-cover" src="{{ asset('logo.png') }}" alt="Extra large avatar">
        </div> --}}

        <!-- Teks -->
        <div>

            <p class="text-gray-700 text-lg pb-4">
                Misi adalah langkah strategis untuk mencapai Visi atau rumusan umum mengenai upaya-upaya yang akan
                dilaksanakan. Untuk mewujudkan Visi, Maka secara mutlak harus di susun sebuah Misi guna untuk mencapai
                Visi tersebut, yaitu:
            </p>
            <ul class="w-fit mx-auto space-y-1 text-gray-900 list-inside dark:text-gray-900 mt-2 text-left">
                @foreach ($profil->misi as $item)
                <li class="flex items-center font-bold mb-2">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    {{ $item['deskripsi'] }}
                </li>
                @endforeach
            </ul>


        </div>
    </div>
</section>


<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
    <h2 class="text-2xl md:text-4xl font-bold text-green-700">Sejarah Desa</h2>

    <div class="items-center p-4">
        <p class="text-gray-900 text-xl p-4 text-justify " style="text-indent: 4rem;">
            {!! \Illuminate\Support\Str::words(strip_tags($profil->sejarah), 100, '...') !!}
        </p>
    </div>
    <div>
        <a href="{{ route('sejarah') }}"
            class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">Selengkapnya</a>
    </div>
</section>
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">

    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
        <h2 class="text-2xl md:text-4xl font-bold text-green-700">Daftar Nama Kepala Desa</h2>
        <div class="p-4">
            <table class="w-full text-sm text-left rtl:text-right rounded-md text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-green-800 rounded-t-md">
                    Daftar Nama Kepala Desa Suanae
                    <p class="mt-1 text-sm font-normal white">Berikut adalah daftar nama
                        Kepala Desa Suanae yang pernah menjabat:</p>
                </caption>
                <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-green-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Masa Jabatan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profil->kepala_desa as $item)

                    <tr class="bg-white border-b dark:bg-green-800 dark:border-green-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item['nama'] }}
                        </th>
                        <td class="px-6 py-4 dark:text-white">
                            {{ $item['jabatan'] }}
                        </td>
                        <td class="px-6 py-4 dark:text-white">
                            {{ $item['masa'] }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>
<section class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8">

    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
        <h2 class="text-2xl md:text-4xl font-bold text-green-700">Data Sejarah Kejadian Baik Dan Buruk</h2>
        <div class="p-4">
            <table class="w-full text-sm text-left rtl:text-right rounded-md text-gray-500 dark:text-gray-400">
                <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-green-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tahun
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kejadian Baik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kejadian Buruk
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profil->kejadian as $item)
                    <tr class="bg-white border-b dark:bg-green-800 dark:border-green-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item['tahun'] }}
                        </th>
                        <td class="px-6 py-4 dark:text-white">
                            {{ $item['kejadian_baik'] }}
                        </td>
                        <td class="px-6 py-4 dark:text-white">
                            {{ $item['kejadian_buruk'] }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</section>
@include('footer')