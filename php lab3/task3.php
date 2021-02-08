<?php
$length=2;
$width=2;
$area=$length*$width;
$perimeter=2*($length+$width);
echo nl2br("Area = $area\n");
echo nl2br("Perimeter = $perimeter\n");
if($length==$width)
{
    echo nl2br("The shape is a square");
}