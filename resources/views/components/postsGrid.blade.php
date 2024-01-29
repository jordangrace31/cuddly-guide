@props(['posts'])

<div class="lg:grid lg:grid-cols-3">
    @foreach($posts as $post)
        <x-post-card :post="$post" />
    @endforeach
</div>