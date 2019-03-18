<?php
	header("Content-Type:text/html; charset=big5");
	$showStr="a Window Seat\nA: Which do you prefer, a window seat or an aisle seat?\nB: I always prefer a window seat.\nA: Why?\nB: In case some bad thing happen I can jump out from it.";
	$a = nl2br($showStr);
	echo ucwords($a);
?>
