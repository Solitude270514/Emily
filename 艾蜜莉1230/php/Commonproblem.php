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
    <link rel='stylesheet' href='../css/Commonproblem.css'>
</head>
<body>

<?php
    //連線
	include("db.php");
?>

    <img src='../image/logo.jpg' id='logo-img' />

    <div id='work' class=''>
        <img src='../image/menu_1.png' />
    </div>

    <div id='title'>
        <span id='title-span'>常見問題</span>
    </div>

    <div id='background'>
        <div id='background-table'>
            <span>
                Q1. 痘痘肌的保養方法
            </span>
        </div>
        <div id='background-table-2' style='height:0px;'>
            <span id='background-table-2-span' style='font-size:0px;'>1. 選擇像胺基酸潔顏霜溫和的清潔成分，洗完不緊繃、不乾澀，才是正常的。</span>
            </br>
            <span id='background-table-2-span' style='font-size:0px;'>2. 皮膚油脂分泌較旺盛，需調理油脂分泌、緊緻毛孔，可使用調理化粧水。</span>
            </br>
            <span id='background-table-2-span' style='font-size:0px;'>3. 避免選擇太油的商品，容易長痘處，可使用淨痘精華 。</span>
            </br>
            <span id='background-table-2-span' style='font-size:0px;'>4. 適度的角質代謝。</span>
            </br>
            <span id='background-table-2-span' style='font-size:0px;'>5. 避免不當的擠壓，破壞皮膚組織，形成凹疤。</span>
        </div>
                       
        <div id='background-table'>
            <span>
                Q2. 基礎保養的程序
            </span>
        </div>
        <div id='background-table-2' style='height:0px;'>
            <span id='background-table-2-span2' style='font-size:0px;'>卸妝 - 洗臉 - 保濕 - 防曬</span>
        </div>

        <div id='background-table'>
            <span>
                Q3. 防曬要補嗎
            </span>
        </div>
        <div id='background-table-2' style='height:0px;'>
            <span id='background-table-2-span3' style='font-size:0px;'>要，最好每隔2-4小時擦一次</span>
        </div>
    </div>
    <script src='../js/Commonproblem.js'></script>
</body>
</html>