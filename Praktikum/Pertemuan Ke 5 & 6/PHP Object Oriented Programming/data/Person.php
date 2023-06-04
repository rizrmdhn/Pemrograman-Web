<?php

class Person
{
    /* `const AUTHOR =" Programmer Zaman Now ";` mendefinisikan properti konstan bernama `penulis` dengan
    Nilai "programmer zaman sekarang" di dalam kelas `person`.Konstanta ini dapat diakses dari
    Di mana saja di dalam kelas menggunakan `self :: Author` dan nilainya tidak dapat diubah selama runtime.*/
    const AUTHOR = "Programmer Zaman Now";

    /* Baris dibawah ini mendefinisikan properties pada kelas `Person`.*/
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    /**
     * Ini adalah fungsi konstruktor dalam PHP yang mengambil nama string dan alamat string opsional
     * sebagai parameter dan menugaskannya ke properti yang sesuai dari objek.
     *
     * @param string nama parameter string yang diperlukan mewakili nama objek atau entitas.
     * @param address parameter `` adalah tipe string yang dapat dikosongkan, artinya itu bisa
     * string atau nol. Itu adalah parameter opsional yang dapat diteruskan ke konstruktor saat membuat
     * Objek kelas. Jika nilai diteruskan, itu akan ditugaskan ke properti ``
     */
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * Ini adalah fungsi PHP yang menyapa seseorang dengan nama atau memperkenalkan dirinya jika tidak ada nama yang disediakan.
     *
     * @param name adalah parameter fungsi Sayhello (). Itu adalah tipe string yang dapat dikosongkan, yang
     * berarti itu bisa berupa string atau nol. Jika nol, fungsi akan menghasilkan default
     * Pesan dengan properti nama objek. Jika bukan nol, fungsi akan menghasilkan sebuah pesan
     */
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    /**
     * Ini adalah fungsi destruktor dalam PHP yang akan mengeprint pesan saat objek kelas orang
     * dihancurkan.
     */
    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
