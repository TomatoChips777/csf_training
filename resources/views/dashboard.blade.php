<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Section -->
            <div class="mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Welcome back,") }} <strong>{{ Auth::user()->name }}</strong> 👋  
                        <p class="text-sm text-gray-600 mt-2">
                            Use the cards below to manage students and courses.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Students Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-200">
                    <div class="p-6 flex items-center">
                        <div class="flex-shrink-0 bg-indigo-100 text-indigo-600 rounded-full p-3">
                            <!-- Student Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14c4.418 0 8 1.79 8 4v2H4v-2c0-2.21 3.582-4 8-4zM12 12a4 4 0 100-8 4 4 0 000 8z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">Students</h3>
                            <p class="text-sm text-gray-500">Manage student records and profiles.</p>
                            <div class="mt-3">
                                <a href="{{ route('students.index') }}"
                                   class="inline-block px-4 py-2 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700">
                                    View Students
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Courses Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-200">
                    <div class="p-6 flex items-center">
                        <div class="flex-shrink-0 bg-green-100 text-green-600 rounded-full p-3">
                            <!-- Course Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6V4m0 0C9.243 4 7 6.243 7 9v6c0 2.757 2.243 5 5 5s5-2.243 5-5V9c0-2.757-2.243-5-5-5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">Courses</h3>
                            <p class="text-sm text-gray-500">Manage all available courses.</p>
                            <div class="mt-3">
                                <a href="{{ route('courses.index') }}"
                                   class="inline-block px-4 py-2 bg-green-600 text-white text-sm rounded hover:bg-green-700">
                                    View Courses
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
