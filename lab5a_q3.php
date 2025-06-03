<?php
function calculateArea($width, $length) {
    return $width * $length;
}

$width = 4;
$length = 2;
$area = calculateArea($width, $length);

echo "<b>The area of a rectangle with a width of $width and $length is $area.</b>";
?>