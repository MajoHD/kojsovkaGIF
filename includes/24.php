<?php
	for ($hour = "00"; $hour <= "23"; $hour++ ) {
		if ($hour < "10") {
			$hour = str_pad($hour, 2, "0", STR_PAD_LEFT);
		}
		$time_url = $hour . "0000.jpg";
		array_push($urls,$image_url = $base_url . $date_url . "_" . $time_url);
	}
?>