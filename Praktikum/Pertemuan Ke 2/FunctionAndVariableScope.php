<?php
$temp = "The Date is ";

echo longdate(time(), $temp);

function longdate($timestamp, $temp)
{
    return $temp . date("l F jS Y", $timestamp);
}
