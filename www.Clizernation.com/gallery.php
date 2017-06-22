<?php
include "Gallery/comments.php";
include "header.php";
include "Gallery/conn.php";


date_default_timezone_set("UTC +2");

?>
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript" src="jquery-3.2.0.js"></script>

<body background="Gallery/wood.jpg">

</body>
<div class="row">
    <div class="twelvecolumns">
        <h1>Welcome to this Magical place Clizernation Gallery</h1>
    </div>
</div>

<div class="gallery">
    <div class="main_image">
        <img src="Gallery/clizer.jpg" />
    </div>

    <div class="selection_image">
        <div class="thumb">
            <div class="overlay"></div>
            <img src="Gallery/kill.jpg" />
        </div>
        <div class="thumb">
            <div class="overlay"></div>
            <img src="Gallery/tell.jpg" />
        </div>
        <div class="thumb">
            <div class="overlay"></div>
            <img src="Gallery/babe.jpg" />
        </div>
        <div class="thumb">
            <div class="overlay"></div>
            <img src="Gallery/fashion.jpg" />
        </div>
        <div class="thumb">
            <div class="overlay"></div>
            <img src="Gallery/love.jpg" />
        </div>
        <div class="thumb">
            <div class="overlay"></div>
            <img src="Gallery/anti.jpg" />
        </div>   <div class="thumb">

            <div class="overlay"></div>
            <img src="Gallery/dont.jpg" />
        </div>



    </div>
</div>


<script>



    $(document).ready(function(){
        $('.thumb').hover(function(){
            $('.main_image img').attr('src',$(this).children('img').attr('src'));
        });
    })



</script>


<div class="row">
    <div class="six columns">
        <iframe width="560" height="315" src="//www.youtube.com/embed/e7O0vJ2DCNk?" frameborder="0" allowfullscreen></iframe>



        <?php
    echo "  <form method='post' action=''>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='",date('Y-m-d H:i:s'),"' >
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentsubmit'>comments</button>
    </form>";
?>

<div class="row">
    <div class="six columns">
        <iframe width="560" height="315" src="//www.youtube.com/embed/NyJdZjvOldg" frameborder="0" allowfullscreen></iframe>




<?php
    echo "  <form method='post' action=''>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='",date('Y-m-d H:i:s'),"' >
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentsubmit'>comments</button>
    </form>";
?>

        <div class="footer" style="text-align: center">
            clizernation.com $tm <?= date("Y") ?> - all rights reserved.
        </div>