<?php

require_once "data/Manager.php";

/* Kode ini membuat instance baru dari kelas `Manager`, mendeklarasikan properti `name` dari objek dengan "Budi", dan memanggil fungsi `sayHello()` dengan argumen " Joko".*/
$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");
