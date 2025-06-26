<x-app-layout>
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Admin Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Jobs Card -->
            <div class="bg-white rounded shadow p-6 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <h2 class="text-xl font-semibold text-gray-700">Total Jobs</h2>
                    <p class="text-3xl font-bold text-blue-600">{{ $jobCount }}</p>
                </div>
                <div class="text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-4-6a4 4 0 100-8 4 4 0 000 8zM19 11v6a2 2 0 01-2 2H7a2 2 0 01-2-2v-6" />
                    </svg>
                </div>
            </div>

            <!-- Applicants Card -->
            <div class="bg-white rounded shadow p-6 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <h2 class="text-xl font-semibold text-gray-700">Total Applicants</h2>
                    <p class="text-3xl font-bold text-green-600">{{ $applicantCount }}</p>
                </div>
                <div class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A3 3 0 017 17h10a3 3 0 012.879 3.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
