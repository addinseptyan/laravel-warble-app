<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Warbles') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <form method="post" action="{{ route('warbles.store') }}" class="space-y-2">
            @csrf
            <textarea name="message" class="dark:bg-gray-800 rounded-lg w-full"
              placeholder="What are you thinking about?"></textarea>
            <x-primary-button>Warble</x-primary-button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
