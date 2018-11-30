<?php

date_default_timezone_set('Europe/Prague');
ini_set('max_execution_time', 300);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//ini_set('memory_limit', '****'); For 720 images gif. 
$base_url = "http://www.shmu.sk/data/datawebcam/hdcam16/";
$date_url = new DateTime();
$date_url->setDate(date("Y"),date("m"), date("d"));
/* You can modify number of days (-1 , -2) */
$date_url->modify('-1 day');
$date_url = ($date_url->format("Ymd"));

$urls = array();

/* How many images? */

include "includes/24.php";
//include "includes/144.php";
//include "includes/720.php";


include "includes/GifCreator.php";
$frames = $urls ;
$gc = new \GifCreator\GifCreator();
$gc->create($frames, 20, 0);
$gifBinary = $gc->getGif();
file_put_contents('gifs/' . $date_url . '.gif', $gifBinary);

echo "Check gifs folder.";

?>