<x-app-layout>
    <article class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
            <div class="ml-3 text-left">
                <header>
                    <div class="mt-4">
                        <h1 class="text-xl">
                            {{ $post->name}} {{ $post->surname }}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                        Added <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                    </div>
                </header>

                <div class="mt-2 space-y-4">
                    Mobile Number: {!! $post->mobile !!}
                </div>

                <div class="mt-2 space-y-4">
                    Email: {{ $post->email }}
                </div>

                <div class="mt-2 space-y-4">
                    SA ID: {{ $post->sa_id }}
                </div>

                <div class="mt-2 space-y-4">
                    Birth Date: {{ $post->birthdate }}
                </div>

                <div class="text-sm mt-2 space-y-4 text-gray-700">
                    Language: {{ $post->language }}
                </div>

                <div class="text-sm mt-2 space-y-4 text-gray-700">
                    Interests: {{ $post->interests }}
                </div>

</x-app-layout>
