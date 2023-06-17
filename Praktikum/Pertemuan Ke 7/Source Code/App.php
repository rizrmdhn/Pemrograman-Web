<?php

/* Kode ini mengimpor dan membutuhkan file dan kelas yang diperlukan untuk dijalankan oleh aplikasi Todolist.
Kemudian menciptakan contoh TodolistrepositoryImpl, TodolistServiceImpl, dan TodolistView
kelas, dan akhirnya instance Todolistservice ke Todolistview Constructor. Akhirnya, memanggil Metode showtodolist dari instance TodolistView untuk menampilkan aplikasi Todolist.*/
require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi Todolist" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
