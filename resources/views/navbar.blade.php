<nav class="bg-white border-green-200 dark:bg-green-600 rounded-b-3xl">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="logo.png" class="h-12" alt="Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap  dark:text-white">Suanae</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-green-500 rounded-lg md:hidden hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-200 dark:text-green-400 dark:hover:bg-green-700 dark:focus:ring-green-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto md:mr-12" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-green-100 rounded-lg bg-green-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-green-800 md:dark:bg-green-600 dark:border-green-700">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 rounded-lg md:p-0 font-bold
            {{ request()->routeIs('home') ? 'text-white bg-green-700 md:bg-transparent md:text-green-700 dark:text-white md:dark:text-yellow-300' : 'text-green-900 hover:bg-green-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil') }}"
                        class="block py-2 px-3 rounded-lg md:p-0 font-bold
            {{ request()->routeIs('profil') ? 'text-white bg-green-700 md:bg-transparent md:text-green-700 dark:text-white md:dark:text-yellow-300' : 'text-green-900 hover:bg-green-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        Profil Desa
                    </a>
                </li>
                <li>
                    <a href="{{ route('grafis') }}"
                        class="block py-2 px-3 rounded-lg md:p-0 font-bold
            {{ request()->routeIs('grafis') ? 'text-white bg-green-700 md:bg-transparent md:text-green-700 dark:text-white md:dark:text-yellow-300' : 'text-green-900 hover:bg-green-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        Infografis
                    </a>
                </li>
                <li>
                    <a href="{{ route('berita') }}"
                        class="block py-2 px-3 rounded-lg md:p-0 font-bold
        {{ request()->routeIs('berita') ? 'text-white bg-green-700 md:bg-transparent md:text-green-700 dark:text-white md:dark:text-yellow-300' : 'text-green-900 hover:bg-green-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}"
                        class="block py-2 px-3 rounded-lg md:p-0 font-bold
    {{ request()->routeIs('galeri') ? 'text-white bg-green-700 md:bg-transparent md:text-green-700 dark:text-white md:dark:text-yellow-300' : 'text-green-900 hover:bg-green-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 dark:text-white md:dark:hover:text-yellow-500 dark:hover:bg-green-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
                        Galeri
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>