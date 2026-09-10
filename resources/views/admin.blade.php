<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Dashboard') - Sistem Penjadwalan GMS
    </title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        /* Sidebar scrollbar */
        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #334155;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800">

<div class="min-h-screen">

    <!-- ============================= -->
    <!-- SIDEBAR -->
    <!-- ============================= -->

    <aside
        id="sidebar"
        class="fixed inset-y-0 left-0 z-50
               w-72 bg-slate-900 text-white
               transform -translate-x-full
               lg:translate-x-0
               transition-transform duration-300
               flex flex-col"
    >

        <!-- Logo -->
        <div class="h-20 flex items-center px-6 border-b border-slate-800">

            <div class="flex items-center gap-3">

                <div
                    class="w-11 h-11 rounded-xl
                           bg-white text-slate-900
                           flex items-center justify-center
                           font-extrabold text-sm"
                >
                    GMS
                </div>

                <div>
                    <h1 class="font-bold text-base">
                        Sistem Penjadwalan
                    </h1>

                    <p class="text-xs text-slate-400 mt-0.5">
                        AOG Bandung
                    </p>
                </div>

            </div>

        </div>


        <!-- Sidebar Content -->
        <div class="flex-1 overflow-y-auto sidebar-scroll px-4 py-6">

            <!-- MAIN -->
            <div class="mb-7">

                <p class="px-3 mb-3 text-[11px] font-bold
                          uppercase tracking-wider text-slate-500">
                    Main Menu
                </p>

                <!-- Dashboard -->
                <a
                    href="{{ url('/dashboard') }}"
                    class="flex items-center gap-3
                           px-3 py-3 rounded-xl
                           bg-indigo-600 text-white
                           font-semibold text-sm"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                        />
                    </svg>

                    <span>Dashboard</span>

                </a>

            </div>


            <!-- DATA MASTER -->
            <div class="mb-7">

                <p class="px-3 mb-3 text-[11px] font-bold
                          uppercase tracking-wider text-slate-500">
                    Data Master
                </p>


                <!-- Data Pelayan -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-9a4 4 0 110 8 4 4 0 010-8zm6 4a3 3 0 10-6 0"
                        />
                    </svg>

                    <span>Data Pelayan</span>

                </a>


                <!-- Departemen -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m4 0h1M9 11h1m4 0h1M9 15h1m4 0h1"
                        />
                    </svg>

                    <span>Departemen</span>

                </a>


                <!-- Kriteria -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a3 3 0 006 0M9 5a3 3 0 016 0m-6 7h6m-6 4h6"
                        />
                    </svg>

                    <span>Kriteria</span>

                </a>


                <!-- Ketersediaan -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                    </svg>

                    <span>Ketersediaan</span>

                </a>

            </div>


            <!-- PENJADWALAN -->
            <div class="mb-7">

                <p class="px-3 mb-3 text-[11px] font-bold
                          uppercase tracking-wider text-slate-500">
                    Penjadwalan
                </p>


                <!-- Jadwal Ibadah -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                    </svg>

                    <span>Jadwal Ibadah</span>

                </a>


                <!-- Proses Optimasi -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"
                        />
                    </svg>

                    <span>Proses Optimasi</span>

                </a>


                <!-- Hasil Ranking -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 19V6l-2 2m2-2l2 2M15 19V4l-2 2m2-2l2 2M3 19h18"
                        />
                    </svg>

                    <span>Hasil Ranking</span>

                </a>


                <!-- Jadwal Pelayanan -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"
                        />
                    </svg>

                    <span>Jadwal Pelayanan</span>

                </a>

            </div>


            <!-- LAPORAN -->
            <div>

                <p class="px-3 mb-3 text-[11px] font-bold
                          uppercase tracking-wider text-slate-500">
                    Lainnya
                </p>

                <!-- Laporan -->
                <a
                    href="#"
                    class="sidebar-link flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800 hover:text-white
                           transition"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        />
                    </svg>

                    <span>Laporan</span>

                </a>

            </div>

        </div>


        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-slate-800">

            <div class="flex items-center gap-3 p-3 rounded-xl
                        bg-slate-800">

                <div
                    class="w-10 h-10 rounded-full
                           bg-indigo-600
                           flex items-center justify-center
                           font-bold text-sm"
                >
                    A
                </div>

                <div class="flex-1 min-w-0">

                    <p class="text-sm font-semibold truncate">
                        Admin / PIC
                    </p>

                    <p class="text-xs text-slate-400 truncate">
                        Administrator
                    </p>

                </div>

            </div>

        </div>

    </aside>


    <!-- ============================= -->
    <!-- MOBILE OVERLAY -->
    <!-- ============================= -->

    <div
        id="sidebarOverlay"
        class="fixed inset-0 bg-slate-900/50 z-40
               hidden lg:hidden"
    ></div>


    <!-- ============================= -->
    <!-- MAIN AREA -->
    <!-- ============================= -->

    <div class="lg:ml-72 min-h-screen">


        <!-- ============================= -->
        <!-- TOP NAVBAR -->
        <!-- ============================= -->

        <header
            class="h-20 bg-white border-b border-slate-200
                   sticky top-0 z-30"
        >

            <div class="h-full px-4 sm:px-6 lg:px-8
                        flex items-center justify-between">

                <!-- Left -->
                <div class="flex items-center gap-4">

                    <!-- Mobile Menu -->
                    <button
                        id="menuButton"
                        class="lg:hidden w-10 h-10
                               rounded-xl border border-slate-200
                               flex items-center justify-center
                               text-slate-600
                               hover:bg-slate-50"
                    >

                        <svg
                            class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>

                    </button>


                    <div>

                        <p class="text-xs text-slate-400">
                            Sistem Penjadwalan
                        </p>

                        <h2 class="font-bold text-slate-800">
                            @yield('page-title', 'Dashboard')
                        </h2>

                    </div>

                </div>


                <!-- Right -->
                <div class="flex items-center gap-3">

                    <!-- Notification -->
                    <button
                        class="relative w-10 h-10
                               rounded-xl
                               border border-slate-200
                               flex items-center justify-center
                               text-slate-500
                               hover:bg-slate-50"
                    >

                        <svg
                            class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            />
                        </svg>

                        <span
                            class="absolute top-2 right-2
                                   w-2 h-2
                                   bg-red-500
                                   rounded-full"
                        ></span>

                    </button>


                    <!-- Profile -->
                    <div
                        class="hidden sm:flex items-center gap-3
                               pl-3 border-l border-slate-200"
                    >

                        <div
                            class="w-9 h-9 rounded-full
                                   bg-indigo-100
                                   text-indigo-700
                                   flex items-center justify-center
                                   font-bold text-sm"
                        >
                            A
                        </div>

                        <div class="hidden md:block">

                            <p class="text-sm font-semibold">
                                Admin / PIC
                            </p>

                            <p class="text-xs text-slate-400">
                                Administrator
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </header>


        <!-- ============================= -->
        <!-- PAGE CONTENT -->
        <!-- ============================= -->

        <main class="p-4 sm:p-6 lg:p-8">

            @yield('content')

        </main>

    </div>

</div>


<!-- ============================= -->
<!-- MOBILE SIDEBAR SCRIPT -->
<!-- ============================= -->

<script>

    const menuButton = document.getElementById('menuButton');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    if (menuButton) {

        menuButton.addEventListener('click', function () {

            sidebar.classList.toggle('-translate-x-full');

            sidebarOverlay.classList.toggle('hidden');

        });

    }


    if (sidebarOverlay) {

        sidebarOverlay.addEventListener('click', function () {

            sidebar.classList.add('-translate-x-full');

            sidebarOverlay.classList.add('hidden');

        });

    }

</script>

@stack('scripts')

</body>
</html>