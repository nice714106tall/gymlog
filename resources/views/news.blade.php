<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>お知らせ</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* 25496a style */
        html{
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            font-family: 'Dela Gothic One', cursive;
        }
        body{
            margin: 0;
            background-color: gold;
            color: #330000;
        }
        .container{
            width: 90%;
            height: 90%;
            margin: 0 auto;
            margin-top: 3%;
            font-size: large;
        }
        .news-item{
            display: inline;
        }
        .news-item-header{
            display: flexbox;
        }
        .news-item-body{
            padding-bottom: 2rem;
            display: flexbox;
        }
        .news-title{
            display:inline-block;
            padding-right: 1rem;
        }
        .news-time{
            font-size: smaller;
        }
    </style>
</head>

<body>
    <div class="container">
        @foreach ($newses as $news)
        <div class="news-item">
            <div class="news-item-header">
                <span class="news-title">{{ $news->title }}</span><span class="news-time">({{ $news->created_at }})</span>
            </div>
            <div class="news-item-body">
                {{ $news->article }}
            </div>
        </div>
        @endforeach
        <div class="paginator-links">
            {{ $newses->links() }}
        </div>
    </div>
</body>

</html>