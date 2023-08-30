<x-app-layout>
    <x-slot name="header">
        {{ $group->name }} ({{ $group->place }})
    </x-slot>
    
    <h2 class="image">
        ここに写真を貼る
    </h2>
    <div class="content">
        <p class="description">
            {{ $group->description }}
        </p>
    </div>
    <div class="posts">
        投稿一覧
        @foreach($group->posts()->get() as $post)
            <div class="post">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>