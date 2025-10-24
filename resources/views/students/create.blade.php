<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Student') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-8">
        <div class="bg-white p-6 rounded shadow">
            <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <x-input-label for="dob" :value="__('Date of Birth')" />
                        <x-text-input id="dob" name="dob" type="date" class="mt-1 block w-full" required />
                        <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Course Year -->
                    <div>
                        <x-input-label for="course_year" :value="__('Course Year')" />
                        <x-text-input id="course_year" name="course_year" type="text" class="mt-1 block w-full" required />
                        <x-input-error :messages="$errors->get('course_year')" class="mt-2" />
                    </div>

                    <!-- Photo -->
                    <div>
                        <x-input-label for="photo" :value="__('Photo')" />
                        <x-text-input id="photo" name="photo" type="file" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>
                </div>

                <!-- Address -->
                <div class="mt-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <textarea id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('address') }}</textarea>
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Submit -->
                <div class="mt-6 flex justify-end">
                    <x-primary-button>{{ __('Save Student') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
