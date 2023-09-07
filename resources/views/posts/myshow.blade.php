<x-app-layout>
    <x-slot name="header">
        {{ $post->title }}
    </x-slot>
    
    <div class="body">
        <p class="body">
            {{ $post->body }}
        </p>
    </div>
    <div class="edit"><a href="/mygroup/{{ $post->id }}/post_edit">投稿を編集する</a></div>
    <div class="delete"><a href="/mygroup/{{ $post->id }}/post_delete">投稿を削除する</a></div>
    <div class="footer">
        <a href="/mygroup">戻る</a>
    </div>
</x-app-layout>