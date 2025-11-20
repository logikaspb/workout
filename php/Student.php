<?php

class Student extends Person
{
  public function getHello()
  {
    return "Hello, student $this->name $this->surname!";
  }
 
}