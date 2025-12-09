<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-linear-to-br from-gray-50 to-gray-100 min-h-screen">
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

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-64 bg-linear-to-b from-indigo-600 to-purple-700 text-white flex flex-col shadow-xl">

            <!-- Logo & Profile -->
            <div class="p-6 border-b border-white/10 h-25">
                <div id="logoContainer" class="flex items-center gap-3">
                    <div
                        class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shrink-0">
                        <i class='bx bxs-graduation text-3xl text-white'></i>
                    </div>
                    <div class="sidebar-text">
                        <h2 class="font-bold text-lg">Admin Panel</h2>
                        <p class="text-xs text-white/70">Dashboard v1.0</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-2">

                <a data-page="dashboard"
                    class="nav-item flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition-all">
                    <div class="w-10 h-10 flex items-center justify-center shrink-0">
                        <i class='bx bx-home text-2xl'></i>
                    </div>
                    <span class="sidebar-text font-medium whitespace-nowrap">Dashboard</span>
                </a>

                <a data-page="mahasiswa"
                    class="nav-item flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition-all"
                    onclick="switchPage('mahasiswa')">
                    <div class="w-10 h-10 flex items-center justify-center shrink-0">
                        <i class='bx bx-user text-2xl'></i>
                    </div>
                    <span class="sidebar-text font-medium whitespace-nowrap">Employees</span>
                </a>

                <a data-page="settings"
                    class="nav-item flex items-center gap-3 px-4 py-3 rounded-xl cursor-pointer transition-all"
                    onclick="switchPage('settings')">
                    <div class="w-10 h-10 flex items-center justify-center shrink-0">
                        <i class='bx bx-cog text-2xl'></i>
                    </div>
                    <span class="sidebar-text font-medium whitespace-nowrap">Settings</span>
                </a>

            </nav>


            <!-- Collapse Button -->
            <button data-toggle="sidebar"
                class="m-4 p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-all backdrop-blur-sm flex items-center justify-center">
                <i id="collapseIcon" class='bx bx-chevron-left text-xl shrink-0'></i>
            </button>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">

            <!-- Top Bar -->
            <header class="bg-white shadow-sm sticky top-0 z-10 h-25">
                <div class="flex items-center gap-4 p-4">
                    <button data-toggle="sidebar"" class="lg:hidden text-2xl text-gray-600 hover:text-gray-900">
                        <i class='bx bx-menu'></i>
                    </button>

                    {{-- Request Search --}}
                    <form action="{{ route('employees.index') }}" method="get" id="searchBar"
                        class="flex-1 max-w-xl hidden">
                        <div class="relative flex">
                            <i class='bx bx-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl'></i>
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Search Employees..."
                                class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all mr-3">
                            <button type="submit"
                                class="px-6 py-3 bg-linear-to-r from-indigo-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition-all flex items-center gap-2">Search</button>
                        </div>
                    </form>

                    <div class="flex-1"></div>

                    <div class="flex items-center gap-3">
                        <!-- Dark Mode Toggle -->
                        <button id="themeToggle""
                            class="relative p-2 hover:bg-gray-100 rounded-lg transition-all group">
                            <i id="themeIcon" class='bx bx-moon text-2xl text-gray-600 group-hover:text-gray-900'></i>
                        </button>

                        <button class="relative p-2 hover:bg-gray-100 rounded-lg transition-all">
                            <i class='bx bx-bell text-2xl text-gray-600'></i>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        <!-- User Dropdown -->
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="w-10 h-10 bg-linear-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                                <i class='bx bxs-user text-xl text-white'></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" @click.outside="open = false" x-transition
                                class="absolute right-0 mt-3 w-48 bg-white shadow-xl rounded-xl py-2 z-50">

                                <!-- Username -->
                                <div class="px-4 py-2 border-b border-gray-200">
                                    <p class="text-sm font-semibold text-gray-700 dark:text-white">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                                </div>

                                <!-- Logout -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-white">
                                        Logout
                                    </button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-6">

                {{ $slot }}
                <!-- Settings Page -->
                <div id="page-settings" class="page-content hidden">
                    <div class="mb-8">
                        <h1 class="text-3xl font-bold text-gray-800">Settings</h1>
                        <p class="text-gray-500 mt-1">Manage your application preferences</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100 text-center">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class='bx bx-cog text-3xl text-gray-400'></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Settings Coming Soon</h3>
                        <p class="text-gray-500">This page is under development</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
