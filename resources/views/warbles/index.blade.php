<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Warbles') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form action="{{ route('warbles.store') }}" method="post" class="space-y-2">
          @csrf
          <textarea name="message" placeholder="What are you thinking about?"
            class="w-full rounded-lg shadow-sm dark:text-gray-100 dark:bg-gray-800">{{ old('message') }}</textarea>
          <x-input-error :messages="$errors->get('message')" />
          <x-primary-button>Warble</x-primary-button>
        </form>
      </div>

      <div class="bg-white rounded-lg shadow-sm divide-y">
        @foreach ($warbles as $warble)
          <div class="p-6 flex space-x-2">
            <x-warble-icon />
            <div class="flex-1">
              {{-- header --}}
              <div>
                <span class="text-gray-800">{{ $warble->user->name }}</span>
                <small
                  class="text-gray-600 text-sm ml-2">{{ $warble->created_at->format('j M Y, g:i a') }}</small>
              </div>
              {{-- content --}}
              <p class="text-lg text-gray-900">{{ $warble->message }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>




</x-app-layout>
