<?php
    require_once('stripe-php/init.php');
    require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Customer.php';
    //require_once('vendor/autoload.php');
   // $stripe = new \Stripe\StripeClient('sk_test_51H7d5qDH2zxmh4YbaLbWuTk2v8sxCiPTUtoqC6tX7bSdNeMWp8o6wcwfmw3mhD8HuySHSZYpzyb4ilKj6KO7Yufk00lPP8v3MX');
   \Stripe\Stripe::setApiKey('sk_test_51H7d5qDH2zxmh4YbaLbWuTk2v8sxCiPTUtoqC6tX7bSdNeMWp8o6wcwfmw3mhD8HuySHSZYpzyb4ilKj6KO7Yufk00lPP8v3MX');
   
   
    //sanitize post
    $POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $token = $_POST['stripeToken'];
    //echo $token;

    //create customer in  stripe
    $customer = \Stripe\Customer::create(array(
        "email"=>$email,
        "source"=>$token
    ));

    $charge = \Stripe\Charge::create(array(
        "amount"=>5000, 
        "currency"=>"myr", 
        "description"=>"Order Payment", 
        "customer"=>$customer->id
    ));
    
        
        $custid = $charge->customer;
        $amount = $charge->amount;
       
        
        
    
     $customer = new customercontroller();
     $customer->payment($custid, $fullname, $email, $amount);
    //direct to success
    header('location: success.php?tid='.$charge->id);

 ?> 