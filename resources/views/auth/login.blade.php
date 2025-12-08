<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Employee Dashboard</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .gradient-bg {
            background: radial-gradient(circle at 30% 20%, rgba(139, 92, 246, 0.45), transparent 60%),
                radial-gradient(circle at 70% 80%, rgba(236, 72, 153, 0.35), transparent 60%),
                #0f1021;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
    </style>
</head>

<body class="gradient-bg h-screen flex items-center justify-center px-4">
    <!-- Toast -->
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
            x-transition:enter="transform transition-all duration-500"
            x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transform transition-all duration-500"
            x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0"
            class="fixed top-5 right-5 z-50 bg-green-600 text-white px-5 py-3 rounded-xl shadow-lg flex items-center gap-3">
            <i class='bx bx-check-circle text-2xl'></i>
            <span class="font-semibold">{{ session('success') }}</span>
        </div>
    @endif

    <div class="glass-card w-full max-w-md p-10 rounded-2xl shadow-xl relative">

        <h1 class="text-3xl font-bold text-center text-white">Welcome Back</h1>
        <p class="text-center text-gray-300 mt-2">Log in to manage your employee dashboard</p>

        <form method="POST" action="" class="mt-8">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                <input type="email" id="email" name="email"
                    class="mt-2 w-full px-4 py-3 rounded-xl bg-gray-800/60 border border-white/10 text-gray-200
                    focus:ring-2 focus:ring-purple-500 outline-none"
                    placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="mt-5 relative">
                <label for="password" class="block text-sm font-medium text-gray-200">Password</label>

                <input type="password" id="password" name="password"
                    class="mt-2 w-full px-4 py-3 rounded-xl bg-gray-800/60 border border-white/10 text-gray-200
                    focus:ring-2 focus:ring-purple-500 outline-none"
                    placeholder="Enter your password" required>

                <!-- Password Toggle Button -->
                <button type="button" id="togglePassword"
                    class="absolute right-4 top-[62%] transform -translate-y-1/2 text-gray-300 hover:text-white transition">

                    <!-- Closed Eye -->
                    <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M3 3l18 18M10.584 10.587a2 2 0 012.829 2.829M9.88 4.53A9.996 9.996 0 0112 4c4.418 0 8 3 10 6-1.043 1.78-2.54 3.33-4.33 4.47M6.53 6.53A10.02 10.02 0 002 10c1.05 1.88 2.57 3.46 4.39 4.62" />
                    </svg>

                    <!-- Open Eye -->
                    <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" />
                    </svg>
                </button>
            </div>

            <!-- Remember me -->
            <div class="mt-4 flex items-center gap-2">
                <input type="checkbox" id="remember" name="remember"
                    class="w-4 h-4 rounded bg-gray-700 border-white/20 text-purple-500 focus:ring-purple-500">
                <label for="remember" class="text-gray-300 text-sm">Remember me</label>
            </div>

            <!-- Button -->
            <button
                class="mt-8 w-full bg-linear-to-r from-purple-500 to-pink-500 text-white py-3 rounded-xl
                font-semibold shadow-lg hover:opacity-90 transition">
                Login
            </button>

            <!-- Link -->
            <p class="text-center text-gray-400 text-sm mt-5">
                Don't have an account?
                <a href="{{ route('auth.register') }}" class="text-purple-400 hover:underline">Create one</a>
            </p>
        </form>
        <p class="text-center text-gray-400 text-sm mt-3">
            <a href="{{ route('welcome') }}" class="hover:underline text-gray-300">
                ← Back to Landing
            </a>
        </p>


    </div>


    <!-- Password Toggle Script -->
    <script>
        const passwordInput = document.getElementById("password");
        const toggleBtn = document.getElementById("togglePassword");
        const eyeClosed = document.getElementById("eyeClosed");
        const eyeOpen = document.getElementById("eyeOpen");

        toggleBtn.addEventListener("click", () => {
            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";
            eyeClosed.classList.toggle("hidden");
            eyeOpen.classList.toggle("hidden");
        });
    </script>

</body>

</html>
