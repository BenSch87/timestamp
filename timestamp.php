<?php>

		$time = time("England/Stockholm");
		$actual_time = date('H:i:s', $time);
	echo "Current time in England is:".$actual_time;
	echo "<br>";

date_defaults_set("Europe/Stockholm");
	echo "Europe/Stockholm:".time();
	echo "<br";
?>

<?php>
	 date_default_timezone_get ("Europe/Stockholm");

$swedenTime = date_default_timezone_get();

if (strcmp($swedenTime, ini_get('date.timezone'))){
	echo "Script timezone differs from ini-set timezone.";
}
else {
	echo "Script timeszone and ini-set timezone match.";
}


?>