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
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[900px] 
                    bg-purple-600/40 rounded-full blur-[200px]"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] 
                    bg-fuchsia-500/20 blur-[200px]"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] 
                    bg-blue-600/20 blur-[200px]"></div>
    </div>

    <!-- NAVBAR -->
    <nav class="backdrop-blur-xl bg-white/5 border-b border-white/10 fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold tracking-wide">Welcome</h1>

            <div class="space-x-3">
                <a href="/login"
                    class="px-5 py-2 rounded-full bg-white/10 border border-white/20 hover:bg-white/20 transition">
                    Login
                </a>
                <a href="/register"
                    class="px-5 py-2 rounded-full bg-linear-to-r from-purple-500 to-fuchsia-500 shadow-lg hover:opacity-90 transition">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="pt-48 pb-32 relative">
        <div class="max-w-4xl mx-auto text-center px-6">

            <!-- Small label -->
            <div
                class="inline-block px-4 py-1 rounded-full text-sm bg-white/10 border border-white/20 backdrop-blur-md mb-6">
                Employee Management System
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                Manage Your Employees  
                <span class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 to-pink-400">
                    Smarter & Faster
                </span>
            </h1>

            <p class="text-gray-300 text-lg mt-6 max-w-2xl mx-auto">
                A modern dashboard built to help you organize employees, track performance, monitor data, 
                and streamline company operations with ease.
            </p>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 mt-10">
                <a href="/login"
                    class="px-7 py-3 rounded-full text-white font-semibold bg-linear-to-r 
                           from-purple-500 to-fuchsia-500 hover:opacity-90 transition shadow-xl">
                    Get Started →
                </a>

                <a href="#features"
                    class="px-7 py-3 rounded-full bg-white/10 backdrop-blur-xl 
                           border border-white/20 hover:bg-white/20 transition">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- TRUSTED BY -->
    <section class="py-10">
        <div class="max-w-6xl mx-auto opacity-80">
            <div class="text-center text-gray-400 mb-6 uppercase tracking-wide">Trusted By Teams Worldwide</div>
            <div class="grid grid-cols-3 md:grid-cols-6 gap-10 grayscale hover:grayscale-0 transition">
                <span class="text-center text-gray-400 font-semibold">Google</span>
                <span class="text-center text-gray-400 font-semibold">Netflix</span>
                <span class="text-center text-gray-400 font-semibold">Airbnb</span>
                <span class="text-center text-gray-400 font-semibold">Microsoft</span>
                <span class="text-center text-gray-400 font-semibold">Spotify</span>
                <span class="text-center text-gray-400 font-semibold">HubSpot</span>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="py-24 relative">
        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-4xl font-bold text-center mb-12">Dashboard Highlights</h2>

            <div class="grid md:grid-cols-3 gap-10">

                <!-- Card -->
                <div
                    class="p-8 rounded-3xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl hover:bg-white/10 transition">
                    <h3 class="text-2xl font-semibold mb-3">📊 Smart Data Overview</h3>
                    <p class="text-gray-300">
                        Get an instant overview of employee data with clean, visual analytics and real-time metrics.
                    </p>
                </div>

                <div
                    class="p-8 rounded-3xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl hover:bg-white/10 transition">
                    <h3 class="text-2xl font-semibold mb-3">⚙️ Easy Management</h3>
                    <p class="text-gray-300">
                        Add, edit, and manage employee records effortlessly with a user-friendly interface.
                    </p>
                </div>

                <div
                    class="p-8 rounded-3xl bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl hover:bg-white/10 transition">
                    <h3 class="text-2xl font-semibold mb-3">🔐 Secure Access</h3>
                    <p class="text-gray-300">
                        System protected with authentication so only authorized users can access sensitive data.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-10 text-center text-gray-400">
        © {{ date('Y') }} Employee Dashboard. All rights reserved.
    </footer>

</body>

</html>
