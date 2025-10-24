<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Course') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-8">
        <div class="bg-white p-6 rounded shadow">
            <form method="POST" action="{{ route('courses.store') }}">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Course Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Code -->
                    <div>
                        <x-input-label for="code" :value="__('Course Code')" />
                        <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('code')" class="mt-2" />
                    </div>

                    <!-- Duration -->
                    <div>
                        <x-input-label for="duration_weeks" :value="__('Duration (weeks)')" />
                        <x-text-input id="duration_weeks" name="duration_weeks" type="number" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('duration_weeks')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div>
                        <x-input-label for="price" :value="__('Price ($)')" />
                        <x-text-input id="price" name="price" type="number" step="0.01" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>
                </div>

                <!-- Description -->
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Active -->
                <div class="mt-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="is_active" value="1" class="rounded border-gray-300" checked>
                        <span class="ml-2 text-gray-700">{{ __('Active') }}</span>
                    </label>
                </div>

                <!-- Submit -->
                <div class="mt-6 flex justify-end">
                    <x-primary-button>{{ __('Save Course') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
