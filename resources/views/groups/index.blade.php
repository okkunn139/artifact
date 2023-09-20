<head>
    <link rel="stylesheet" href="{{ asset('css/sub.css') }}">
</head>

<x-app-layout>
    <x-slot name="header">
        <p class="header">
            団体一覧
        </p>
    </x-slot>
    
    <div class="body">
        <div class='groups'>
            @foreach ($groups as $group)
                <div class='group'>
                    <h2>
                        <a href="/group_index/{{ $group->id }}">{{ $group->name }} ({{ $group->place }})</a>
                        <div><img src="upload/{{ $group->image }}" width="800"></div>
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>