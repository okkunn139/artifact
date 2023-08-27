<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $group->name }}( {{ $group->place }} )
        </h1>
        <h2 class="image">
            ここに写真を貼る
        </h2>
        <div class="content">
            <p class="description">
                {{ $group->description }}
            </p>
        </div>
        <div class="footer">
            <a href="/group_index">戻る</a>
        </div>
    </body>
</html>