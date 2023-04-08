<?php
$values = array(10, 9, 8, 7.5);
var_dump($values, '<=== var dump values');

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names, '<=== var dump names');

var_dump($names[0], '<=== var dump names index 0');

$names[0] = "Budi";
var_dump($names, '<=== var dump names index 0 after changes');

unset($names[1]);
var_dump($names, '<=== var dump names index 1 after unset');

$names[] = "Joko";
var_dump($names, '<=== var dump names after add new value');

var_dump(count($names), '<=== var dump count names');
