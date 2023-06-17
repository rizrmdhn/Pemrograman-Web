<?php

/* Ini adalah kode PHP yang mendefinisikan kelas bernama `Todolist` yang di dalamnya terdapat namespace 
`Entity`. Kelas memiliki sebuah Properti pribadi `$todo` dan tiga metode: `__construct()`, `getTodo()`, dan `setTodo()`. `__construct ()` adalah sebuah konstruktor yang menginisialisasi properti `$todo` dengan opsional parameter string. Metode `getTodo ()` mengembalikan nilai properti `$todo`, dan
`setTodo ()` menetapkan nilai properti `$todo` dengan parameter string. Kelas ini bisa
Digunakan untuk membuat objek yang mewakili item daftar yang harus dilakukan.*/

namespace Entity {

    class Todolist
    {

        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}
