<?php

class Manager
{
    /* `var string;` mendeklarasikan properti yang akan diberikan di __construct dengan tipe data string di
    Kelas `Manager`.*/
    var string $name;

    var string $title;

    /**
     * Ini adalah fungsi konstruktor dalam PHP yang menginisialisasi nama dan sifat judul dari
     * objek.
     *
     * @param string name Parameter nama adalah string yang mewakili nama objek yang dideklarasikan.
     * Ini memiliki nilai default dari string kosong, yang berarti bahwa jika tidak ada nilai yang disediakan
     * Untuk parameter nama, itu akan diinisialisasi sebagai string kosong.
     * @param string title parameter "title" adalah string yang mewakili title pekerjaan dari
     * orang sedang dibangun .Nilai defaultnya adalah "Manager".
     */
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    /**
     * Ini adalah fungsi PHP yang mengambil parameter string dan menampilkan pesan ucapan dengan name
     * Parameter dan nama manajer.
     *
     * @param name string parameter "name" adalah parameter tipe string yang mewakili nama
     * Orang yang akan disapanya.
     */
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

/* Kelas VicePresident memperluas kelas manajer dan memiliki metode sayHello() yang menyapa seseorang
dengan nama VP.*/
class VicePresident extends Manager
{

    public function __construct(string $name = "")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
