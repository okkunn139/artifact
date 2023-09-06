<x-app-layout>
    <x-slot name="header">
        {{ $group->name }} ({{ $group->place }})
    </x-slot>
    
    <h2 class="title">
        {{ $post->title }}
    </h2>
    <div class="body">
        <p class="body">
            {{ $post->body }}
        </p>
    </div>
    <div class="footer">
        <a href="/group_index/{{ $group->id }}">戻る</a>
    </div>
</x-app-layout>