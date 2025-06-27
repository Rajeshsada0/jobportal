<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Job Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Vite setup -->
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen flex">

        @auth
            <!--  Sidebar (only for authenticated users) -->
            <aside class="w-64 bg-white shadow-md">
                <div class="p-4 font-bold text-xl text-blue-600 border-b">
                    Job Portal
                </div>
                <nav class="p-4 space-y-2">
                    <a href="{{ route('dashboard') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.jobs.index') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('admin/jobs') ? 'bg-gray-200 font-semibold' : '' }}">
                        Manage Jobs
                    </a>
                    <a href="{{ route('admin.jobs.create') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('admin/jobs/create') ? 'bg-gray-200 font-semibold' : '' }}">
                        Create Job
                    </a>
                    <a href="{{ route('admin.applicantlist') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->is('admin/jobs/applicantlist') ? 'bg-gray-200 font-semibold' : '' }}">
                        View Applicants
                    </a>
                </nav>
            </aside>
        @endauth

        <!--  Main Area -->
        <div class="flex-1 flex flex-col">

            <!--  Header -->
            <header
                class="bg-white shadow px-6 py-4 flex items-center {{ Auth::guest() ? 'justify-between' : 'justify-end' }}">
                @guest
                    <div class="text-xl font-bold text-blue-600">
                        <a href="{{ url('/') }}">Job Portal</a>
                    </div>
                @endguest
                <div class="flex justify-end items-center space-x-4">
                    @auth
                        <!-- Profile Dropdown -->
                        <div x-data="{ open: false }" class="relative  ">
                            <button @click="open = !open"
                                class="flex items-center text-gray-700 hover:text-blue-600 focus:outline-none">
                                <span class="mr-2">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded shadow-md z-50">
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700">Edit Profile</a>
                               
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100 text-red-600">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <!-- Guest Links -->
                        <a href="{{ route('login') }}"
                            class="text-sm text-gray-700 hover:text-blue-600 font-medium">Login</a>
                        <a href="{{ route('register') }}"
                            class="text-sm text-gray-700 hover:text-blue-600 font-medium">Register</a>
                    @endauth
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6 w-full">
                {{ $slot ?? '' }}
            </main>
        </div>
    </div>

    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs" defer></script>
</body>

</html>
