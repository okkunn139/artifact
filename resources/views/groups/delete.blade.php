<x-app-layout>
    <x-slot name="header">
        団体ページ削除
    </x-slot>
    
    <form action="/mygroup" id="form_{{ $group->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="button" onclick="deleteGroup({{ $group->id }})">削除する</button>
    </form>
    
    <script>
        function deleteGroup(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>