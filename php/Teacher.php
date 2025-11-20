<?php

class Teacher extends Person
{
  public function getHello()
  {
    return "Hello, teacher $this->name $this->surname!";   
  }
 
}