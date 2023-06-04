<?php

/* Memanggil fungsi yang ada pada file `Person.php` yang terletak di direktori` data`, yang berisi kelas `person`
definisi. Ini memungkinkan skrip PHP saat ini untuk mengakses dan menggunakan kelas `person`.Itu
Pernyataan `require_once` memastikan bahwa file hanya disertakan sekali, bahkan jika pernyataannya
disebut beberapa kali.*/
require_once "data/Person.php";


/* Kode ini membuat instance baru dari kelas `person` dengan nama "Eko" dan alamat "Subang",
dan menugaskannya ke variabel `$person`. Kemudian, menetapkan properti `country` dari `$person`
dengan "Indonesia".*/
$person = new Person("Eko", "Subang");
$person->country = "Indonesia";

/* Kode memanggil fungsi `sayHello()` dari objek `$person` dua kali. Panggilan pertama melewati
String "Budi" sebagai argumen, sementara panggilan kedua melewati `null`. Fungsi `sayHello()` akan
mengeluarkan output pesan ucapan yang menyertakan nama yang disahkan sebagai argumen, atau pesan default jika tidak
ada Nama disediakan.*/
$person->sayHello("Budi");
$person->sayHello(null);
