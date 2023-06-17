<?php

/* Kode ini mendefinisikan sebuah namespace `View` dan mendefinisikan sebuah kelas `todolistview` di dalamnya. Kelas ini memiliki
Tiga metode: `showtodolist()`, `addtodolist()`, dan `removetodolist()`.Konstruktor dari Kelas mengambil objek `todolistservice` sebagai parameter dan menugaskannya ke properti pribadi `$todolistService`.
Kelas ini juga mengimpor dua kelas `todolistservice` dan` inputhelper` menggunakan `Use` Keyword.*/

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
