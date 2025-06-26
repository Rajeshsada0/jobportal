<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Add New Job</h1>

        <form method="POST" action="{{ route('admin.jobs.store') }}">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input id="title" name="title" type="text" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300"></textarea>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input id="location" name="location" type="text" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input id="salary" name="salary" type="number"
                    class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-6">
                <label for="deadline" class="block text-sm font-medium text-gray-700">Application Deadline</label>
                <input id="deadline" name="deadline" type="date" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="text-right">
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded">
                    Save Job
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
