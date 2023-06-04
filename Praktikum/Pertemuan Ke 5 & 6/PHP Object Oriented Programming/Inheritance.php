<?php

require_once "data/Manager.php";

/* Kode ini membuat instance baru dari kelas `Manager`, mengatur properti `name` dari
objek dengan "Budi", dan memanggil fungsi `sayHello()` dengan objek sebagai argumen dan "joko" sebagai
parameter. Ini akan menghasilkan pesan ucapan yang mencakup nama "Joko" dan nama
Manajer, yaitu "Budi".*/
$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

/* Kode ini membuat instance baru dari kelas `VicePresident` dan menugaskannya ke variabel
`$vp`. Kemudian, ia menetapkan properti `name` dari objek `$vp`menjadi "Eko". Akhirnya, memanggil fungsi
`sayHello()` dengan metode objek `$vp` dengan argumen "joko".*/
$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");
