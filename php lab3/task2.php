<?php
$marks=85;
if($marks>=90)
{
    echo "A+";
}
elseif($marks>80 and $marks<90)
{
    echo "A";
}
elseif($marks>70 and $marks<80)
{
    echo "A-";
}
elseif($marks>60 and $marks<70)
{
    echo "A";
}
else
{
    echo "F";
}