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
            ここに写真を貼る
        </h2>
        <div class="content">
            <p class="description">
                {{ $user->group->description }}
            </p>
        </div>
        <div class="posts">
            投稿一覧
            @foreach($user->group->posts()->get() as $post)
                <div class="post">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    @endif
</x-app-layout>