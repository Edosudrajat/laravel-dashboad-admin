<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen p-6 flex items-center justify-center">

    <div class="w-full max-w-2xl bg-white shadow-xl rounded-2xl p-8 border border-gray-100">

        <!-- Header -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Employee</h1>

        <!-- Form -->
        <form action="" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <label class="text-sm text-gray-500">Full Name</label>
                <input type="text" name="name" value="{{ old('name', $employee->name) }}"
                    class="w-full mt-1 p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <!-- Job -->
            <div>
                <label class="text-sm text-gray-500">Job Position</label>
                <input type="text" name="job" value="{{ old('job', $employee->job) }}"
                    class="w-full mt-1 p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <!-- Date of Birth -->
            <div>
                <label class="text-sm text-gray-500">Date of Birth</label>
                <input type="date" name="date_birth" value="{{ old('date_birth', $employee->date_birth)->format('Y-m-d') }}"
                    class="w-full mt-1 p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <!-- Mentor -->
            <div>
                <label class="text-sm text-gray-500">Mentor</label>
                <select name="mentor_id"
                    class="w-full mt-1 p-3 rounded-xl border border-gray-300 text-gray-800 dark:text-gray-200 bg-white dark:bg-gray-800
           focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                    <option value="">— No Mentor —</option>

                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->id }}" {{ $employee->mentor_id == $mentor->id ? 'selected' : '' }}>
                            {{ $mentor->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('employees.index') }}"
                    class="px-5 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition">
                    ← Back
                </a>

                <button type="submit"
                    class="px-5 py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
                    Update
                </button>
            </div>
        </form>

    </div>

</body>

</html>
