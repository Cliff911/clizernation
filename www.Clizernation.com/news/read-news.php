
<html>
<head>
    <title>Welcome to news channel</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="container">

    <div class="welcome">
        <h1>Latest news</h1>
        <p>Welcome to Clizernation <em>We never stop making new scenes, Music in our blood streams</em></p>
        <a href="../news.php">Return to Clizernation</a>
    </div>
    <?php

    require "../dbconnect.php";
    require __DIR__.'../functions.php'


    ?>

<?php
    // get the database handler
    $dbh = connect_to_db();
    // Fecth news
    $news = fetchNews($dbh);
?>

<?php if ( $news && !empty($news) ) :?>

<?php foreach ($news as $key => $article) :?>
<h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
<p><?= stripslashes($article->news_short_description) ?></p>
<span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
<?php endforeach?>

<?php endif?>


    <?php  ?>


        <div class="news-box">

            <div class="news">
                <?php
                // get the database handler
                $dbh = connect_to_db(); // function created in dbconnect, remember?

                $id_article = (int)$_GET['newsid'];

                if ( !empty($id_article) && $id_article > 0) {
                    // Fecth news
                    $article = getAnArticle( $id_article, $dbh );
                    $article = $article[0];
                }else{
                    $article = false;
                    echo "<strong>Wrong article!</strong>";
                }

                $other_articles = getOtherArticles( $id_article, $dbh );

                ?>

                <?php if ( $article && !empty($article) ) :?>

                    <h2><?= stripslashes($article->news_title) ?></h2>
                    <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                    <div>
                        <?= stripslashes($article->news_full_content) ?>
                    </div>
                <?php else:?>

                <?php endif?>
            </div>

            <hr>
            <h1>Other articles</h1>
            <div class="similar-posts">
                <?php if ( $other_articles && !empty($other_articles) ) :?>

                    <?php foreach ($other_articles as $key => $article) :?>
                        <h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
                        <p><?= stripslashes($article->news_short_description) ?></p>
                        <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                    <?php endforeach?>

                <?php endif?>

            </div>

        </div>

        <div class="footer">
            phpocean.com Â© <?= date("Y") ?> - all rights reserved.
        </div>

    </div>
    </body>
    </html>
