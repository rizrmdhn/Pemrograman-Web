<?php

namespace Data\Traits;


/* Fungsi `SayGoodBye` mendefinisikan metode `goodBye` yang mengambil parameter string opsional `$name`.
Jika `$name` nol, itu mengeprint "Good bye" ke konsol. Kalau tidak, itu mengeprint "Good bye" diikuti oleh
nilai `$name`.Sifat ini dapat digunakan oleh kelas yang perlu menerapkan metode `Good bye`.*/

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}


/* Fungsi `HasName` mendefinisikan properti publik `$name` dari tipe string. Sifat ini dapat digunakan oleh
kelas yang perlu memiliki properti nama.*/
trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{

    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun;
}


class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
