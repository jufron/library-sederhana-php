<?php

namespace jufron\library;

class Student {

  public function __construct(private string $nama)
  {
    
  }

  public function sayHello (string $nama) : string
  {
    return "hallo, saya: $nama nama lengkap saya: $this->nama".PHP_EOL;
  }
}