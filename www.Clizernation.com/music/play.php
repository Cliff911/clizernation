

<?php
include "uploads.php";
include_once 'db_config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Upload</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css" />
</head>
<body>
<div id="header">
    <label>Music Upload</label>
</div>
<div id="body">
    <table width="80%" border="1">
        <tr>
            <th colspan="4">your uploads...<label><a href="../music.php">upload new files...</a></label></th>
        </tr>
        <tr>
            <td>File Name</td>
            <td>File Type</td>
            <td>File Size(KB)</td>
            <td>View</td>
        </tr>
        <?php
        $sql="SELECT * FROM tbl_uploads";
        $result_set=mysql_query($sql);
        while($row=mysql_fetch_array($result_set))
        {
            ?>
            <tr>
                <td><?php echo $row['file'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['size'] ?></td>
                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
            </tr>
            <?php
        }
        ?>
    </table>

</div>
</body>
</html>