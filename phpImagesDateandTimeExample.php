<?php
// Resizing Images (GD)
$image = imagecreatefromjpeg("photo.jpg");
$resized = imagescale($image, 200, 200);
imagejpeg($resized, "resized.jpg");

// Current Date and Time
date_default_timezone_set("America/Toronto");
echo date("Y-m-d H:i:s");

// Unix Timestamp
$timestamp = time();
echo "Current Timestamp: $timestamp";

// DateTime Object
$now = new DateTime();
echo $now->format('Y-m-d H:i:s');
?>
