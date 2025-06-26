<x-app-layout>
    <h1 class="text-xl font-bold mb-4">Edit Job</h1>

    <form method="POST" action="{{ route('admin.jobs.update', $job) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium">Title</label>
            <input name="title" value="{{ old('title', $job->title) }}" class="w-full p-2 border" required />
        </div>

        <div class="mb-4">
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full p-2 border" required>{{ old('description', $job->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Location</label>
            <input name="location" value="{{ old('location', $job->location) }}" class="w-full p-2 border" required />
        </div>

        <div class="mb-4">
            <label class="block font-medium">Salary</label>
            <input name="salary" value="{{ old('salary', $job->salary) }}" class="w-full p-2 border" />
        </div>

        <div class="mb-4">
            <label class="block font-medium">Deadline</label>
            <input name="deadline" type="date"
                value="{{ old('deadline', date('Y-m-d', strtotime($job->deadline))) }}">

        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Job</button>
    </form>
</x-app-layout>
