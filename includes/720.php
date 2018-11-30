<?php
	for ($hour = "00"; $hour <= "23"; $hour++ ) {
		if ($hour < "10") {
			$hour = str_pad($hour, 2, "0", STR_PAD_LEFT);
		}
		for ($minute = "00"; $minute <= "59"; $minute++ ) {
			if ($minute % 2 == 0) {
				if ($minute < "10") {
					$minute = str_pad($minute, 2, "0", STR_PAD_LEFT);
					$time_url = $hour . $minute . "00.jpg";
				} else {
					$time_url = $hour . $minute . "00.jpg";
				}
				array_push($urls,$image_url = $base_url . $date_url . "_" . $time_url);
			}
		}
	}
?>