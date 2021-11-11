<?php

// 1 Задание

abstract class Product
{
    protected static $cost = 50;
    abstract public function FinalPrice();
}
class DigitalProduct extends Product
{
    public function FinalPrice()
    {
        return self::$cost/2;
    }
}
class PieceProduct extends Product
{
    public function FinalPrice()
    {
        return self::$cost;
    }
}
class WeightProduct extends Product
{
    public function __construct($weight)
    {
      $this->weight = $weight;
    }
    public function FinalPrice()
    {
    return $this->weight*self::$cost;
    }
}

$weight = 5;
$prod1 = new DigitalProduct();
$prod2 = new PieceProduct();
$prod3 = new WeightProduct($weight);
echo 'Цифровой товар: '.$prod1->FinalPrice().PHP_EOL;
echo 'Штучный товар: '.$prod2->FinalPrice().PHP_EOL;
echo "Весовой товар массой $weight кг: ".$prod3->FinalPrice().PHP_EOL;


// 2 Задание

trait Singleton {
    protected static $instance = null;
    static function getInstance() {

        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

class TestSingleton {
    use Singleton;

    private static $some_test = array();

    public function setTest($test) {
        self::$some_test = $test;
        return implode(self::$some_test);
    }
}

$test = array(1,2,3,4,5);

$a = TestSingleton::getInstance();
echo $a->setTest($test).PHP_EOL;