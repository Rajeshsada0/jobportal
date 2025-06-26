<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Job List</h1>
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">

        <div class="ml-auto">

            <a href="{{ route('admin.jobs.create') }}"
                class="flex item-center  bg-indigo-800 px-4 py-2 round-lg text-md couser-pointer hover:opacity-90 text-white">Add
                Job</a>
        </div>
        <div className='overflow-hidden rounded-lg border bg-white Shadow-sm'>
            <table className='w-full table-auto'>
                <tr className='bg-gray-700 text-white'>
                    <th class='border p-4'>#</th>
                    <th class='border p-4'>Title</th>
                    <th class='border p-4'>Location</th>
                    <th class='border p-4'>Deadline</th>
                    <th class='border p-4'>Created Date</th>
                    <th class='border p-4'>Actions</th>
                </tr>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr class="text-gray-700">
                            <td class='border p-4 py-2 text-center'>{{ $loop->iteration }}</td>
                            <td class="border p-4 py-2 text-center">{{ $job->title }}</td>
                            <td class="border p-4 py-2 text-center">{{ $job->location }}</td>
                            <td class="border p-4 py-2 text-center">{{ date('d-m-Y', strtotime($job->deadline)) }}</td>
                            <td class="border p-4 py-2 text-center">{{ date('d-m-Y', strtotime($job->created_at)) }}
                            </td>

                            <td class="border p-4 py-2 text-center">
                                <a href="{{ route('admin.jobs.edit', $job) }}" class="text-blue-500">Edit</a> |
                                <a href="{{ route('admin.jobs.applicants', $job) }}"
                                    class="text-green-500">Applicants</a> |
                                <form method="POST" action="{{ route('admin.jobs.destroy', $job) }}" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500"
                                        onclick="return confirm('Delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
