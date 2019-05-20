<?php 
	header("Content-Type: text/html; charset=big5");
	include("connMysql.php");
	$seldb = @mysql_select_db("BookStore");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM `books`";
	$result = mysql_query($sql_query);	
	$total_records = mysql_num_rows($result);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>圖書資料管理系統</title>
</head>
<body>
<h1 align="center">圖書資料管理系統</h1>
<p align="center">目前資料筆數：<?php echo $total_records; ?>  <a href="add.php">新增圖書資料</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
    <th>序號</th>
    <th>書名</th>
    <th>作者</th>
    <th>出版商</th>
    <th>出版日期</th>
    <th>售價</th>
  </tr>
  <!-- 資料內容 -->
<?php
	while($row_result=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["cID"]."</td>";
		echo "<td>".$row_result["cBookName"]."</td>";
		echo "<td>".$row_result["cAuthor"]."</td>";
		echo "<td>".$row_result["cPublisher"]."</td>";
		echo "<td>".$row_result["cPublishDate"]."</td>";
		echo "<td>".$row_result["cPrice"]."</td>";
		echo "<td><a href='update.php?id=".$row_result["cID"]."'>修改</a>";
		echo "<a href='delete.php?id=".$row_result["cID"]."'>刪除</a></td>";
		echo "</tr>";
		
	}
?>
</table>
</body>
</html>