@include('app')
<section class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4">
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
          <p class="text-base font-semibold text-green-600">404</p>
          <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Page not found</h1>
          <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Maaf Kami tidak bisa menemukan halaman yang anda cari.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ route('home') }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Kembali ke Beranda</a>
            <a href="https://wa.me/6282340808952" class="text-sm font-semibold text-gray-900">Kontak kami <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
      </main>
</section>
@include('footer')