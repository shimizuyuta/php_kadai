
<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>MyBBS</h1>
    <ul>
        @forelse ($posts as $index => $post)
            <li>
                <a href="/posts/{{ $index }}">
                    {{ $post }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>
</x-layout>

