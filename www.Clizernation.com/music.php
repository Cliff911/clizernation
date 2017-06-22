<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music</title>
</head>
<body>
<body background="Gallery/vvvv.jpg">
</body>
</html>
<br /><br />
<?php
include "header.php";
include "music/uploads.php";
include "music/play.php";

if(isset($_GET['success']))
{
    ?>
    <label>File Uploaded Successfully...  <a href="music/play.php">click here to view file.</a></label>
    <?php
}
else if(isset($_GET['fail']))
{
    ?>
    <label>Problem While File Uploading !</label>
    <?php
}
else
{
    ?>
    <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
    <?php
}
?>

<form action="music/uploads.php" method="post" enctype="multipart/form-data">
    <input type="file" name="music/" />
    <button type="submit" name="btn-upload">upload</button>
</form>
</div>
<div id="footer">
    <label style="text-align: center">By <a>cliff@CodeSpace</a></label>
</div>
</body>
</html>

