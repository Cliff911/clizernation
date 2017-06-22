<?php

include "header.php";
?>





<html>

<head>
    <title>Welcome to news channel</title>
<!--    <link rel="stylesheet" type="text/css" href=".css.css">-->
<!--    <link rel="stylesheet" href="../css/normalize.css">-->
<!--    <link rel="stylesheet" href="../css/skeleton.css">-->

</head>

<body>
<body background="Gallery/orange.jpg">
<div class="container">

    <div class="welcome">
        <h1>Clizernation news</h1>
        <p>Welcome to Clizernation <em>We never stop making new scenes, Music in our blood streams</em></p>
    </div>

    <div class="news-box">

        <div class="news">
            <h2><a href="news/read-news.php?newsid=1">The boys has made it to the spotlight</a></h2>
            <p>  The Anticlockwise boys has made it to the live National television and  left a huge, mark, the boys left the mic, and crowd speechless</p>
            <span>published on June 9th 2017 by Clizer</span>
        </div>

        <div class="news">
            <h2><a href="news/read-news.php?newsid=2">Out gone Hustling remix, got the industry's attention!!</a></h2>
            <p>Out gone hustling remix wen is making the fans, and the industry heavyweights Dab, Anticlockwise and Benzin the bushman went in the booth and came up with a hit song.</p>
            <span>published on June 9th 2017 by Clizer</span>
        </div>

        <div class="news">
            <h2><a href="news/read-news.php?newsid=3">Lani is killing Durban with some Dibolical punchlines</a></h2>
            <p>The ACW member left for Durban to do better things, Lani left Cape Town Last year December and went straight to the studio and killed about 4 singles.</p>
            <span>published on June 9th 2017 by Clizer</span>
        </div>

        <div class="news">
            <h2><a href="news/read-news.php?newsid=4">Clizer Burned the Stage at Cape Town Hip Hop Music awards with a hit track They Don't understand</a></h2>
            <p>This past Sunday night was a Clizer's Big night when he performed his hit single 'THEY DON'T UNDERSTAND' at the Cape town Hip Hop awards .</p>
            <span>published on June 9th 2017 by Clizer</span>
        </div>

    </div>

    <div class="footer">
        clizernation.com $tm<?= date("Y") ?> - all rights reserved.
    </div>

</div>
</body>
</html>
<?php

require "dbconnect.php";


?>
<?php
// get the database handler
$dbh = connect_to_db(); // function created in dbconnect, remember?
// Fecth news
$news = fetchNews($dbh);
?>

<?php if ( $news && !empty($news) ) :?>

    <?php foreach ($news as $key => $article) :?>
        <h2><a href="news/read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
        <p><?= stripslashes($article->news_short_description) ?></p>
        <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
    <?php endforeach?>

<?php endif?>
