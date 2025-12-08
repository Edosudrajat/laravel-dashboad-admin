<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Employee Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-linear-to-br from-indigo-900 via-purple-800 to-fuchsia-700 p-6">

    <div class="w-full max-w-4xl bg-white/10 backdrop-blur-xl border border-white/20 p-10 rounded-2xl shadow-2xl">

        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('welcome') }}"
                class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-md border border-white/30 text-white rounded-xl hover:bg-white/30 transition">

                <!-- Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                        d="M15 19l-7-7 7-7" />
                </svg>

                Back
            </a>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-semibold text-white text-center mb-2">
            Create Your Account
        </h1>
        <p class="text-center text-white/80 mb-10">
            Register to access your employee dashboard
        </p>

        <form action="" method="POST" class="space-y-8">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Full Name -->
                <div>
                    <label class="text-white/80 text-sm">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full mt-1 px-4 py-3 bg-white/20 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-fuchsia-400">
                </div>

                <!-- Email -->
                <div>
                    <label class="text-white/80 text-sm">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full mt-1 px-4 py-3 bg-white/20 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-fuchsia-400">
                </div>

                <!-- Password -->
                <div class="relative">
                    <label class="text-white/80 text-sm">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full mt-1 px-4 py-3 bg-white/20 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-fuchsia-400">

                    <!-- Toggle Button -->
                    <button type="button" onclick="togglePassword('password')"
                        class="absolute right-4 bottom-3 text-gray-300 hover:text-white">

                        <!-- Eye Closed -->
                        <svg id="eyeClosed-password" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                d="M3 3l18 18M10.584 10.587a2 2 0 012.829 2.829M9.88 4.53A9.996 9.996 0 0112 4c4.418 0 8 3 10 6-1.043 1.78-2.54 3.33-4.33 4.47M6.53 6.53A10.02 10.02 0 002 10c1.05 1.88 2.57 3.46 4.39 4.62" />
                        </svg>

                        <!-- Eye Open -->
                        <svg id="eyeOpen-password" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" />
                        </svg>
                    </button>
                </div>

                <!-- Confirm Password -->
                <div class="relative">
                    <label class="text-white/80 text-sm">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full mt-1 px-4 py-3 bg-white/20 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-fuchsia-400">

                    <button type="button" onclick="togglePassword('password_confirmation')"
                        class="absolute right-4 bottom-3 text-gray-300 hover:text-white">

                        <svg id="eyeClosed-password_confirmation" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                d="M3 3l18 18M10.584 10.587a2 2 0 012.829 2.829M9.88 4.53A9.996 9.996 0 0112 4c4.418 0 8 3 10 6-1.043 1.78-2.54 3.33-4.33 4.47M6.53 6.53A10.02 10.02 0 002 10c1.05 1.88 2.57 3.46 4.39 4.62" />
                        </svg>

                        <svg id="eyeOpen-password_confirmation" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                                d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" />
                        </svg>
                    </button>
                </div>

            </div>

            <button class="w-full bg-linear-to-r from-fuchsia-500 to-purple-600 py-3 rounded-xl text-white font-semibold shadow-xl hover:opacity-90 transition">
                Register
            </button>

            <p class="text-center text-white/80 mt-4">
                Already have an account?
                <a href="{{ route('auth.login') }}" class="text-fuchsia-300 hover:underline">Login here</a>
            </p>

        </form>
    </div>

    <script>
        function togglePassword(id) {
            const field = document.getElementById(id);
            const isPassword = field.type === "password";

            field.type = isPassword ? "text" : "password";

            document.getElementById("eyeClosed-" + id).classList.toggle("hidden");
            document.getElementById("eyeOpen-" + id).classList.toggle("hidden");
        }
    </script>

</body>

</html>
