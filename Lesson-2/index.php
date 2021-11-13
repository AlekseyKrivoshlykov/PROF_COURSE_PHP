<!-- 1. Создать структуру классов ведения товарной номенклатуры.
а) Есть абстрактный товар.
б) Есть цифровой товар, штучный физический товар и товар на вес.
в) У каждого есть метод подсчета финальной стоимости.
г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. 
У штучного товара обычная стоимость, у весового – в зависимости от продаваемого 
количества в килограммах. У всех формируется в конечном итоге доход с продаж.
д) Что можно вынести в абстрактный класс, наследование? -->

<?php

// Если использовать интерфэйс вместо абстрактного класса, то перед Goods нужно вставить слово interface,
// а после классов вставить ключ-слово implements. Остальное останется прежним.

abstract class Goods {
    abstract public function getPrice($price, $count);
}

// В данном случае, нужно передавать в метод цену физического товара (штучного товара)

class digitalProduct extends Goods {
    public $price;

    public function getPrice($price, $count) {
       return $this->$price = ($price / 2) * $count;
    }
}

class physicalProduct extends Goods {
    public $price;

    public function getPrice($price, $count) {
        return $this->$price = $price * $count;
    }
}

// $count в данном случае будет являться граммовкой товара

class weightProduct extends Goods {
    public $price;

    public function getPrice($price, $count) {
        return $this->$price = ($count / 1000) * $price;
    }
}

$obj = new weightProduct();
$obj->getPrice(150, 350);
var_dump($obj);

?>

<!-- 2. *Реализовать паттерн Singleton при помощи traits. -->

<?php 

trait Singleton {
    static protected $self;

    public static function getInstance () {
        if (self::$self === null) {
            self::$self = new self();
        }
        return self::$self;
    }
}

class Example {
    use Singleton;
}

?>
