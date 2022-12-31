<?php
    header("Content-Type:text/html; charset=big5");
?>
<?php
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'emily';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES uff8');
    //echo "1";
}
else {
    echo  mysqli_connect_error();
}
?>