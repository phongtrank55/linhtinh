<?php
	$now = time();
	// $now=strtotime('2018-12-30');

// $now=strtotime('2018-12-31');
	$week = date('w', $now);
	if ($week==0) { //sunday
		$monday = strtotime('-6 day', $now);
		$sunday = $now; 
	}
	else{
		$monday = strtotime('-'.($week-1) .' day', $now);
		$sunday = strtotime('+6 day', $monday);
	}

	echo 'Tuan nay bat dau tu '. date('d/m/Y', $monday) . ' den ' .  date('d/m/Y', $sunday);
?>