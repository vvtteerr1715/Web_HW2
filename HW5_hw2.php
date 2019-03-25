<?php 

header("Content-Type:text/html; charset=big5");
date_default_timezone_set("Asia/Taipei");

    //可取得該月第一天的時間戳記

    $days =strtotime(date("Y-m-01"));

    //可取得該月1號是該週的星期幾

    $startweek = date("w",$days);
	
	//可取得該月有幾天
	$date =date("t",$days);	
 

    echo '<table border="2" width="500" align="center">';

    echo '<tr>';

    echo '<th bgcolor="pink">星期日</th>';

    echo '<th bgcolor="pink">星期一</th>';

    echo '<th bgcolor="pink">星期二</th>';

    echo '<th bgcolor="pink">星期三</th>';

    echo '<th bgcolor="pink">星期四</th>';

    echo '<th bgcolor="pink">星期五</th>';

    echo '<th bgcolor="pink">星期六</th>';    

    echo '</tr>';

    echo '<tr>';

    for($i=0;$i<$startweek;$i++){

        echo "<td>&nbsp;</td>";

    }

    for ($j=1;$j<=$date;$j++){

        $i++;

      

        echo "<td bgcolor='yellow'>{$j}</td>";

        

        if($i%7 == 0){

            echo '</tr><tr>';

        }

    }

    while($i%7!==0){

        echo '<td>&nbsp;</td>';

        $i++;

    }

    echo '</tr>';

    echo '</table>';
?>

