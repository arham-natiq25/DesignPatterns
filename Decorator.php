<?php

interface Subscription {
    public function price();
    public function description();
}
// when we ceate object of this class and call any function we get the answer
class BasicSubscription implements Subscription {
    function price()
    {
        return 10;
    }
    function description()
    {
      return "\n".'Basic Subscription';
    }
}

abstract class SubscriptionFeatures implements Subscription{
    protected $subscription;

    public function __construct(Subscription $subscription) {
        $this->subscription = $subscription;
    }
    abstract function price();
    abstract function description();
}

// now let we need to add more or addition functionalities for that now create a class and extends it with abstract class

class AdditionalFeatures extends SubscriptionFeatures {

    function price()
    {
        return $this->subscription->price() + 5;
    }
    function description()
    {
        return $this->subscription->description()." additional subscription";
    }
}

$subscription = new BasicSubscription;
 echo $subscription->price();

// now for additional feature 

$subscription = new AdditionalFeatures($subscription);

echo $subscription->price();
echo $subscription->description ();
