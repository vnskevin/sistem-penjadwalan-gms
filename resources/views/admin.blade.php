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

        /* =========================
            MENU
        ========================= */

        .menu {
            width: 100%;
        }

        .menu > a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #d1d5db;
            padding: 12px 14px;
            margin-bottom: 6px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .menu > a:hover,
        .menu > a.active {
            background: #4f46e5;
            color: white;
        }


        /* =========================
        DROPDOWN
        ========================= */

        .menu-section {
            margin-bottom: 6px;
        }

        .dropdown-btn {
            width: 100%;
            border: none;
            background: transparent;
            color: #d1d5db;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 12px 14px;

            border-radius: 8px;

            cursor: pointer;

            font-size: 13px;
            font-weight: bold;

            transition: 0.2s;
        }

        .dropdown-btn:hover {
            background: #1f2937;
            color: white;
        }

        .dropdown-btn span:first-child {
            display: flex;
            align-items: center;
            gap: 10px;
        }


        /* =========================
        SUBMENU
        ========================= */

        .submenu {
            display: none;

            padding-left: 10px;
            margin-top: 4px;
        }

        .submenu.show {
            display: block;
        }

        .submenu a {
            display: block;

            text-decoration: none;

            color: #9ca3af;

            padding: 10px 12px 10px 30px;

            border-radius: 7px;

            font-size: 13px;

            transition: 0.2s;
        }

        .submenu a:hover {
            background: #1f2937;
            color: white;
        }


        /* =========================
        ARROW
        ========================= */

        .arrow {
            font-size: 14px;

            transition: transform 0.2s;
        }

        .arrow.rotate {
            transform: rotate(180deg);
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

                 <!-- DASHBOARD -->
                <a href="{{ route('dashboard') }}"
                class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span>🏠</span>
                    <span>Dashboard</span>
                    <br></br>
                </a>


                <!-- DATA MASTER -->
                <div class="menu-section">

                    <button class="dropdown-btn" onclick="toggleMenu('data-master')">
                        <span>
                            📁 DATA MASTER
                        </span>

                        <span class="arrow" id="arrow-data-master">
                            ▾
                        </span>
                    </button>

                    <div class="submenu" id="data-master">

                        <a href="#">
                            👥 Data Pelayan
                        </a>

                        <a href="#">
                            🏢 Data Departemen
                        </a>

                        <a href="#">
                            📋 Data Kriteria
                        </a>

                        <a href="#">
                            📅 Ketersediaan
                        </a>

                    </div>

                </div>


                <!-- PENJADWALAN -->
                <div class="menu-section">

                    <button class="dropdown-btn" onclick="toggleMenu('penjadwalan')">
                        <span>
                            🗓️ PENJADWALAN
                        </span>

                        <span class="arrow" id="arrow-penjadwalan">
                            ▾
                        </span>
                    </button>

                    <div class="submenu" id="penjadwalan">

                        <a href="#">
                            📅 Jadwal Ibadah
                        </a>

                        <a href="#">
                            ⚙️ Proses Optimasi
                        </a>

                        <a href="#">
                            📊 Hasil Ranking
                        </a>

                        <a href="#">
                            📆 Jadwal Pelayanan
                        </a>

                    </div>

                </div>


                <!-- LAINNYA -->
                <div class="menu-section">

                    <button class="dropdown-btn" onclick="toggleMenu('lainnya')">
                        <span>
                            📂 LAINNYA
                        </span>

                        <span class="arrow" id="arrow-lainnya">
                            ▾
                        </span>
                    </button>

                    <div class="submenu" id="lainnya">

                        <a href="#">
                            📄 Laporan
                        </a>

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

<script>
    function toggleMenu(menuId) {

        const menu = document.getElementById(menuId);

        const arrow = document.getElementById('arrow-' + menuId);

        menu.classList.toggle('show');

        arrow.classList.toggle('rotate');
    }
</script>

@stack('scripts')


</body>
</html>