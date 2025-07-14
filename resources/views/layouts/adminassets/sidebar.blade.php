<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
            href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}"
                class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                alt="main_logo" />
            <img src="{{ asset('assets/img/logo-ct.png') }}"
                class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Halaman Admin</span>
        </a>
    </div>

    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                    href="{{ route('admin.dashboard') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard Admin</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                    href="{{ route('home') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Halaman User</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('admin.eskul.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Ekstrakurikuler</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('admin.jadwal.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Jadwal Ekstrakurikuler</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('admin.daftar_eskul.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Daftar Ekstrakurikuler</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('admin.penerimaan.index') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Penerimaan</span>
                </a>
            </li>

            <li class="mt-0.5 w-full relative group">
                <div class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand mx-2 flex items-center whitespace-nowrap px-4 transition-colors cursor-pointer select-none"
                    onclick="document.getElementById('dropdown-tahun').classList.toggle('hidden')">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center text-orange-500 stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                        Tahun Ajaran
                    </span>
                    <svg class="ml-auto w-4 h-4 fill-current text-slate-700 dark:text-white transition-transform group-hover:rotate-180"
                        viewBox="0 0 20 20">
                        <path d="M5.516 7.548l4.488 4.489 4.488-4.49L16 9.045l-6 6-6-6z" />
                    </svg>
                </div>

                <ul id="dropdown-tahun"
                    class="hidden absolute z-50 mt-2 ml-14 w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-600 rounded-lg shadow-lg">
                    <li>
                        <form action="{{ route('admin.filter.tahun') }}" method="GET" class="w-full">
                            @csrf
                            <button type="submit" name="tahun_ajaran" value=""
                                class="block w-full text-left px-4 py-2 text-sm text-slate-700 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-700 {{ session('filter_tahun') == '' ? 'font-bold' : '' }}">
                                -- Semua Tahun --
                            </button>
                            @foreach ($tahunList as $tahun)
                                <button type="submit" name="tahun_ajaran" value="{{ $tahun }}"
                                    class="block w-full text-left px-4 py-2 text-sm text-slate-700 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-700 {{ session('filter_tahun') == $tahun ? 'font-bold' : '' }}">
                                    {{ $tahun }}
                                </button>
                            @endforeach
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="px-4 py-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button 
                type="submit"
                class="w-full py-2 px-4 bg-danger text-white rounded-full font-semibold hover:bg-red-200 hover:text-red-700 transition">
                Logout
            </button>
        </form>
    </div>
</div>
</aside>
