<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Courses') }}
        </h2>
    </x-slot> --}}

    <div class="max-w-7xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Course List</h3>
            <a href="{{ route('courses.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Add Course
            </a>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">#</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Code</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Duration (weeks)</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Price ($)</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($courses as $course)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $course->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $course->code ?? '—' }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $course->duration_weeks ?? '—' }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $course->price ? number_format($course->price, 2) : '—' }}</td>
                            <td class="px-4 py-2 text-sm">
                                @if ($course->is_active)
                                    <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Active</span>
                                @else
                                    <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded">Inactive</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 text-sm">
                                <div class="flex space-x-2">
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-xs">
                                        Edit
                                    </a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this course?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-xs">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-4 text-center text-gray-500">No courses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $courses->links() }}
        </div>
    </div>
</x-app-layout>
