<?php

$file = $_FILES['water_image']["tmp_name"];
$text = date("Y-m-d H:i:s");

$copy_image = imagecreatefromjpeg($file);
list($image_width, $image_height) = getimagesize($file);

$text_width = imagefontwidth(14) * strlen($text);
$text_height = imagefontheight(14);

$text_color = imagecolorallocate($copy_image, 255, 247, 0);
$text_rigth_loc = $image_width - $text_width;
$text_left_loc = $image_height - $text_height;

imagestring($copy_image, 20, $text_rigth_loc, $text_left_loc, $text, $text_color);

$status = imagejpeg($copy_image, "simple.jpg");

echo $status;
