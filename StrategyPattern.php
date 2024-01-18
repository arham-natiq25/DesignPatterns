<?php

interface PaymentStrategy
{
    public function pay($amount);
}

class PaymentUsingPayPal implements PaymentStrategy
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function pay($amount)
    {
        echo "Paid $amount using paypal {$this->email}\n";
    }
}
class PaymentUsingAuthorize implements PaymentStrategy
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function pay($amount)
    {
        echo "Paid $amount using paypal {$this->email}\n";
    }
}
class ShoppingCart
{
    private $paymentStrategy;

    // this set inteface what i am using
    public function setPaymentStrategy(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout($amount)
    {
        $this->paymentStrategy->pay($amount);
    }
}

$paymentUsingPayPal = new PaymentUsingPayPal('paypal@gmail.com');
$paymentUsingAuthorize = new PaymentUsingAuthorize('authorize@gmail.com');
$test = 2; 
$checkout = new ShoppingCart();
if ($test!=1) {
    $checkout->setPaymentStrategy($paymentUsingAuthorize);
    $checkout->checkout(50);
}else{
    $checkout->setPaymentStrategy($paymentUsingPayPal);
    $checkout->checkout(50);
}