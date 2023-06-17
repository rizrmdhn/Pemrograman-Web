<?php


/* Kode ini mendefinisikan sebuah namespace php yang disebut "Helper" dan di dalamnya tedapat sebuah kelas yang disebut "InputHelper".
kelas tersebut memiliki metode statis yang disebut "input" yang mengambil argumen string dan meminta pengguna untuk memasukkan
sebuah string  yang disediakan sebagai prompt. Metode kemudian mengembalikan input pengguna dengan apapun dan mengapus whitespace .*/

namespace Helper {

    class InputHelper
    {

        static function input(string $info): string
        {
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);
        }
    }
}
