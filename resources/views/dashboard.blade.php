@extends('admin')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

    {{-- HEADER --}}
    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            Dashboard
        </h1>

        <p class="mt-1 text-sm text-gray-500">
            Sistem Penjadwalan Pelayan Ibadah AOG GMS Bandung
        </p>
    </div>


    {{-- WELCOME CARD --}}
    <div class="rounded-2xl bg-gradient-to-r from-indigo-600 to-purple-600 p-6 text-white shadow-lg">

        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-center">

            <div>
                <p class="text-sm font-medium text-indigo-100">
                    Selamat Datang 👋
                </p>

                <h2 class="mt-1 text-2xl font-bold">
                    Admin / PIC AOG
                </h2>

                <p class="mt-2 max-w-2xl text-sm text-indigo-100">
                    Kelola data pelayan, ketersediaan, jadwal ibadah,
                    serta proses rekomendasi penjadwalan secara sistematis.
                </p>
            </div>

            <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-white/20 text-3xl">
                📅
            </div>

        </div>

    </div>


    {{-- STATISTICS --}}
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">

        {{-- TOTAL PELAYAN --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Total Pelayan
                    </p>

                    <h3 class="mt-2 text-3xl font-bold text-gray-800">
                        48
                    </h3>

                    <p class="mt-1 text-xs text-green-600">
                        Pelayan terdaftar
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-xl">
                    👥
                </div>

            </div>

        </div>


        {{-- DEPARTEMEN --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Departemen
                    </p>

                    <h3 class="mt-2 text-3xl font-bold text-gray-800">
                        12
                    </h3>

                    <p class="mt-1 text-xs text-blue-600">
                        Departemen pelayanan
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-xl">
                    🏢
                </div>

            </div>

        </div>


        {{-- JADWAL --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Jadwal Aktif
                    </p>

                    <h3 class="mt-2 text-3xl font-bold text-gray-800">
                        8
                    </h3>

                    <p class="mt-1 text-xs text-purple-600">
                        Jadwal pelayanan
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-50 text-xl">
                    📆
                </div>

            </div>

        </div>


        {{-- KRITERIA --}}
        <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-gray-500">
                        Kriteria
                    </p>

                    <h3 class="mt-2 text-3xl font-bold text-gray-800">
                        5
                    </h3>

                    <p class="mt-1 text-xs text-orange-600">
                        Kriteria penilaian
                    </p>
                </div>

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-50 text-xl">
                    📊
                </div>

            </div>

        </div>

    </div>


    {{-- MAIN CONTENT --}}
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-3">

        {{-- JADWAL TERDEKAT --}}
        <div class="xl:col-span-2 rounded-2xl border border-gray-100 bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-gray-100 px-6 py-5">

                <div>
                    <h2 class="font-bold text-gray-800">
                        Jadwal Ibadah Terdekat
                    </h2>

                    <p class="mt-1 text-xs text-gray-500">
                        Jadwal pelayanan AOG yang akan datang
                    </p>
                </div>

                <a href="#"
                   class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
                    Lihat semua
                </a>

            </div>


            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-gray-50 text-xs uppercase text-gray-500">

                        <tr>
                            <th class="px-6 py-4">
                                Tanggal
                            </th>

                            <th class="px-6 py-4">
                                Waktu
                            </th>

                            <th class="px-6 py-4">
                                Ibadah
                            </th>

                            <th class="px-6 py-4">
                                Status
                            </th>
                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-800">
                                12 September 2026
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                18:00
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                AOG Worship
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Terjadwal
                                </span>

                            </td>

                        </tr>


                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-800">
                                19 September 2026
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                18:00
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                AOG Worship
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                    Persiapan
                                </span>

                            </td>

                        </tr>


                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-800">
                                26 September 2026
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                18:00
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                AOG Worship
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                    Terbuka
                                </span>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>


        {{-- RINGKASAN --}}
        <div class="rounded-2xl border border-gray-100 bg-white shadow-sm">

            <div class="border-b border-gray-100 px-6 py-5">

                <h2 class="font-bold text-gray-800">
                    Ringkasan Sistem
                </h2>

                <p class="mt-1 text-xs text-gray-500">
                    Kondisi data saat ini
                </p>

            </div>


            <div class="space-y-5 p-6">

                {{-- DATA PELAYAN --}}
                <div>

                    <div class="mb-2 flex justify-between text-sm">

                        <span class="text-gray-600">
                            Data Pelayan
                        </span>

                        <span class="font-semibold text-gray-800">
                            80%
                        </span>

                    </div>

                    <div class="h-2 rounded-full bg-gray-100">

                        <div class="h-2 rounded-full bg-indigo-500"
                             style="width: 80%">
                        </div>

                    </div>

                </div>


                {{-- KETERSEDIAAN --}}
                <div>

                    <div class="mb-2 flex justify-between text-sm">

                        <span class="text-gray-600">
                            Ketersediaan
                        </span>

                        <span class="font-semibold text-gray-800">
                            65%
                        </span>

                    </div>

                    <div class="h-2 rounded-full bg-gray-100">

                        <div class="h-2 rounded-full bg-green-500"
                             style="width: 65%">
                        </div>

                    </div>

                </div>


                {{-- PENILAIAN --}}
                <div>

                    <div class="mb-2 flex justify-between text-sm">

                        <span class="text-gray-600">
                            Data Penilaian
                        </span>

                        <span class="font-semibold text-gray-800">
                            50%
                        </span>

                    </div>

                    <div class="h-2 rounded-full bg-gray-100">

                        <div class="h-2 rounded-full bg-purple-500"
                             style="width: 50%">
                        </div>

                    </div>

                </div>


                {{-- OPTIMASI --}}
                <div>

                    <div class="mb-2 flex justify-between text-sm">

                        <span class="text-gray-600">
                            Proses Optimasi
                        </span>

                        <span class="font-semibold text-gray-800">
                            0%
                        </span>

                    </div>

                    <div class="h-2 rounded-full bg-gray-100">

                        <div class="h-2 rounded-full bg-orange-500"
                             style="width: 0%">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- QUICK MENU --}}
    <div>

        <div class="mb-4">

            <h2 class="text-lg font-bold text-gray-800">
                Menu Cepat
            </h2>

            <p class="text-sm text-gray-500">
                Akses fitur utama sistem
            </p>

        </div>


        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">

            {{-- DATA PELAYAN --}}
            <a href="#"
               class="group rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-xl transition group-hover:bg-indigo-100">
                    👥
                </div>

                <h3 class="font-semibold text-gray-800">
                    Data Pelayan
                </h3>

                <p class="mt-1 text-xs text-gray-500">
                    Kelola data volunteer/pelayan.
                </p>

            </a>


            {{-- KETERSEDIAAN --}}
            <a href="#"
               class="group rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-xl transition group-hover:bg-green-100">
                    🗓️
                </div>

                <h3 class="font-semibold text-gray-800">
                    Ketersediaan
                </h3>

                <p class="mt-1 text-xs text-gray-500">
                    Kelola ketersediaan pelayan.
                </p>

            </a>


            {{-- KRITERIA --}}
            <a href="#"
               class="group rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-50 text-xl transition group-hover:bg-purple-100">
                    📊
                </div>

                <h3 class="font-semibold text-gray-800">
                    Kriteria
                </h3>

                <p class="mt-1 text-xs text-gray-500">
                    Kelola kriteria penilaian.
                </p>

            </a>


            {{-- OPTIMASI --}}
            <a href="#"
               class="group rounded-2xl border border-gray-100 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-orange-50 text-xl transition group-hover:bg-orange-100">
                    ⚙️
                </div>

                <h3 class="font-semibold text-gray-800">
                    Proses Optimasi
                </h3>

                <p class="mt-1 text-xs text-gray-500">
                    CRITIC – DEMATEL – VIKOR.
                </p>

            </a>

        </div>

    </div>

</div>

@endsection