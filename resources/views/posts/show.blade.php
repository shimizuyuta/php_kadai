
<x-layout>
    <x-slot name="title">
        {{ $post }} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="/">back</a>
        &laquo; <a href="{{route('posts.index')}}">back</a>

    </div>
    <h1>{{$post}}</h1>
</x-layout>

