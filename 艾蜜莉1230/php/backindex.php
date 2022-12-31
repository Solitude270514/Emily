<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後端管理</title>
    
    <link rel="stylesheet" href="../css/backindex.css">
	<link rel="stylesheet" href="../css/business_time.css">
    <link rel="stylesheet" href="../css/case_p.css">
    <link rel="stylesheet" href="../css/appointment_info.css">
    <link rel="stylesheet" href="../css/member_Info.css">
    <link rel="stylesheet" href="../css/course_content.css">
    <link rel="stylesheet" href="../css/qa.css">
	
</head>
<body>
	<div id="form">
	    <div id="form-div">
            <span>01 Store Management</span>
            <div id="form-div-div1">
                <a href="#">
					<div id="form-div-div-div" class="form-div-div-div-store_in">
						<span id="form-div-div-div-div-span-store_in">店家介紹</span>
					</div>
				</a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
                <a href="#">
					<div id="form-div-div-div" class="form-div-div-div-business_time">
						<span id="form-div-div-div-div-span-business_time">營業時間</span>
					</div>
				</a>
				<div id="form-div-div-div2"></div>
				<div id="form-div-div-div3"></div>
				<a href="#">
					<div id="form-div-div-div" class="form-div-div-div-qa">
						<span id="form-div-div-div-div-span-qa">常見問題</span>
					</div>
				</a>
        </div> 
        <div id="form-div-div2"></div>
        </div>
        <div id="form-div">
            <span>02 Course Management</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-course_content"><span id="form-div-div-div-div-span-course_content">課程內容</span></div></a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-case_p"><span id="form-div-div-div-div-span-case_p">案例照片</span></div></a>  
                <span></span>
            </div>
            <div id="form-div-div2"></div>
        </div>
        <div id="form-div">
            <span>03 Member Management</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-member_Info"><span id="form-div-div-div-div-span-member_Info">會員資訊</span></div></a>
            </div>
            <div id="form-div-div2"></div>
        </div>
        <div id="form-div">
            <span>04 Appointment Management</span>
            <div id="form-div-div1">
                <a href="#"><div id="form-div-div-div" class="form-div-div-div-appointment_info"><span id="form-div-div-div-div-span-appointment_info">預約資料</span></div></a>
                <div id="form-div-div-div2"></div>
                <div id="form-div-div-div3"></div>
            </div>
            <div id="form-div-div2"></div>
        </div>
	</div>
<!----------------店家介紹---------------->
<form name="store_inform" method="post" action="store_in_action.php">
	<div id="store_in" class="" style="display:none">
        <div id="store_in-form">
            <div id="store_in-form-x"><a href="#">X</a></div>
			<div id="store_in-form-store_in"><span id="store_in-form-store_in-span">店家介紹</span></div>
            <div id="store_in-form-inpRe"><textarea id="store_in-form-inpRe-span" type="text" name="store-Re" placeholder="(內容介紹)"></textarea></div>
            <div id="store_in-form-divbut"><button id="store_in-form-button" type="submit">編輯完成</button></div>
        </div>
	</div>
</form>
<!----------------店家介紹---------------->
<!----------------營業時間---------------->
<form name="business_timeform" method="post" action="business_time_action.php">
	<div id="business_time" class="" style="display:none">
        <div id="business_time-form">
            <div id="business_time-form-x"><a href="#">X</a></div>
			<div id="business_time-form-business_time"><span id="business_time-form-business_time-span">營業時間</span></div>
			<div>
				<div id="business_time-form-inpRe1">
					<textarea id="business_time-form-inpRe-span" type="text" name="store-Re" placeholder="(營業圖片)"></textarea>
				</div>
				<div id="business_time-form-inpRe2">
					<div id="business_time-form-divbut"><button id="business_time-form-button-bpre">上一筆</button></div>
					<div id="business_time-form-divbut"><button id="business_time-form-button-bnext">下一筆</button></div>
					<div id="business_time-form-divbut"><button id="business_time-form-button-bnew" type="submit">新增</button></div>
					<div id="business_time-form-divbut"><button id="business_time-form-button-bdel" type="submit">刪除</button></div>
				</div>
			</div>
        </div>
	</div>
</form>
<!----------------營業時間---------------->
<!----------------案例圖片case_p---------------->
<form name="case_pform" method="post" action="case_p_action.php">
	<div id="case_p" class="" style="display:none">
        <div id="case_p-form">
            <div id="case_p-form-x"><a href="#">X</a></div>
			<div id="case_p-form-case_p"><span id="case_p-form-case_p-span">營業時間</span></div>
			<div id="case_p-form-inpRe">
				<div id="case_p-form-inpRe1">
					<textarea id="case_p-form-inpRe-span" type="text" name="store-Re" placeholder="(營業圖片)"></textarea>
				</div>
				<div id="case_p-form-inpRe2">
					<div id="case_p-form-divbut"><button id="case_p-form-button-cpre">上一筆</button></div>
					<div id="case_p-form-divbut"><button id="case_p-form-button-cnext">下一筆</button></div>
					<div id="case_p-form-divbut"><button id="case_p-form-button-cnew" type="submit">新增</button></div>
					<div id="case_p-form-divbut"><button id="case_p-form-button-cdel" type="submit">刪除</button></div>
				</div>
			</div>
        </div>
	</div>
</form>
<!----------------案例圖片---------------->
<!----------------預約表---------------->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">面板标题</h3>
    </div>
    <div class="panel-body">
        这是一个基本的面板
    </div>
    <table class="table">
        <th>产品</th><th>价格 </th>
        <tr><td>产品 A</td><td>200</td></tr>
        <tr><td>产品 B</td><td>400</td></tr>
    </table>
</div>
<!----------------預約表---------------->

    <script src="../js/business_time.js"></script>
    <script src="../js/backindex.js"></script>
    <script src="../js/case_p.js"></script>
    <noscript>You need to enable JavaScript to view the full site.</noscript>

</body>
</html>