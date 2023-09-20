<x-app-layout>
    @if ($user->role === "閲覧")
        <x-slot name="header">
            閲覧アカウントのため自団体はありません。
        </x-slot>
    @elseif ($user->group_id === Null)
        <x-slot name="header">
            自団体ページが存在しません。
        </x-slot>
        
        <a href='/mygroup/create'>自団体ページを作成する</a>
    @else
        <x-slot name="header">
            {{ $user->group->name }} ({{ $user->group->place }})
        </x-slot>
        
        <h2 class="image">
            <div><img src="upload/{{ $user->group->image }}" width="800"></div>
        </h2>
        <div class="content">
            <p class="description">
                {{ $user->group->description }}
            </p>
        </div>
        <div class="edit"><a href="/mygroup/edit">団体情報を編集する</a></div>
        <div class="delete"><a href="/mygroup/delete">団体ページを削除する</a></div>
        <div class="post_create"><a href='/mygroup/post_create'>投稿を作成する</a></div>
        <div class="posts">
            投稿一覧
            @foreach($user->group->posts()->get() as $post)
                <div class="post">
                    <a href="/mygroup/{{ $post->id }}">{{ $post->title }}</a>
                    <p>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    @endif
</x-app-layout>