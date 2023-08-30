<x-app-layout>
    <x-slot name="header">
        自団体ページ作成
    </x-slot>
    
    <form action="/mygroup" method="POST">
        @csrf
        <div class="category">
            <h2>種別</h2>
            <select name="group[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="name">
            <h2>団体名</h2>
            <input type="text" name="group[name]" placeholder="〇〇団"/>
        </div>
        <div class="image">
            ヘッダー画像アップロード
            画像をアップロードさせる
        </div>
        <div class="description">
            <h2>説明文</h2>
            <textarea name="group[description]" placeholder="団員募集中です！"></textarea>
        </div>
        <div class="place">
            <h2>活動場所</h2>
            <input type="text" name="group[place]" placeholder="東京"/>
        </div>
        <input type="submit" value="保存"/>
    </form>
    <div class="footer">
        <a href="/mygroup">戻る</a>
    </div>
</x-app-layout>