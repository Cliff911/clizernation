<?php

include "header.php";

require "about/ddbconn.php";


?>
<?php

    if($_POST["name"] || $_POST["Email"] ||  $_POST["Message"] ) {
    //insert a new enquiries info in the table


    $name = $_POST['name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    echo $insert_query = "INSERT INTO  information (name, Email, Message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($conn, $insert_query);

    }
    ?>




<body background="Gallery/white.jpg"></body>
</body>


<div class="row">
<div class="twelve columns">
<h1>ABOUT US CLIZERNATION</h1>
</div>
</div>
<div class="row">
    <div class=" nine columns">
        <article>

            Names: Cliff Denzel Nyashanu
            Stage Name :Clizer
            DOB    :28 12 1993
            Place of birth : Harare waterfalls Zimbabwe.<br>
            A songwriter, Rapper, actor, Web developer  Moved to Cape Town South Africa in 2006 went to Dandara primary in Zimbabwe then went to secondary school at Cravenby secondary school that's where my music career started  I've won best artist of the year in 2014 at Cravenby always enjoyed writing lyrics in class Doing rap battles in school and out in the streets i then Met my nigga Russky, Vinta, Kodza and chamboko we formed a crew called NOD "Niggas of destruction " in 2009 then it didn't work out after a while then myself and Russky met Lani then we formed The long living Anticlockwise gang it consists of Clizer,Russky and Lani. We have performed in so many events including the SAADA, Community events, school gigs at Cravenby secondary school, Florida high school,Pafos coner bar i have been into bushradio cypher sessions with Mr meyer, i featured national artists, like D.O.E, BENZIN THE BUSHMAN, STOOMY LIVE etc currently working on my first Album Titled Hustling Mentality.
            Im inspired by the likes of Dr dre,  Rick Ross, Tupac and Martin Luther King Jr.
            Catch me on
            Twitter @king Clizer
            Facebook Clizer acw
            Instagram #Clizer denzel
            Email clizerbookings911@gmail.com /Anticlockwise.music911@gmail.com
            Soundcloud :Anticlockwise gang
            Surely goodness and mercey shall follow me all the days of my life.
        </article>
    </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

    <div class="row">
        <div class="six columns">

            <h1>Contact form</h1>
        </div>
    </div>
    <form>
        <div class="row">
            <div class="six columns">
                <label for="exampleEmailInput">Your email</label>
                <input class="u-full-width" name="email" type="email" placeholder="Clizerbookings911@gmail.com" id="exampleEmailInput">


             <div class="row">
            <div class="eight columns">

            </div>
                 <label for="exampleEmailInput">Your Name</label>
                 <input class="u-full-width" name="name" type="text"  id="exampleEmailInput">




             </div>
        <label for="exampleMessage">Message</label>
        <textarea class="u-full-width " name="message" placeholder="Hey there ask us anything about music…" id="exampleMessage"></textarea>


        <input class="button-primary" type="submit" value="Submit">
    </form>
<div id="footer" STYLE="text-align: center">
    <label style="text-align: center">By <a>cliff@CodeSpace</a></label>
</div>

