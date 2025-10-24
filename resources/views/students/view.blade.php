<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot> --}}

    <div class="max-w-7xl mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Student List</h3>
            <a href="{{ route('students.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Add Student
            </a>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">#</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Photo</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Email</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Course Year</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Phone</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($students as $student)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $loop->iteration }}</td>

                            <td class="px-4 py-2">
                                @if ($student->photo)
                                    <img src="{{ asset('storage/' . $student->photo) }}" alt="Photo" class="h-10 w-10 rounded-full object-cover">
                                @else
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-xs text-gray-500">
                                        N/A
                                    </div>
                                @endif
                            </td>

                            <td class="px-4 py-2 text-sm text-gray-700">{{ $student->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $student->email }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $student->course_year }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $student->phone ?? 'N/A' }}</td>

                            <td class="px-4 py-2 text-sm">
                                <div class="flex space-x-2">
                                    <a href="{{ route('students.edit', $student->id) }}"
                                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-xs">
                                        Edit
                                    </a>

                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this student?')">
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
                            <td colspan="7" class="px-4 py-4 text-center text-gray-500">
                                No students found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination (if using paginate()) -->
        <div class="mt-4">
            {{ $students->links() }}
        </div>
    </div>
</x-app-layout>
