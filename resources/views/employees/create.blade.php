<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0B0F1A] text-gray-100 min-h-screen flex items-center justify-center relative">

    <!-- Background lighting -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-20 left-20 w-[350px] h-[350px] bg-pink-600/20 blur-[180px] rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-[400px] h-[400px] bg-blue-600/20 blur-[200px] rounded-full"></div>
    </div>

    <!-- Form wrapper -->
    <div class="w-full max-w-2xl bg-white/5 backdrop-blur-2xl border border-white/10 rounded-3xl shadow-2xl p-10">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold tracking-tight">Add Employee</h1>
        </div>

        <form action="{{ route('employees.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Name -->
                <div class="flex flex-col gap-1">
                    <label class="text-sm text-gray-300">Full Name</label>
                    <input type="text" name="name"
                        class="p-3 bg-white/10 border border-white/10 rounded-xl text-gray-100 placeholder-gray-400 focus:ring-2 focus:ring-blue-500/40 outline-none backdrop-blur-lg"
                        value="{{ old('name') }}">

                    @error('name')
                        <p class="text-red-300 text-sm mt-1 drop-shadow-[0_0_4px_rgba(255,0,0,0.5)]">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- DOB -->
                <div class="flex flex-col gap-1">
                    <label class="text-sm text-gray-300">Date of Birth</label>
                    <input type="date" name="date_birth"
                        class="p-3 bg-white/10 border border-white/10 rounded-xl text-gray-100 focus:ring-2 focus:ring-blue-500/40 outline-none backdrop-blur-lg"
                        value="{{ old('date_birth') }}">

                    @error('date_birth')
                        <p class="text-red-300 text-sm mt-1 drop-shadow-[0_0_4px_rgba(255,0,0,0.5)]">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Job -->
                <div class="flex flex-col gap-1">
                    <label class="text-sm text-gray-300">Job</label>
                    <input type="text" name="job"
                        class="p-3 bg-white/10 border border-white/10 rounded-xl text-gray-100 placeholder-gray-400 focus:ring-2 focus:ring-blue-500/40 outline-none backdrop-blur-lg"
                        value="{{ old('job') }}">

                    @error('job')
                        <p class="text-red-300 text-sm mt-1 drop-shadow-[0_0_4px_rgba(255,0,0,0.5)]">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Mentor -->
                <div class="flex flex-col gap-1">
                    <label class="text-sm text-gray-300">Mentor</label>
                    <select name="mentor_id"
                        class="p-3 bg-white/10 border border-white/10 rounded-xl text-gray-100 focus:ring-2 focus:ring-blue-500/40 outline-none backdrop-blur-lg"
                        value="{{ old('name') }}">
                        <option value="">-- Select Mentor --</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->id }}" {{ old('mentor_id') == $mentor->id ? 'selected' : '' }}
                                class="text-gray-900">
                                {{ $mentor->name }}</option>
                        @endforeach
                    </select>

                    @error('mentor_id')
                        <p class="text-red-300 text-sm mt-1 drop-shadow-[0_0_4px_rgba(255,0,0,0.5)]">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            <!-- Submit -->
            <div class="mt-10">
                <button
                    class="w-full py-3.5 font-semibold rounded-xl bg-linear-to-r from-blue-500 to-purple-500 shadow-xl shadow-purple-900/30 hover:opacity-90 active:scale-[0.98] transition-all">
                    + Add Employee
                </button>

            </div>

        </form>
        <a href="{{ url()->previous() }}"
            class="px-4 bg-white/10 hover:bg-white/20 text-gray-200 block mt-5 py-3.5 font-semibold rounded-xl hover:opacity-90 active:scale-[0.98] transition-all text-center">
            ← Back
        </a>

    </div>

</body>

</html>
