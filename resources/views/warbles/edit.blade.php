<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Edit Warble') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form action="{{ route('warbles.update', $warble) }}" method="post" class="space-y-2">
          @csrf
          @method('patch')
          <textarea name="message" placeholder="What are you thinking about?"
            class="w-full rounded-lg shadow-sm dark:text-gray-100 dark:bg-gray-800">{{ old('message', $warble->message) }}</textarea>
          <x-input-error :messages="$errors->get('message')" />
          <div class="space-x-4">
            <x-primary-button>Update</x-primary-button>
            <a href="{{ route('warbles.index') }}" class="dark:text-white">{{ __('Cancel') }}</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</x-app-layout>
