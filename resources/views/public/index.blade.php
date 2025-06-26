<x-app-layout>
    <div class="max-w-5xl mx-auto px-6 py-10">
        <!-- Page Header -->
        
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Available Jobs</h1>

        <!-- Job Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($jobs as $job)
                <div class="bg-white border rounded-lg shadow-sm hover:shadow-md transition p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $job->title }}</h2>
                    <p class="text-gray-600 text-sm mb-1">📍 {{ $job->location }}</p>
                    <p class="text-gray-600 text-sm mb-3">💰 ${{ $job->salary }}</p>
                    <a href="{{ route('jobs.show', $job) }}"
                        class="inline-block text-blue-600 text-sm font-medium hover:underline">
                        View Details →
                    </a>
                </div>
            @endforeach
        </div>

        @if ($jobs->isEmpty())
            <p class="text-center text-gray-500 mt-10">No job postings available right now.</p>
        @endif
    </div>
</x-app-layout>
