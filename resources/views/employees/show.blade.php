<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-linear-to-br from-gray-900 to-gray-800 min-h-screen p-6 flex items-center justify-center">

    <div class="w-full max-w-2xl bg-gray-900/40 shadow-2xl rounded-2xl p-8 border border-white/10 backdrop-blur-md">

        <!-- Header -->
        <h1 class="text-3xl font-bold text-white mb-8">Employee Detail</h1>

        <!-- Profile Section -->
        <div class="flex items-center gap-5 mb-8">
            
            <!-- Avatar -->
            <div
                class="w-24 h-24 bg-indigo-600 rounded-2xl flex items-center justify-center text-5xl font-bold text-white shadow-lg">
                {{ strtoupper(substr($employee->name, 0, 1)) }}
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-white">{{ $employee->name }}</h2>
                <p class="text-gray-400 text-sm">Employee ID: {{ $employee->id }}</p>
            </div>
        </div>

        <!-- Details -->
        <div class="grid grid-cols-1 gap-5 mb-8">

            <div class="p-4 bg-gray-800/50 rounded-xl border border-white/10">
                <p class="text-sm text-gray-400">Full Name</p>
                <p class="text-lg font-medium text-white">{{ $employee->name }}</p>
            </div>

            <div class="p-4 bg-gray-800/50 rounded-xl border border-white/10">
                <p class="text-sm text-gray-400">Job Position</p>
                <p class="text-lg font-medium text-white">{{ $employee->job }}</p>
            </div>

            <div class="p-4 bg-gray-800/50 rounded-xl border border-white/10">
                <p class="text-sm text-gray-400">Date of Birth</p>
                <p class="text-lg font-medium text-white">{{ $employee->date_birth->format('d M Y') }}</p>
            </div>

            <div class="p-4 bg-gray-800/50 rounded-xl border border-white/10">
                <p class="text-sm text-gray-400">Mentor</p>
                <p class="text-lg font-medium text-white">
                    {{ $employee->mentor->name ?? '— No Mentor Assigned —' }}
                </p>
            </div>

        </div>

        <!-- Back Button -->
        <a href="{{ url()->previous() }}"
            class="px-4 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 
                   hover:shadow-lg transition block text-center font-medium">
            ← Back
        </a>

    </div>

</body>

</html>
