<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="">
            @csrf

            <!-- Title -->
            <div>
                <x-input-label for="title" :value="__('title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                    required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('description')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                    :value="old('description')" required />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <x-primary-button class="ml-4" class="mt-2">
                {{ __('Submit') }}
            </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
