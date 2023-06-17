<?php

/* Kode ini mendefinisikan sebuah namespace `Repository` dan menyatakan sebuah interface `TodolistRepository` dengan tiga
Metode `save()`, `remove()`, dan `findAll()`. Itu juga mendefinisikan kelas `todolistrepositoryImpl` class tersebut mengimplementasikan antarmuka `todolistrepository` dan menyediakan implementasi untuk tiga metode. Kelas memiliki properti publik `$todolist` yang merupakan array dan digunakan untuk menyimpan daftar todo item.
Metode `save()` menambahkan item baru ke daftar TODO, metode 
`remove()` menghapus item dari daftar TODO berdasarkan indeksnya, 
dan metode `findAll()` mengembalikan semua item di todo
yang ada di daftar. Pernyataan `use` mengimpor kelas 
`Entity\Todolist` ke namespace.*/

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {

        public array $todolist = array();

        function save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
