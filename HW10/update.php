<?php 
include("connMysql.php");
if (!@mysql_select_db("BookStore")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE `books` SET ";
	$sql_query .= "`cBookName`='".$_POST["cBookName"]."',";
	$sql_query .= "`cAuthor`='".$_POST["cAuthor"]."',";
	$sql_query .= "`cPublisher`='".$_POST["cPublisher"]."',";
	$sql_query .= "`cPublishDate`='".$_POST["cPublishDate"]."',";
	$sql_query .= "`cPrice`='".$_POST["cPrice"]."' ";
	$sql_query .= "WHERE `cID`='".$_POST["cID"];
	mysql_query($sql_query);
	//重新導向回到主畫面
	header("Location: data.php");
}
$sql_db = "SELECT * FROM `books` WHERE `cID`=".$_GET["id"];
$result = mysql_query($sql_db);
$row_result=mysql_fetch_assoc($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>圖書資料管理系統</title>
</head>
<body>
<h1 align="center">圖書資料管理系統 - 修改資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>序號</th><th>資料</th>
    </tr>
    <tr>
      <td>書名</td><td><input type="text" name="cBookName" id="cBookName"></td>
    </tr>
    <tr>
      <td>作者</td><td><input type="text" name="cAuthor" id="cAuthor"></td>
    </tr>
    <tr>
      <td>出版商</td><td><input type="text" name="cPublisher" id="cPublisher"></td>
    </tr>
    <tr>
      <td>出版日期</td><td><input type="text" name="cPublishDate" id="cPublishDate"></td>
    </tr>
    <tr>
      <td>售價</td><td><input type="text" name="cPrice" id="cPrice"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="cID" type="hidden" value="<?php ?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>