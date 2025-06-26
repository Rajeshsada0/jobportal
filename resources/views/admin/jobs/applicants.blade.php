<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Applicants for: {{ $job->title }}</h1>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Resume</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $app)
                <tr>
                    <td>{{ $app->name }}</td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->phone }}</td>
                    <td><a href="{{ asset('storage/' . $app->resume) }}" target="_blank">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
