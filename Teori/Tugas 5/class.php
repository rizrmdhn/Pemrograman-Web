<?php
class Number
{
    /* `public $num1;` and `public $num2;` are declaring two public properties of the `Number` class.
   These properties can be accessed and modified from outside the class. In this case, they are used
   to store the two numbers that will be used for addition and subtraction operations. */
    public $num1;
    public $num2;

    /**
     * This is a constructor function in PHP that initializes two variables.
     * 
     * @param num1 The first number that will be assigned to the object's property called "num1".
     * @param num2  is a parameter in the constructor function that is used to assign a value to
     * the property  of the object being created. The value passed as the argument for  will
     * be stored in the  property of the object.
     */
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    /**
     * The function adds two numbers and returns the result.
     * 
     * @return The sum of `$num1` and `$num2` is being returned.
     */
    public function tambah()
    {
        return $this->num1 + $this->num2;
    }

    /**
     * This is a PHP function that subtracts two numbers.
     * 
     * @return The function `kurang()` is returning the result of subtracting `$this->num2` from
     * `$this->num1`.
     */
    public function kurang()
    {
        return $this->num1 - $this->num2;
    }
}

/* `$nilaiTambah = new Number(10, 5);` creates a new object of the `Number` class and assigns it to the
variable `$nilaiTambah`. The constructor function of the `Number` class is called with arguments
`10` and `5`, which initializes the object's properties `$num1` and `$num2` with the values `10` and
`5` respectively. */
$nilaiTambah = new Number(10, 5);
$nilaiKurang = new Number(25, 5);

/* `echo "Hasil penjumlahan : ";` is printing the string "Hasil penjumlahan : " to the console. */
echo "Hasil penjumlahan : ";

/* `echo $nilaiTambah->tambah();` is calling the `tambah()` method of the `$nilaiTambah` object, which
adds the values of `$num1` and `$num2` properties of the object and returns the result. The returned
result is then printed to the console using the `echo` statement. */
echo $nilaiTambah->tambah();
echo "\n";
echo "Hasil pengurangan : ";
echo $nilaiKurang->kurang();
