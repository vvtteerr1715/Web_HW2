<?php
header("Content-Type: text/html; charset=utf-8");
require_once("connMysql.php");
session_start();
date_default_timezone_set("Asia/Taipei");
$thisYear = date("Y-m-d H:i:s");

//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	header("Location: index.php");
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	unset($_SESSION["loginMember"]);
	header("Location: index.php");
}
//執行更新動作
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE `board` SET"; 
	$sql_query .= "`boardsubject`='".$_POST["boardsubject"]."',";
	$sql_query .= "`boardname`='".$_POST["boardname"]."',";
	$sql_query .= "`boardsex`='".$_POST["boardsex"]."',";
	$sql_query .= "`boardmail`='".$_POST["boardmail"]."',";
	$sql_query .= "`boardweb`='".$_POST["boardweb"]."',";
	$sql_query .= "`boardtime`='".$thisYear."',";
	$sql_query .= "`boardcontent`='".$_POST["boardcontent"]."'";
	$sql_query .=" WHERE boardid=".$_POST["boardid"];
	mysql_query($sql_query);
	//重新導向回到主畫面
	header("Location: admin.php");
}
$query_RecBoard = "SELECT * FROM `board` WHERE `boardid`=".$_GET["id"];
$RecBoard = mysql_query($query_RecBoard);
$row_RecBoard=mysql_fetch_assoc($RecBoard);
?>
<html>
<head>
<title>訪客留言版管理系統</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#ffffff">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <td background="images/admin_topbg.jpg"><img name="admin_r1_c1" src="images/admin_r1_c1.jpg" width="465" height="36" border="0" alt=""></td>
          <td width="15"><img name="admin_r1_c8" src="images/admin_r1_c8.jpg" width="15" height="36" border="0" alt=""></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><img name="admin_r2_c1" src="images/admin_r2_c1.jpg" width="700" height="28" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="images/admin_r3_c1.jpg"><div id="mainRegion">
        <form name="form1" method="post" action="">
          <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
            <tr valign="top">
              <td colspan="2" class="heading">更新訪客留言版資料</td>
            </tr>
            <tr valign="top">
              <td><p>標題
                  <input name="boardsubject" type="text" id="boardsubject" value="<?php echo $row_RecBoard["boardsubject"]?>">
                </p>
                <p>姓名
                  <input name="boardname" type="text" id="boardname" value="<?php echo $row_RecBoard["boardname"]?>">
                </p>
                <p>性別
                  <input name="boardsex" type="radio" id="radio" value="男" <?php if($row_RecBoard["boardsex"]=="男"){echo "checked";}?>>
                  男
                  <input name="boardsex" type="radio" id="radio2" value="女" <?php if($row_RecBoard["boardsex"]=="女"){echo "checked";}?>>
                  女</p>
                <p>郵件
                  <input name="boardmail" type="text" id="boardmail" value="<?php echo $row_RecBoard["boardmail"]?>">
                </p>
                <p>網站
                  <input name="boardweb" type="text" id="boardweb" value="<?php echo $row_RecBoard["boardweb"]?>">
                </p></td>
              <td align="right"><p>
                  <textarea name="boardcontent" id="boardcontent" cols="50" rows="8"><?php echo $row_RecBoard["boardcontent"]?></textarea>
                </p>
                <p>
                  <input name="boardid" type="hidden" id="boardid" value="<?php echo $row_RecBoard["boardid"];?>">
                  <input name="action" type="hidden" id="action" value="update">
                  <input type="submit" name="button" id="button" value="更新資料">
                  <input type="button" name="button3" id="button3" value="回上一頁" onClick="window.history.back();">
                </p></td>
            </tr>
          </table>
        </form>
      </div></td>
  </tr>
  <tr>
    <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <td width="15"><img name="admin_r4_c1" src="images/admin_r4_c1.jpg" width="15" height="31" border="0" alt=""></td>
          <td background="images/admin_botbg.jpg"><a href="?logout=true"><img name="admin_r4_c2" src="images/logout.jpg" width="77" height="31" border="0" alt="登出管理"></a></td>
          <td align="right" valign="top" background="images/admin_botbg.jpg" class="trademark">© 2014 eHappy Studio All Rights Reserved. </td>
          <td width="15"><img name="admin_r4_c8" src="images/admin_r4_c8.jpg" width="15" height="31" border="0" alt=""></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
