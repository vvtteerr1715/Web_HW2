<?php
header("Content-Type:text/html; charset=big5");
$showStr = "ABCDE";
echo str_repeat(substr($showStr,0,1),1)."<br>";
echo str_repeat(substr($showStr,1,1),2)."<br>";
echo str_repeat(substr($showStr,2,1),3)."<br>";
echo str_repeat(substr($showStr,3,1),4)."<br>";
echo str_repeat(substr($showStr,4,1),5)."<br>";

?>
