<!-- 1. Придумать класс, который описывает любую сущность из предметной 
области интернет-магазинов: продукт, ценник, посылка и т.п.
2. Описать свойства класса из п.1 (состояние).
3. Описать поведение класса из п.1 (методы). -->

<?php

class Product {
    
    public $title;
    public $description;
    public $price;
    public $path;

    public function __construct ($title, $description, $price, $path) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->path = $path;
    }

    public function getDiscountPrice ($discount) {
        echo $this->price = $this->price - (($this->price * $discount) / 100);
    }

    public function getTimeOfAction ($periodOn, $periodOff) {
        echo 'Акция действует с '. $this->$periodOn = $periodOn . '';
        echo ' по ' . $this->$periodOff = $periodOff. '';
        
    }

}

$product = new Product ('This is', 'SomeTextForYou', 150, '/img/here.jpeg');

foreach ($product as $property) {
    echo $property;

}

$product->getTimeOfAction(2, 15);
$product->getDiscountPrice(50);

?>

<!-- 4. Придумать наследников класса из п.1. Чем они будут отличаться? -->

<?php

//  Например товар корзины. Отличие будет в уменьшенном размере карточки товара. Может какие-то св-ва можно
//  убавить или добавить, я затрудняюсь ответить. 

class cardItem extends Product {

    public function __construct () {
        parent::__construct;
        
    }
}

// Или класс купленного товара, в котором можно удалить ненужные свойства объекта и показывать пользователю статус посылки.

class purchasedGoods extends Product {
    public function __construct () {
        $this->title = $title;
        $this->status = $status;
        $this->smallPicture = $smallPicture;
    }
}

?>

<!-- 5. Дан код, что он выведет на каждом шаге и почему? -->

<?php

echo '<hr>';

// У одного класса сколько бы не было экземпляров, если переменная в классе задана статично и она инкрементируется, 
// то счёт будет общим для ВСЕХ экземпляров.

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4



// 6. Объясните результаты в этом случае.

echo '<hr>';

// У разных классов свои статичные переменные, которые относятся ко своим экземплярам.
// Поэтому в данном случае счёт идёт статично для КАЖДОГО класса.

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
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2

?>

<!-- 7*.  Что он выведет на каждом шаге? Почему? -->

<?php

// По сути результат вывода как и в 6 задании, но изменился синтаксис при создании экземпляров класса (нет скобок)
// Даже если не передаются аргументы в скобках, то правилом хорошего тона считается всё равно их указывать: 
// $a1 = new A(); 

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

?>
