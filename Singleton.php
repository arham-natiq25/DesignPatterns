<?php

class Singleton {
    private static $instance = null;
    private  function __construct() {
        echo "Called first time";
    }
    public static function showInstance() {
        if (self::$instance==null) {
             self::$instance= new static();
        } else {
            echo "Already connected";
        }
        
    }
}
// constructor called for first time only after that direct function is called and instance will can be create
$var1 = Singleton::showInstance();
$var2 = Singleton::showInstance();