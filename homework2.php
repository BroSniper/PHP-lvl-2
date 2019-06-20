<?php 

/*1. Создать структуру классов ведения товарной номенклатуры.

а) Есть абстрактный товар.

б) Есть цифровой товар, штучный физический товар и товар на вес.

в) У каждого есть метод подсчета финальной стоимости.

г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.

д) Что можно вынести в абстрактный класс, наследование?

2. *Реализовать паттерн Singleton при помощи traits.*/

abstract class Currency {
	abstract public function getTotalCost();
}

class Digital extends Currency {
	const PRICE = 100;
	private $count;

	public function __construct($count){
		$this->setCount($count);
	}

	public function getCount() {
		return $this->count;
	}

	public function getPrice() {
		return self::PRICE;
	}

	public function setCount($count){
		$this->count = $count;
	}

	public function getTotalCost(){
		return $this->getCount() * $this->getPrice();
	}
}

class SinglePiece extends Digital {
	public function getPrice() {
		return parent::PRICE * 2;
	}

	public function getTotalCost(){
		return parent::getCount() * $this->getPrice();
	}
}

class Gravimetric extends Currency {
	private $price;
	private $weight;

	public function __construct($price, $weight){
		$this->setPrice($price);
		$this->setWeight($weight);
	}

	public function getWeight() {
		return $this->weight;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getTotalCost(){
		return $this->getPrice() * $this->getWeight();
	}
}

$digital = new Digital(5);
echo "Общая стоимость цифрового товара: " . $digital->getTotalCost() . "<br>";

$singlePiece = new SinglePiece(5);
echo "Общая стоимость штучного товара: " . $singlePiece->getTotalCost() . "<br>";

$gravimetric = new Gravimetric(500,5);
echo "Общая стоимость товара на вес за " . $gravimetric->getWeight() . " кг " . " составляет " . $gravimetric->getTotalCost();