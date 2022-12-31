<!doctype html>
<html lang="en">
<head>

<?php
    header("Content-Type:text/html; charset=big5");
?>
    <title>艾蜜莉</title>
    <link rel='stylesheet' href='../css/index.css'>
    <link rel='stylesheet' href='../css/register.css'>
    <link rel='stylesheet' href='../css/business.css'>
    <link rel='stylesheet' href='../css/consult.css'>
    <link rel='stylesheet' href='../css/CourseIntroduction.css'>
</head>
<body>

<?php
    //連線
	include("db.php");
    //檢查是否登入
    /*if($email==null)
        $login=false;
    else
        $login=true;*/
    $login=true;

?>

    <img src='../image/logo.jpg' id='logo-img' />

    <div id='work' class=''>
        <img src='../image/menu_1.png' />
    </div>

    

    <div id='title'>
        <span id='title-span'>課程介紹</span>
    </div>
<?php
    //查詢有幾個課程
    $sql="SELECT * FROM `class`";
	$result=mysqli_query($link,$sql);
	$classint=mysqli_num_rows($result);
    
    //印出來
    for($i = 0 ;$i<$classint;$i++){
        $y=$i*400+200;;
        $class[$i]=mysqli_fetch_row($result);
        if($i==0){
            echo "<div id='course'  style='top:200px'>
                    <div id='courseform'>
                        <div id='courseform-img'><img src='../image/".$class[$i][3].".jpg' id='courseform-img-img'/></div>
                        <div id='courseform-title'><span id='courseform-title-span'>".$class[$i][0]."</span></div>
                        <div id='courseform-s'><span id='courseform-span'>$".$class[$i][2]."</span></div>
                        <div id='courseform-text'><p id='courseform-text-p'>".$class[$i][1]."</p></div>";
                    if($login)
                        echo "<div id='courseform-buttom' class='courseform-buttom'><span id='courseform-buttom-span'>預約</span></div>";
                     else 
                        echo "<div id='courseform-buttom' class='courseform-buttom-login'><span id='courseform-buttom-span'>預約</span></div>";
            echo
                    "</div>
                    </div>";
        }
        else {
            echo "<div id='course'  style='top:".$y."px'>
                    <div id='courseform'>
                        <div id='courseform-img'><img src='../image/".$class[$i][3].".jpg' id='courseform-img-img'/></div>
                        <div id='courseform-title'><span id='courseform-title-span'>".$class[$i][0]."</span></div>
                        <div id='courseform-s'><span id='courseform-span'>$".$class[$i][2]."</span></div>
                        <div id='courseform-text'><p id='courseform-text-p'>".$class[$i][1]."</p></div>";
                    if($login)
                        echo "<div id='courseform-buttom' class='courseform-buttom'><span id='courseform-buttom-span'>預約</span></div>";
                     else 
                        echo "<div id='courseform-buttom' class='courseform-buttom-login'><span id='courseform-buttom-span'>預約</span></div>";
            echo
                    "</div>
                    </div>";
	    }
    }
    $y=$y+400;
    echo "<div id='course' style='top:".$y."px'></br></div>";

?>
    
    <!--按下預約後的小視窗-->
        <div id='coursewindow-qq' style='display:none'>
            <div id='coursewindow' class='' style='display:none'>
            <div id='coursewindow-form'>
            <form method='post' action='CourseIntroduction.php'>
                <div id='coursewindow-form-title'><span id='coursewindow-form-title-span'>預約課程</span></div>

                <div id='coursewindow-form-a'><span>預約課程:</span></div>
                <div id='coursewindow-form-aa'><span>之後再看怎麼半</span></div>

                <div id='coursewindow-form-b'><span>預約日期:</span></div>
                <div id='coursewindow-form-bb'><input type='date' name='date'></div>
                <div id='coursewindow-form-c'><span>預約時間:</span></div>
                <div id='coursewindow-form-cc'>
                    <select name='pets'>
                        <option value='10:00'  selected>10:00</option>
                        <option value='dog'>Dog</option>
                        <option value='cat'>Cat</option>
                        <option value='hamster'>Hamster</option>
                        <option value='parrot'>Parrot</option>
                        <option value='spider'>Spider</option>
                        <option value='goldfish'>Goldfish</option>
                    </select>
                </div>
                <div id='coursewindow-form-d'><span>附註:</span></div>
                <div id='coursewindow-form-dd'><input type='text' placeholder='(膚況敘述)' name='text'></div>
                
                <div id='coursewindow-form-but'>
                    <div id='coursewindow-form-true'><button id='login-form-button' type='submit'>預約</button></div>
                    <div id='coursewindow-form-x'>取消</div>         
                </div>

            <?php
            setcookie("bool","",time()-30);
            //判斷有沒有輸入值
            if(@$_POST["date"]!="" && @$_POST["pets"]!=""){
                $date=@$_POST["date"];
                $pets=@$_POST["pets"];
                $text=@$_POST["text"];
                //判斷星期對不對(阿拉伯數字0:星期天) date("w",strtotime($date))
                if(date("w",strtotime($date))==3 || date("w",strtotime($date))==4 || date("w",strtotime($date))==5 || date("w",strtotime($date))==6)
                {
                    $sql="INSERT INTO `reservation_table`(`cname`,`rtime`, `rdate`, `gdate`, `rstate`, `rnote`) VALUES ('"."課程名稱之後處裡"."','".$pets."','".$date."','".date('Y/m/d')."','待確認','".$text."');";
		            mysqli_query($link,$sql);
                    echo "<script>alert('預約成功');</script>";
                }
                else{
                    echo "<script>alert('日期輸入失敗');</script>";
                }
                    
            }


            ?>

            </form>
            </div>
        </div>
    </div>
    <!--按下預約後的小視窗-->

    <!----------------登入---------------->
    <div id="login" class="" style="display:none">
        <div id="login-form">
            <div id="login-form-x">X</div>
            
            <div id="login-form-login"><span id="login-form-login-span">登入</span></div>
            <div id="login-form-email"><span id="login-form-email-span">Email</span></div>
            <div id="login-form-inpemail"><input id="login-form-inpemail-span" type="email" placeholder="your email"></div>
            <div id="login-form-paw"><span id="login-form-paw-span">Password</span></div>
            <div id="login-form-inppaw"><input id="login-form-inppaw-span" type="Password" placeholder="Password"></div>

            <div id="iogin-form-divbut"><button id="login-form-button" type="submit">登入</button></div>
        </div>
    </div>
    <!----------------登入---------------->



    <script src='../js/CourseIntroduction.js'></script>
    <script src='../js/index.js'></script>



    <!--
    <script src='../js/business.js'></script>
    <script src='../js/register.js'></script>
    <script src='../js/consult.js'></script>-->
    <noscript>You need to enable JavaScript to view the full site.</noscript>
</body>
</html>