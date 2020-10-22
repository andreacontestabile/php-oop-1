<?php 

class User {
  public $name;
  public $lastname;
  public $username;
  public $email;
  public $password;

  public function __construct($_username, $_email, $_password) {
    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
  }
}


$andrea = new User("Seven897", "andreacontest@gmail.com", "password12345");
$mario = new User("Teemo123", "mario.rossi@gmail.com", "yasuo12345");
var_dump($andrea);
var_dump($mario);


?>