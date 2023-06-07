<?php

/* Fungsi `A` mendefinisikan dua metode `doA()` dan `doA()` yang akan digunakan di kelas yang menggunakan
sifat ini. Metode `doA()` akan mengeluarkan string "a" diikuti dengan baris baru, dan metode `doB()`
akan mengeluarkan string "B" diikuti oleh baris baru.*/
trait A
{
    function doA(): void
    {
        echo "a" . PHP_EOL;
    }

    function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}


/* Fungsi `B` mendefinisikan dua metode `doA()` dan `doB()` yang akan digunakan di kelas yang menggunakan
sifat ini. Metode `doA()` akan mengeluarkan string "a" diikuti oleh newline, dan metode `doB()` 
akan mengeluarkan string "B" diikuti oleh garis baru.*/
trait B
{
    function doA(): void
    {
        echo "A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}


/* TraitConflict Class menggunakan fungsi A dan B, menyelesaikan konflik antara metode mereka dengan kata kunci insteadof.*/
class TraitConflict
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new TraitConflict();
$sample->doA();
$sample->doB();
