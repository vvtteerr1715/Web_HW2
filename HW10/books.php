<?php 
	header("Content-Type: text/html; charset=big5");
	include("connMysql.php");
	$seldb = @mysql_select_db("BookStore");
	if (!$seldb) die("��Ʈw��ܥ��ѡI");
	$sql_query = "SELECT * FROM `books`";
	$result = mysql_query($sql_query);	
	$total_records = mysql_num_rows($result);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�ϮѸ�ƺ޲z�t��</title>
</head>
<body>
<h1 align="center">�ϮѸ�ƺ޲z�t��</h1>
<p align="center">�ثe��Ƶ��ơG<?php echo $total_records; ?>  <a href="add.php">�s�W�ϮѸ��</a>�C</p>
<table border="1" align="center">
  <!-- �����Y -->
  <tr>
    <th>�Ǹ�</th>
    <th>�ѦW</th>
    <th>�@��</th>
    <th>�X����</th>
    <th>�X�����</th>
    <th>���</th>
  </tr>
  <!-- ��Ƥ��e -->
<?php
	while($row_result=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["cID"]."</td>";
		echo "<td>".$row_result["cBookName"]."</td>";
		echo "<td>".$row_result["cAuthor"]."</td>";
		echo "<td>".$row_result["cPublisher"]."</td>";
		echo "<td>".$row_result["cPublishDate"]."</td>";
		echo "<td>".$row_result["cPrice"]."</td>";
		echo "<td><a href='update.php?id=".$row_result["cID"]."'>�ק�</a>";
		echo "<a href='delete.php?id=".$row_result["cID"]."'>�R��</a></td>";
		echo "</tr>";
		
	}
?>
</table>
</body>
</html>