<?php

	$TodayStart = date(
		strtotime('today 00:00:00')
	);
	
	$TodayEnd = date(
		strtotime('today 23:59:59')
	);
	
	$YesterdayStart = date(
		strtotime('yesterday 00:00:00')
	);
	
	$YesterdayEnd = date(
		strtotime('yesterday 23:59:59')
	);
	
	$MonthStart = date(
		strtotime('first day of this month midnight')
	);
	
	$LastMonthStart = strtotime(
		date('d-m-Y 00:00:00', strtotime('first day of last month'))
	);
	
	$LastMonthEnd = strtotime(
		date('r', strtotime(
		date('d-m-Y 00:00:00', strtotime('first day of this month')))
		- 1)
	);
	
?>
