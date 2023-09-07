<x-app-layout>
    <x-slot name="header">
        投稿編集
    </x-slot>
    
    <form action="/mygroup/{{ $post->id }}/post_edit" method="POST">
        @csrf
        @method('PUT')
        <div class="title">
            <h2>タイトル</h2>
            <input type="text" name="post[title]" value="{{ $post->title }}"/>
        </div>
        <div class="body">
            <h2>本文</h2>
            <textarea id="body" name="post[body]">{{ $post->body }}</textarea>
        </div>
        <input type="submit" value="保存"/>
    </form>
    <div class="footer">
        <a href="/mygroup/{{ $post->id }}">戻る</a>
    </div>
</x-app-layout>