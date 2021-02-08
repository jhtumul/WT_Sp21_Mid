<?php
$a = array(1,2,3,4,5);
var_dump($a);
unset($a[3]);
$a = array_values($a);
echo nl2br("\n");
var_dump($a);