<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>艾蜜莉</title>
    <link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/case.css">
	<link rel="stylesheet" href="../css/consult.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/business.css">
</head>
<body>
    <img src="../image/logo.jpg" id="logo-img"/>

    <div id="work" class="">
        <img src="../image/menu_1.png" />
    </div>

    <div id="form" class="" style="display:none">  
        <div id="form-close" class="">
            <img src="../image/close_2.png" />
        </div>
        

        <div id="form-div">
            <span>01 Member Centre</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-login"><span id="form-div-div-div-div-span-login">登入</span></div></a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-register"><span id="form-div-div-div-div-span-register">註冊</span></div></a>
                    <span>會員中心</span>
            </div> 
            <div id="form-div-div2"></div>
        </div>
        <div id="form-div">
            <span>02 Serve</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-business"><span id="form-div-div-div-div-span-business">營業時間</span></div></a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-consult"><span id="form-div-div-div-div-span-consult">一對一諮詢</span></div></a>  
                <span>服務介紹</span>
            </div>
            <div id="form-div-div2"></div>
        </div>
        <div id="form-div">
            <span>03 Course Introduction</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-cintroduce"><span id="form-div-div-div-div-span">課程介紹</span></div></a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-case"><span id="form-div-div-div-div-span-case">案例照片</span></div></a>
                <span>課程介紹</span>
            </div>
            <div id="form-div-div2"></div>
        </div>
        <div id="form-div">
            <span>04 About us</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-sntroduce"><span id="form-div-div-div-div-span">店家介紹</span></div></a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-question"><span id="form-div-div-div-div-span">常見問題</span></div></a>
                <span>關於我們</span>
            </div>
            <div id="form-div-div2"></div>
        </div>
    </div>
<!----------------登入---------------->
<form name="loginform" method="post" action="login_action.php">
	<div id="login" class="" style="display:none">
        <div id="login-form">
            <div id="login-form-x"><a href="#">X</a></div>

            <div id="login-form-login"><span id="login-form-login-span">登入</span></div>
            <div id="login-form-email"><span id="login-form-email-span">Phone</span></div>
            <div id="login-form-inpemail"><input id="login-form-inpemail-span" type="Phone" name="phone" placeholder="your phone"></div>
            <div id="login-form-paw"><span id="login-form-paw-span">Password</span></div>
            <div id="login-form-inppaw"><input id="login-form-inppaw-span" type="Password" name="password" placeholder="Password"></div>

            <div id="iogin-form-divbut"><button id="login-form-button" type="submit">登入</button></div>
        </div>
	</div>
</form>
<!----------------登入---------------->
<!----------------營業時間---------------->
	<div id="business" class="" style="display:none">
        <div id="business-form">
            <!-- <div id="business-form-x">X</div> -->
				<div class="slideshow-container">
				  <div class="mySlides fade">
					<img decoding="sync" src="../image/11.jpg" class="image">
				  </div>
				 
				  <div class="mySlides fade">
					<img decoding="sync" src="../image/12.jpg" class="image">
				  </div>
					  <a class="prev" onclick="plusSlides(-1)"><</a>
					  <a class="next" onclick="plusSlides(1)">></a>
				</div>
				<br>
					<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span> 
					  <span class="dot" onclick="currentSlide(2)"></span> 
					</div>
			<div id="business-form-divbut">
				<button id="business-form-button-do">我要預約</button>
				<button id="business-form-button-ndo">我再考慮一下</button>
			</div>
        </div>
    </div>
<!----------------營業時間---------------->
<!----------------註冊---------------->
    <form name="registerform" method="post" action="register_action.php"><div id="register" class="" style="display:none">
        <div id="register-form">
            <div id="register-form-register"><span id="register-form-register-span">註冊</span></div>
			
			<div id="register-form-name"><span id="register-form-name-span">Name</span></div>
			<div id="register-form-inpname"><input id="register-form-inpname-span" name="username" type="name" ></div>
			
			<div id="register-form-sex"><span id="register-form-sex-span">Gender</span></div>
            <div id="register-form-inpsex"><input id="register-form-inpsex-span" name="sex" type="sex"></div>
			
			<div id="register-form-phone"><span id="register-form-phone-span">Phone number</span></div>
            <div id="register-form-inpphone"><input id="register-form-inpphone-span" name="phone" type="phone"></div>
			
			<div id="register-form-email"><span id="register-form-email-span">Email</span></div>
            <div id="register-form-inpemail"><input id="register-form-inpemail-span" name="email" type="email"></div>
			
			<div id="register-form-paw"><span id="register-form-paw-span">Password</span></div>
            <div id="register-form-inppaw"><input id="register-form-inppaw-span" name="password" type="Password"></div>
            
			<!-- <div id="register-form-pawcheck"><span id="register-form-pawcheck-span">Password again</span></div>
			<div id="register-form-inppawcheck"><input id="register-form-inppawcheck-span" name="passwordcheck" type="Password"></div> -->
						
            <div id="register-form-divbut">
				<button id="register-form-button-y" type="submit">確定</button>
				<button id="register-form-button-n" type="button">取消</button>
			</div>
        </div>
    </div></form>
	
<!----------------註冊---------------->
<!----------------案例照片---------------->
 <div id="case" class="" style="display:none">
        <div id="case-form">
            <!-- <div id="case-form-x">X</div> -->
				<div class="slideshow-container">
				  <div class="mySlides2 fade2">
					<img decoding="sync" src="../case/1.jpg" class="image1">
				  </div>
				 
				  <div class="mySlides2 fade2">
					<img decoding="sync" src="../case/2.jpg" class="image2">
				  </div>
				  
				   <div class="mySlides2 fade2">
					<img decoding="sync" src="../case/3.jpg" class="image3">
				  </div>
				 
					  <a class="prev" onclick="plusSlides2(-1)"><</a>
					  <a class="next" onclick="plusSlides2(1)">></a>
				</div>
				<br>
					<div style="text-align:center">
					  <span class="dot2" onclick="currentSlide2(1)"></span> 
					  <span class="dot2" onclick="currentSlide2(2)"></span> 
					  <span class="dot2" onclick="currentSlide2(3)"></span> 
					</div>
			<div id="case-form-divbut">
				<!-- <button id="case-form-button-yes">我要預約</button> -->
				<button id="case-form-button-no">返回</button>
			</div>
        </div>
    </div>
<!----------------案例照片---------------->
<!--------------一對一諮詢------------->
    <div id="consult" class="" style="display:none">
        <div id="consult-form">
            <a href="#"><div id="consult-form-x">X</div></a>
            <div id="consult-form-fb"><a href="https://www.facebook.com/AiMiLiShengJiMeiXue" target="_blank"><img src="../image/一對一諮詢連結圖示/facebook.png" /></a></div>
            <div id="consult-form-ig"><a href="https://www.instagram.com/emily_462278/" target="_blank"><img src="../image/一對一諮詢連結圖示/instagram.png" /></a></div>
            <div id="consult-form-li"><a href="https://line.me/R/ti/p/@pua8457h" target="_blank"><img src="../image/一對一諮詢連結圖示/line.png" /></a></div>
        </div>
    </div>
    <!--------------一對一諮詢------------->
	<script src="../js/front.js"></script>
    <script src="../js/index.js"></script>
	<script src="../js/register.js"></script>
    <script src="../js/consult.js"></script>
    <script src="../js/case.js"></script>
    <noscript>You need to enable JavaScript to view the full site.</noscript>

</body>
</html>