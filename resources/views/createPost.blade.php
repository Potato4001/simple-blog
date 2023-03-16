<x-app-layout>
<form method="POST" action="{{ url('createPost') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>


        <!-- Head -->
        <div class="mt-4">
            <x-input-label for="headline" :value="__('Headline')" />

            <x-text-input id="headline" class="block mt-1 w-full"
                            type="text"
                            name="head"
                            required />

            <x-input-error :messages="$errors->get('headline')" class="mt-2" />
        </div>

        <!-- Blogeintrag -->
        <div class="mt-4">
            <x-input-label for="blogPost" :value="__('BlogPost')" />
            <textarea id="blogPost" class="block mt-1 w-full" type="text" name="body" :value="old('blogPost')" required></textarea>
            <x-input-error :messages="$errors->get('blogPost')" class="mt-2" />
        </div>

        <!-- Picture -->
        <div class="mt-4">
            <x-input-label for="picture" :value="__('Picture')" />

            <x-text-input id="picture" class="block mt-1 w-full"
                            type="file"
                            name="image" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Publish') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>