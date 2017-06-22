<?php
     include "read-news.php";
    require __DIR__.'../dbconnect.php';

    function fetchNews( $conn )
    {

        $request = $conn->prepare(" SELECT id, news_title, news_short_description, news_author, news_published_on FROM artists_news ORDER BY news_published_on DESC ");
        return $request->execute() ? $request->fetchAll() : false;
    }


    function getAnArticle( $id_article, $conn )
    {

        $request =  $conn->prepare(" SELECT id,  news_title, news_full_content, news_author, news_published_on FROM artists_news  WHERE news_id = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false;
    }


    function getOtherArticles( $differ_id, $conn )
    {
        $request =  $conn->prepare(" SELECT id,  news_title, news_short_description, news_full_content, news_published_on FROM artists_news  WHERE news_id != ? ");
        return $request->execute(array($differ_id)) ? $request->fetchAll() : false;
    }