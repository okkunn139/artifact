<x-app-layout>
    <x-slot name="header">
        {{ $post->title }}
    </x-slot>
    
    <div class="body">
        <p class="body">
            {{ $post->body }}
        </p>
    </div>
    <div class="footer">
        <a href="/mygroup">戻る</a>
    </div>
</x-app-layout>