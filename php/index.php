<?php

require_once('autoload.php');

$person[] = new Person('name 1', 'surname 1');
$person[] = new Student('name 2', 'surname 2');
$person[] = new Teacher('name 3', 'surname 3');

foreach ($person as $item) {
  if ($item instanceof Person) {
    echo $item->getHello().PHP_EOL;
  }
}