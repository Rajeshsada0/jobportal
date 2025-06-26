<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded p-6">
        <!-- Job Details -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $job->title }}</h1>
            <p class="text-gray-600"><strong>Location:</strong> {{ $job->location }}</p>
            <p class="text-gray-600"><strong>Salary:</strong> ${{ $job->salary }}</p>
            <p class="text-gray-600"><strong>Deadline:</strong>
                {{ \Carbon\Carbon::parse($job->deadline)->format('Y-m-d') }}</p>
            <div class="mt-4 text-gray-700 leading-relaxed">
                {{ $job->description }}
            </div>
        </div>

        <!-- Application Section -->
        <div class="border-t pt-6 mt-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Apply for this Job</h2>

            @if (session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('jobs.apply', $job) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_id" value="{{ $job->id }}">

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input id="name" name="name" type="text" required
                        class="mt-1 w-full border px-4 py-2 rounded focus:ring focus:border-blue-300" />
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required
                        class="mt-1 w-full border px-4 py-2 rounded focus:ring focus:border-blue-300" />
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input id="phone" name="phone" type="text" required
                        class="mt-1 w-full border px-4 py-2 rounded focus:ring focus:border-blue-300" />
                </div>

                <div class="mb-6">
                    <label for="resume" class="block text-sm font-medium text-gray-700">Upload Resume (PDF
                        only)</label>
                    <input id="resume" name="resume" type="file" required
                        class="mt-1 w-full border px-4 py-2 rounded bg-white focus:ring focus:border-blue-300" />
                </div>

                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded transition">
                    Submit Application
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
