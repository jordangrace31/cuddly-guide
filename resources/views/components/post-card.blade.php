@props(['post'])

<article
        {{$attributes->merge(['class'=>"mb-8 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"]) }}>
    <div class="py-6 px-5">

        <div class="mt-8 flex flex-col justify-between">
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

            <div class="text-sm mt-2 space-y-4">
                Mobile Number: {!! $post->mobile !!}
            </div>

            <div class="text-sm mt-2 space-y-4">
                Email: {{ $post->email }}
            </div>

            <footer class="flex justify-between items-center mt-8">

                <div class="hidden lg:block">
                    <a href="/posts/{{$post->slug}}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >About {{$post->name}}</a>
                </div>
            </footer>
        </div>
    </div>
</article>
