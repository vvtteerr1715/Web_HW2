<?php
header("Content-Type:text/html; charset=big5");
session_start();
//執行登入動作
	if(isset($_GET["answer1"])){
		setcookie("choose1", $_GET["answer1"], time()+3600);
		header("Location: hw1.php?step=2");
	}
	if(isset($_GET["answer2"])){
		setcookie("choose2", $_GET["answer2"], time()+3600);
		header("Location: hw1.php?step=3");
	}

//執行重來動作
if(isset($_GET["repeat"])){
	setcookie("choose1","",time()-3600);
	setcookie("choose2","",time()-3600);
	header("Location: hw1.php");
}
?>
<html>
	<head>
		<title>線上測驗</title>
	</head>
	<body>	
	<?php
	if(!isset($_GET["step"])){
			echo"線上測驗"."</br>";
			echo "<a href='?step=1'>準備好了嗎?請按此開始測驗!</a>";
		}
	?>   
	</body>
</html>  


<html> 
<?php 
//step1
if(isset($_GET["step"])&& ($_GET["step"]==1)){
?>	 
	線上測驗:</p>
	1.在PHP程式中，結束迴圈的執行可用哪個指令?</p>
	<form action="hw1.php?step=1">
	<input type="radio" name="answer1" value="1">continue<br/>
	<input type="radio" name="answer1" value="2" checked="true">break<br/>
	<input type="radio" name="answer1" value="3">echo<br/>
	<input type="radio" name="answer1" value="4">define<br/>
	<p>
	<input type="submit" id="button1" value="下一步"/>	
	</p>
</form>
<?php }?>

<?php 
//step2
if(isset($_GET["step"])&& ($_GET["step"]==2)){
?>		
	線上測驗:</p>
	2.以下何者為有關物件導向觀念的指令?</p>
	<form action="hw1.php?step=2">
	<input type="radio" name="answer2" value="1" checked="true">物件導向又稱作OO(Object Oriented)<br/>
	<input type="radio" name="answer2" value="2">又稱為資料庫管理系統<br/>
	<input type="radio" name="answer2" value="3">又稱為檔案管理系統<br/>
	<input type="radio" name="answer2" value="4">又稱為文書處理系統<p/>
	<p>
	<input type="submit" id="button2" value="完成作答"/>
</form>
<?php }?>
</html> 
<?php 
//step3
if(isset($_GET["step"])&& ($_GET["step"]==3)){
?>
線上測驗:</p>
作答結果:</p>
1.在PHP程式中，結束迴圈的執行可用哪個指令?</p>
你選擇的答案是:
<?php
switch($_COOKIE["choose1"]){
	case "1":
		echo "continue"."</br>";
		echo "答錯喔!!"."</br>";
		echo "正確答案是break"."</br>";
		break;
	case "2":
		echo "break"."</br>";
		echo "答對喔!!"."</br>";
		break;
	case "3":
		echo "echo"."</br>";
		echo "答錯喔!!"."</br>";
		echo "正確答案是break"."</br>";
		break;
	case "4":
		echo "define"."</br>";
		echo "答錯喔!!"."</br>";
		echo "正確答案是break"."</br>";
		break;
}
?>
<hr>
2.以下何者為有關物件導向觀念的指令?</p>
你選擇的答案是:
<?php
switch($_COOKIE["choose2"]){
	case "1":
		echo "物件導向又稱作OO(Object Oriented)"."</br>";
		echo "答對喔!!"."</br>";
		break;
	case "2":
		echo "又稱為資料庫管理系統"."</br>";
		echo "答錯喔!!"."</br>";
		echo "正確答案是物件導向又稱作OO(Object Oriented)"."</br>";
		break;
	case "3":
		echo "又稱為檔案管理系統"."</br>";
		echo "答錯喔!!"."</br>";
		echo "正確答案是物件導向又稱作OO(Object Oriented)"."</br>";
		break;
	case "4":
		echo "又稱為文書處理系統"."</br>";
		echo "答錯喔!!"."</br>";
		echo "正確答案是物件導向又稱作OO(Object Oriented)"."</br>";
		break;
}
?>
<a href='?repeat'>重來一次</a>
<?php } ?>
