<x-layout>
    <!-- Dashboard Page -->
    <div id="page-dashboard" class="page-content">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
            <p class="text-gray-500 mt-1">Overview of employee data and activity.</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

            <!-- Total Employees -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <i class='bx bx-user text-2xl text-blue-600'></i>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">+20.1%</span>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Total Employees</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ $employees->total() }}</p>
            </div>

            <!-- Total Departments or Job Roles -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                        <i class='bx bx-briefcase text-2xl text-red-600'></i>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">+15%</span>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Job Categories</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ $jobCount }}</p>
            </div>

            <!-- Active Employees -->
            <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                        <i class='bx bx-group text-2xl text-purple-600'></i>
                    </div>
                    <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Active</span>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Total Mentors</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">{{ $employees->total() }}</p>
            </div>

        </div>

        <!-- Chart -->
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
            <h2 class="text-xl font-bold text-gray-800 mb-6">Statistics Overview</h2>
            <canvas id="mainChart" height="80"></canvas>
        </div>
    </div>


    <!-- Mahasiswa Page -->
    <div id="page-mahasiswa" class="page-content hidden">
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Employee Management</h1>
                <p class="text-gray-500 mt-1">Manage employee data and information</p>
            </div>
            <a href="{{ route('employees.create') }}"
                class="px-6 py-3 bg-linear-to-r from-indigo-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition-all flex items-center gap-2"><i
                    class='bx bx-plus text-xl'></i>
                Add Employee</a>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-10">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Name</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                DATE OF BIRTH</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Job</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Mentor</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @if ($employees->isEMpty())
                            <tr>
                                <td colspan="5" class="text-center py-6 dark:text-slate-100 font-semibold text-sm">
                                    Data yang anda cari tidak ditemukan.
                                </td>
                            </tr>
                        @else
                            @foreach ($employees as $employee)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-10 h-10 bg-linear-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                                @php $p = explode(' ', trim($employee->name)); @endphp
                                                {{ strtoupper($p[0][0] . ($p[1][0] ?? '')) }}
                                            </div>

                                            <div>
                                                <p class="font-semibold text-gray-800">{{ $employee->name }}</p>
                                                <p class="text-xs text-gray-500">Active Employee</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600 font-medium">{{ $employee->date_birth }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $employee->job }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">-</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <button class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition-all"
                                                title="Edit">
                                                <i class='bx bx-edit text-lg'></i>
                                            </button>
                                            <button class="p-2 hover:bg-red-50 text-red-600 rounded-lg transition-all"
                                                title="Delete">
                                                <i class='bx bx-trash text-lg'></i>
                                            </button>
                                            <button
                                                class="p-2 hover:bg-gray-100 text-gray-600 rounded-lg transition-all"
                                                title="More">
                                                <i class='bx bx-dots-vertical-rounded text-lg'></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
        {{ $employees->links() }}

    </div>
</x-layout>
