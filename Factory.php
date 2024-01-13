<?php

class User {
    private $id;
    private $name;
    private $email;

    public function __construct($id,$name,$email) {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
    }
    public function getUser() {
        return "name is ". $this->name." and email is ".$this->email;
    }
}
class UserFactory{
    public static function createUser($id,$name,$email) {
        return new User($id,$name,$email);
    }
}

$obj1 = UserFactory::createUser(1,'arham','arham@example.com');

print_r($obj1->getUser());
