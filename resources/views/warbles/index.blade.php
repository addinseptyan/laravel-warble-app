<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Warbles') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form action="{{ route('warbles.create') }}" method="get">
          <x-primary-button>+ Add Warble</x-primary-button>
        </form>
      </div>

      <div class="bg-white rounded-lg shadow-sm divide-y">
        @foreach ($warbles as $warble)
          <div class="p-6 flex space-x-2">
            <x-warble-icon />
            <div class="flex-1">
              {{-- header --}}
              <div class="flex justify-between items-center">
                <div>
                  <span class="text-gray-800">{{ $warble->user->name }}</span>
                  <small
                    class="text-gray-600 text-sm ml-2">{{ $warble->created_at->format('j M Y, g:i a') }}</small>
                  {{-- edited info --}}
                  @unless ($warble->created_at->eq($warble->updated_at))
                    <small class="text-gray-600 text-sm">
                      &middot; {{ __('edited') }}
                    </small>
                  @endunless
                </div>

                {{-- action button --}}
                @if ($warble->user()->is(auth()->user()))
                  <x-dropdown>
                    <x-slot name="trigger">
                      <button>
                        <span>...</span>
                      </button>
                    </x-slot>
                    <x-slot name="content">
                      <x-dropdown-link :href="route('warbles.edit', $warble)">
                        Edit
                      </x-dropdown-link>
                    </x-slot>
                  </x-dropdown>
                @endif
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
