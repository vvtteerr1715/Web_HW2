<?php 
header("Content-Type:text/html; charset=big5");
 
    echo '<table border="1" width="800" align="center">';
    echo '<tr><th colspan="3">目前路徑:' .realpath(".").'</th></tr>';
	echo '<tr><th colspan="3"><a href="javascript:window.history.back();">上一層</a>|上傳檔案
	<input type="file" name="fileUpload"/>
	<input type="submit" value="送出" /></th></tr>';
	
    echo '<tr><th>名稱</th><th>檔案大小</th><th>功能</th></tr>';
	
	$fileDir = realpath(".");
	$fileResource = scandir($fileDir);
	echo '<tr>';
	foreach($fileResource as $fileName){
		if(is_file($fileDir.'\\'.$fileName)){	
			echo '<td>'.$fileName.'</td>';
			echo '<th>'.filesize($fileName).' bytes</th>';
			echo '<th><a href=unlink($fileName);>刪除</a></th></tr>';
		}
	}
	echo '</table>';
?>
