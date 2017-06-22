<?php



include "header.php";
?>

<body background="Gallery/vvvv.jpg">
<link type="text/css" rel="stylesheet" href="css/styles.css">

</body>
</br>
</br>
</br>

<div class="row">
    <div class="six columns">
        <h1 style="color: #de2c07">Benzin "Turn up the Music"</h1>
        <iframe width="560" height="315" src="//www.youtube.com/embed/BJnuNsPVTkw?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
    <div class=" six columns">

        <?php
        echo "  <form method='post' action=''>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='",date('Y-m-d H:i:s'),"' >
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentsubmit'>comments</button>
    </form>";
        ?>


    </div>
    </div>
</div>
<div class="row">
    <div class="six columns">
        <h1 style="color: #de2c07" class="money">Benzin "Money on me"</h1>
        <iframe width="560" height="315" src="//www.youtube.com/embed/4BvouHuHss0" frameborder="0" allowfullscreen></iframe>
        <div class=" six columns">

            <?php
            echo "  <form method='post' action=''>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='",date('Y-m-d H:i:s'),"' >
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentsubmit'>comments</button>
    </form>";
            ?>



    </div>
</div>



</div>







