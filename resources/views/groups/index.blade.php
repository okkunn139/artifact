<x-app-layout>
    <x-slot name="header">
        団体一覧
    </x-slot>
    
    <div class='groups'>
        @foreach ($groups as $group)
            <div class='group'>
                <h2>
                    <a href="/group_index/{{ $group->id }}">{{ $group->name }} ({{ $group->place }})</a>
                </h2>
            </div>
        @endforeach
    </div>
</x-app-layout>