<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard - Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0e0f1a] text-white">

    <!-- BACKGROUND GLOW -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-20 md:-top-40 left-1/2 -translate-x-1/2 
                   w-[400px] h-[400px] md:w-[900px] md:h-[900px]
                   bg-purple-600/40 rounded-full blur-[150px] md:blur-[200px]">
        </div>

        <div
            class="absolute top-0 right-0 
                   w-[250px] h-[250px] md:w-[500px] md:h-[500px]
                   bg-fuchsia-500/20 blur-[150px] md:blur-[200px]">
        </div>

        <div
            class="absolute bottom-0 left-0 
                   w-[200px] h-[200px] md:w-[400px] md:h-[400px]
                   bg-blue-600/20 blur-[150px] md:blur-[200px]">
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="backdrop-blur-xl bg-white/5 border-b border-white/10 fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 md:py-4 flex items-center justify-between">
            <h1 class="text-xl md:text-2xl font-bold tracking-wide">Welcome</h1>

            <div class="space-x-2 md:space-x-3">
                <a href="/login"
                    class="px-4 py-2 rounded-full bg-white/10 border border-white/20 hover:bg-white/20 transition">
                    Login
                </a>
                <a href="/register"
                    class="px-4 py-2 rounded-full bg-linear-to-r from-purple-500 to-fuchsia-500 shadow-lg hover:opacity-90 transition">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="pt-36 md:pt-48 pb-24 md:pb-32 relative">
        <div class="max-w-4xl mx-auto text-center px-6">

            <!-- Label -->
            <div
                class="inline-block px-4 py-1 rounded-full text-sm bg-white/10 border border-white/20 backdrop-blur-md mb-6">
                Employee Management System
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                Manage Your Employees
                <span
                    class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 to-pink-400">
                    Smarter & Faster
                </span>
            </h1>

            <p class="text-gray-300 text-base md:text-lg mt-6 max-w-2xl mx-auto">
                A modern dashboard built to help you organize employees, track performance,
                monitor data, and streamline company operations with ease.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col md:flex-row justify-center gap-4 mt-10">
                <a href="{{ route('auth.login') }}"
                    class="px-7 py-3 rounded-full text-white font-semibold bg-linear-to-r 
                           from-purple-500 to-fuchsia-500 hover:opacity-90 transition shadow-xl text-center">
                    Get Started →
                </a>

                <a href="#features"
                    class="px-7 py-3 rounded-full bg-white/10 backdrop-blur-xl 
                           border border-white/20 hover:bg-white/20 transition text-center">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- TRUSTED BY -->
    <section class="py-10">
        <div class="max-w-6xl mx-auto opacity-80 px-6">
            <div class="text-center text-gray-400 mb-6 uppercase tracking-wide text-xs md:text-sm">
                Trusted By Teams Worldwide
            </div>

            <!-- Responsive Logos -->
            <div class="grid grid-cols-3 md:grid-cols-6 gap-6 md:gap-10 text-xs md:text-base text-gray-400 text-center">
                <span>Google</span>
                <span>Netflix</span>
                <span>Airbnb</span>
                <span>Microsoft</span>
                <span>Spotify</span>
                <span>HubSpot</span>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="py-16 md:py-24 relative">
        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 md:mb-12">
                Dashboard Highlights
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">

                <div
                    class="p-6 md:p-8 rounded-3xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl hover:bg-white/10 transition">
                    <h3 class="text-xl md:text-2xl font-semibold mb-3">📊 Smart Data Overview</h3>
                    <p class="text-gray-300 text-sm md:text-base">
                        Get an instant overview of employee data with clean, visual analytics and real-time metrics.
                    </p>
                </div>

                <div
                    class="p-6 md:p-8 rounded-3xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl hover:bg-white/10 transition">
                    <h3 class="text-xl md:text-2xl font-semibold mb-3">⚙️ Easy Management</h3>
                    <p class="text-gray-300 text-sm md:text-base">
                        Add, edit, and manage employee records effortlessly with a user-friendly interface.
                    </p>
                </div>

                <div
                    class="p-6 md:p-8 rounded-3xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl hover:bg-white/10 transition">
                    <h3 class="text-xl md:text-2xl font-semibold mb-3">🔐 Secure Access</h3>
                    <p class="text-gray-300 text-sm md:text-base">
                        System protected with authentication so only authorized users can access sensitive data.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-8 md:py-10 text-center text-gray-400 text-sm">
        © {{ date('Y') }} Employee Dashboard. All rights reserved.
    </footer>

</body>

</html>
