<!doctype html>
<html lang="en">
<head>

<?php
    header("Content-Type:text/html; charset=big5");
?>
    <title>¦ã»e²ú</title>
    <link rel='stylesheet' href='../css/index.css'>
    <link rel='stylesheet' href='../css/register.css'>
    <link rel='stylesheet' href='../css/business.css'>
    <link rel='stylesheet' href='../css/consult.css'>
    <link rel='stylesheet' href='../css/Storeintroduction.css'>
</head>
<body>
    <?php
    //³s½u
	include("db.php");
?>

    <img src='../image/logo.jpg' id='logo-img' />

    <div id='work' class=''>
        <img src='../image/menu_1.png' />
    </div>

   
    <div id='title'>
        <span id='title-span'>©±®a¤¶²Ð</span>
    </div>

    <div id='background'>
        <p id="ptext">
            <?php
                //¬d¸ß©±®a¤¶²Ð
                $sql="SELECT * FROM `Storeintroduction`";
	            $result=mysqli_query($link,$sql);
                $class[0]=mysqli_fetch_row($result);
                echo $class[0][0];
            ?>
        </p>
    </div>
</body>
</html>