<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/articleCreate.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <title>Muscle TOP</title>
    </head>
    <body>
        <div class="innerBody">
            <header class="header">
                <h1 class="siteTitle">Muscle Management</h1>
                <a class="createArticle" href="">記事投稿</a>
            </header>
            <div class="container">
                <form>
                    <div class="containerBody">
                        <div class="title">
                            <input type="text" placeholder="タイトル">
                        </div>
                        <div class="content">
                            <textarea placeholder="本文"></textarea>
                        </div>
                        <div class="buttonList">
                            <input class="returnBtn" type="button" value="戻る">
                            <input class="sendBtn" type="submit" value="投稿">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
