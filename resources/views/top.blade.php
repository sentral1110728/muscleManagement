<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/top.css') }}">
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
                <div class="articles">
                    <div class="article">
                        <div class="leftArticle">
                            <img class="userImage" src="" href="">
                        </div>
                        <div class="rightArticle">
                            <div class="upperContent">
                                <div class="title">
                                    <h3 class="articleTitle">Title</h3>
                                </div>
                                <div class="articleData">
                                    <p class="userName">name: suguru</p>
                                    <p class="postingTime">2019-10-6 23:05</p>
                                </div>
                            </div>
                            <div>
                                <p class="articleText">texttexttexttexttext</p>
                            </div>
                        </div>
                    </div>

                    <div class="article">
                        <div class="leftArticle">
                            <img class="userImage" src="" href="">
                        </div>
                        <div class="rightArticle">
                            <div class="upperContent">
                                <div class="title">
                                    <h3 class="articleTitle">Title</h3>
                                </div>
                                <div class="articleData">
                                    <p class="userName">name: suguru</p>
                                    <p class="postingTime">2019-10-6 23:05</p>
                                </div>
                            </div>
                            <div>
                                <p class="articleText">texttexttexttexttext</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
