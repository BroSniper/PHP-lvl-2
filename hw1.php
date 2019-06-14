<?php

class Good {
	public $id;
	public $name;
	public $price;
	public $size;
	public $count;
	public $color;
	public $weight;
	public $country;

	public function __construct($id, $name, $price, $size, $count, $color, $weight, $country) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->size = $size;
		$this->count = $count;
		$this->color = $color;
		$this->weight = $weight;
		$this->country = $country;
	}

	public function addGoodToCart() {

	}

	public function deleteGoodFromCart() {

	}
}

$tv = new Good(1, "Samsung QE85Q900R", 999990, "115.6 * 190.5 * 39.9 cm", 1, "black", "57.7 kg", "Russia");
$mouse = new Good(2, "MSI GM70 Gaming Mouse", 6000, "125 * 66 * 39 mm", 1, "black", "129 g", "Russia");
//Наследники могут отличаться всеми характеристиками от родительского класса, какие-то могут в целом даже отсутствовать

/*Задание 5. Разобрать код
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A(); - объявление экземпляра класса
$a2 = new A(); - объявление экземпляра класса
$a1->foo(); - x = 1, префиксная форма инкремента, сначала увеличивается х, потом выводится
$a2->foo(); - x = 2, так как статический метод принадлежит классу, то значение будет увеличиваться при каждом новом вызове метода
$a1->foo(); - х = 3
$a2->foo(); - х = 4
Что он выведет на каждом шаге? Почему?

Немного изменим п.5:

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A(); - объявление экземпляра класса
$b1 = new B(); - объявление экземпляра класса
$a1->foo(); - x = 1
$b1->foo(); - x = 1
$a1->foo(); - x = 2
$b1->foo(); - x = 2

Так как вызываются экземпляры разных классов, то и увеличение происходит в каждом экземпляре отдельно
*/
