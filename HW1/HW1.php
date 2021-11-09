<?php
class ProductCar
{
    public $name;
    public $model;
    public $year;
    public $country;
    public $price;


    public function __construct($name, $model, $year,$country,$price)
    {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;
        $this->country = $country;
        $this->price = $price;
    }
public function Number() //Количество
{
    static $num = 0;
    ++$num;
    echo $num.PHP_EOL;
}
public function Discount() //Скидка
{
    static $discount = 0.05;
    $this->price = $this->price - $this->price*$discount;
    echo $this->price.PHP_EOL;
}
}

class Wheel extends ProductCar
{
    public $name;
    public $model;
    public $country;
    public $price;

    public function __construct($name, $model,$country,$price)
    {
        $this->name = $name;
        $this->model = $model;
        $this->country = $country;
        $this->price = $price;
    }

}


$car1 = new ProductCar('Mazda', '6',"2011", "Japan", '800000');
$car2 = new ProductCar('Mazda', '3',"2010", "Japan", '600000');
$car1->Number();
$car1->Discount();
$car2->Number();
$car2->Discount();

$wheel1 = new Wheel('NOKIAN', 'Hakkapelita 8', "Finland", '7500');
$wheel1->Number();
$wheel1->Discount();

/*
5 задание

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
Ответ: 1234. static $x = 0; - инициализирует переменную, так как $a1 и $a2 относятся к одному классу,
то счетчик будет один. foo() вызывается 4 раза, поэтому последенее число будет 4.


6 задание

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

Ответ: 1122. static $x = 0; - инициализирует переменную, так как $a1 и $a2 относятся к разным классам,
то будет 2 счетчика. foo() вызывается по 2 раза для каждого класса, поэтому 22.

7 задание

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

Ответ: 1122. Аналогично предыдущему. Так как параметры не передаются, то скобки можно не писать.


*/