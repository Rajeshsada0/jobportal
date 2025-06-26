<x-app-layout>
    <div class="max-w-5xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">
            Applicants for: <span class="text-blue-600">{{ $job->title ?? 'Job' }}</span>
        </h1>

        @if ($applicants->isEmpty())
            <p class="text-gray-500">No applicants have applied yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="px-4 py-2 border-b">Name</th>
                            <th class="px-4 py-2 border-b">Email</th>
                            <th class="px-4 py-2 border-b">Phone</th>
                            <th class="px-4 py-2 border-b">Applied For</th>
                            <th class="px-4 py-2 border-b">Resume</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($applicants as $app)
                            <tr class="hover:bg-gray-50 border-b">
                                <td class="px-4 py-2">{{ $app->name }}</td>
                                <td class="px-4 py-2">{{ $app->email }}</td>
                                <td class="px-4 py-2">{{ $app->phone }}</td>
                                <td class="px-4 py-2">{{ $app->title ?? $job->title }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ asset('storage/' . $app->resume) }}" target="_blank"
                                        class="text-blue-600 hover:underline">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
