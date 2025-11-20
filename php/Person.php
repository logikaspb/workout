<?php

class Person
{
  protected $name;
  protected $surname;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
  }
  public function getHello()
  {
    return "Hello, Person $this->name $this->surname!";
  }


  
}




 /*  class Car 
  {
    public string $brand;
    public int $speed;
    public string $color;
    
    //Конструктор
    public function __construct(string $brand, int $speed, string $color)
    {
        $this->brand = $brand;
        $this->speed = $speed;;
        $this->color = $color;
    }
    
    //Метод 1: Ехать
    public function drive() {
      echo "Машина {$this->brand} едет со скоростью {$this->speed} км/ч.<br>";
    }

    //Метод 2: Ускориться
    public function accelerate(int $value) {
      $this->speed += $value;
      echo "Машина ускорилась. Текущая скорость: {$this->speed} км/ч.<br>";
    }

    //Метод 3: Перекрасить машину
    public function colorСhange (string $newColor) {
      echo "Была машина покрашна в {$this->color}. Перекрасили в {$newColor} цвет.<br>";
      $this->color = $newColor;
    }
  }



  $myCar = new Car('Ауди', 150, 'Черный');
  $myCar->drive();
  $myCar->accelerate(10);
  $myCar->colorСhange('Красный'); */


?>
