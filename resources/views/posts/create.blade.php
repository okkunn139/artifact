<x-app-layout>
    <x-slot name="header">
        投稿作成
    </x-slot>
    
    <form action="/mygroup/post_create" method="POST">
        @csrf
        <div class="title">
            <h2>タイトル</h2>
            <input type="text" name="post[title]" placeholder="演奏会のお知らせ"/>
        </div>
        <div class="body">
            <h2>本文</h2>
            <textarea name="post[body]" placeholder="是非見に来てください！"></textarea>
        </div>
        <input type="submit" value="保存"/>
    </form>
    <div class="footer">
        <a href="/mygroup">戻る</a>
    </div>
</x-app-layout>