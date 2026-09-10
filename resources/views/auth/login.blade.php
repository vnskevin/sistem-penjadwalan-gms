<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Sistem Penjadwalan GMS</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system,
                BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-slate-50">

    <div class="min-h-screen flex">

        <!-- LEFT SIDE -->
        <div class="hidden lg:flex lg:w-1/2 bg-slate-900 text-white p-12
                    flex-col justify-between relative overflow-hidden">

            <!-- Decorative shapes -->
            <div class="absolute -top-32 -left-32 w-96 h-96
                        bg-indigo-500/20 rounded-full blur-3xl"></div>

            <div class="absolute -bottom-32 -right-32 w-96 h-96
                        bg-blue-500/20 rounded-full blur-3xl"></div>

            <div class="relative z-10">

                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-xl bg-white
                                flex items-center justify-center">
                        <span class="text-slate-900 font-bold text-lg">
                            GMS
                        </span>
                    </div>

                    <div>
                        <h1 class="font-bold text-lg">
                            Sistem Penjadwalan GMS
                        </h1>

                        <p class="text-slate-400 text-sm">
                            AOG Bandung
                        </p>
                    </div>
                </div>

            </div>

            <div class="relative z-10 max-w-lg">

                <p class="text-indigo-300 font-semibold mb-4">
                    AOG WORSHIP
                </p>

                <h2 class="text-4xl xl:text-5xl font-bold leading-tight mb-6">
                    Penjadwalan pelayanan yang
                    <span class="text-indigo-400">
                        lebih terstruktur.
                    </span>
                </h2>

                <p class="text-slate-400 text-lg leading-relaxed">
                    Sistem pendukung keputusan untuk membantu proses
                    penjadwalan volunteer pelayanan AOG secara lebih
                    objektif, terukur, dan merata.
                </p>

            </div>

            <div class="relative z-10 text-sm text-slate-500">
                © 2026 Sistem Penjadwalan GMS
            </div>

        </div>


        <!-- RIGHT SIDE -->
        <div class="w-full lg:w-1/2 flex items-center justify-center
                    px-6 py-12">

            <div class="w-full max-w-md">

                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-10">

                    <div class="inline-flex items-center justify-center
                                w-12 h-12 rounded-xl bg-slate-900
                                text-white font-bold mb-3">
                        GMS
                    </div>

                    <h1 class="font-bold text-xl text-slate-900">
                        Sistem Penjadwalan GMS
                    </h1>

                    <p class="text-sm text-slate-500">
                        AOG Bandung
                    </p>

                </div>


                <!-- Login Header -->
                <div class="mb-8">

                    <h2 class="text-3xl font-bold text-slate-900">
                        Selamat datang 👋
                    </h2>

                    <p class="mt-2 text-slate-500">
                        Silakan masuk untuk melanjutkan ke sistem.
                    </p>

                </div>


                <!-- Login Form -->
                <form action="#" method="POST" class="space-y-5">

                    @csrf

                    <!-- Email -->
                    <div>

                        <label
                            for="email"
                            class="block text-sm font-semibold
                                   text-slate-700 mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="nama@email.com"
                            class="w-full px-4 py-3.5 rounded-xl
                                   border border-slate-200
                                   bg-white
                                   text-slate-900
                                   placeholder-slate-400
                                   outline-none
                                   transition
                                   focus:border-indigo-500
                                   focus:ring-4
                                   focus:ring-indigo-500/10"
                            required
                        >

                    </div>


                    <!-- Password -->
                    <div>

                        <div class="flex items-center justify-between mb-2">

                            <label
                                for="password"
                                class="block text-sm font-semibold
                                       text-slate-700">
                                Password
                            </label>

                            <a
                                href="#"
                                class="text-sm font-medium
                                       text-indigo-600
                                       hover:text-indigo-700">
                                Lupa password?
                            </a>

                        </div>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            class="w-full px-4 py-3.5 rounded-xl
                                   border border-slate-200
                                   bg-white
                                   text-slate-900
                                   placeholder-slate-400
                                   outline-none
                                   transition
                                   focus:border-indigo-500
                                   focus:ring-4
                                   focus:ring-indigo-500/10"
                            required
                        >

                    </div>


                    <!-- Remember -->
                    <div class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="w-4 h-4 rounded border-slate-300
                                   text-indigo-600
                                   focus:ring-indigo-500">

                        <label
                            for="remember"
                            class="text-sm text-slate-600">
                            Ingat saya
                        </label>

                    </div>


                    <!-- Button -->
                    <button
                        type="submit"
                        class="w-full py-3.5 px-4 rounded-xl
                               bg-slate-900 text-white
                               font-semibold
                               hover:bg-slate-800
                               active:scale-[0.99]
                               transition">

                        Masuk ke Sistem

                    </button>

                </form>


                <!-- Info -->
                <div class="mt-8 p-4 rounded-xl bg-slate-100
                            border border-slate-200">

                    <p class="text-sm text-slate-600 leading-relaxed">
                        <span class="font-semibold text-slate-800">
                            Catatan:
                        </span>
                        Akun digunakan oleh Admin/PIC dan Pelayan
                        dalam proses pengelolaan jadwal pelayanan AOG.
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>
</html>