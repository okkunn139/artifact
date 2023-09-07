<x-app-layout>
    <x-slot name="header">
        投稿削除
    </x-slot>
    
    <form action="/mygroup/{{ $post->id }}/post_delete" id="form_{{ $post->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="button" onclick="deleteGroup({{ $post->id }})">削除する</button>
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