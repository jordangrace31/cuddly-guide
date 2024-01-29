<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <main class="max-w-6xl mx-auto mt-6 mb-12 lg:mt-20 space-y-6">
                    @if ($posts->count())
                        <x-postsGrid :posts="$posts"/>

                        {{ $posts->links() }}
                    @else
                        <p class="text-center">You have no current data.</p>
                    @endif
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
