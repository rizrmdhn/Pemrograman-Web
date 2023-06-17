<?php

/* Kode ini mendefinisikan namespace `Service` yang berisi interface
`TodolistService` dan kelas `TodolistServiceImpl` 
yang mengimplementasikan sebuah interface. interface mendefinisikan tiga metode: `showTodolist()`, `addTodolist(string)`, dan 
`remove(int)`. Kelas mengimplementasikan sebuah interface. interface mendefinisikan tiga metode: `showTodolist()`, `addTodolist(string)`, dan `removeTodolist(int)`.
Kelas `TodolistServiceImpl` memiliki konstruktor yang mengambil contoh `todolistrepository` 
sebagai sebuah Parameter dan mengimplementasikan metode yang didefinisikan dalam interface `Todolistservice`. 
Itu `showTodolist()` metode mengambil semua item dalam todolist dari repositori dan menampilkan mereka di konsol. Metode 
`addtodolist(string)` membuat sebuah objek `todolist` baru dengan
Diberikan todo dan menyimpannya ke repositori. Metode 
`removetodolist (int)` menghapus sebuah item dengan nomor yang diberikan dari repositori.*/

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService
    {

        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}
