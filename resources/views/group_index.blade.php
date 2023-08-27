<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>団体一覧</h1>
        <div class='groups'>
            @foreach ($groups as $group)
                <div class='group'>
                    <h2>
                        <a href="/group_index/{{ $group->id }}">{{ $group->name }}( {{ $group->place }} )</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </body>
</html>