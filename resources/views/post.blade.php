<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 mx-w-screen-md ">
        <h3 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h3>
        <div class="text-base text-gray-500">
            <div class="text-base text-gray-500">
                By
                <a href="/authors/{{ $post['author']['username'] }}" class="hover:underline">{{ $post['author']['name'] }}</a>
                in
                <a href="/categories/{{ $post['category']['slug'] }}" class="hover:underline">{{ $post['category']['name'] }}</a> | {{ $post['created_at']->format('M d, Y') }}
            </div>

        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>