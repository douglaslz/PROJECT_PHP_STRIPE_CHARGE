<?php

require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
require_once('models/Transaction.php');

//Personal key from stripe
\Stripe\Stripe::setApiKey('your key');

//Sanitize Post array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

//Recive data from Post method 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$token = $_POST['stripeToken'];

//See the token
//echo $token;

//Crear Customer
$customer = \Stripe\Customer::create(array(
	"email" => $email,
	"source"=> $token
));

//Charge Customer
$charge = \Stripe\Charge::create(array(
"amount" => 5000,
"currency" => "cad",
"description" => "Intro to React Course",
"customer" => $customer->id
));

//Customer data
$customerData = [
	'id'=>$charge->customer,
	'first_name' =>$first_name,
	'last_name' =>$last_name,
	'email' =>$email
];

//Instatiate Customer
$customer = new Customer();

//Add Customer
$customer->addCustomer($customerData);


//Transaction data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status
];

//Instatiate Transaction
$transaction = new Transaction();

//Add Transaction
$transaction->addTransaction($transactionData);

//show return data from stripe
//print_r($charge);

//Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description.'&status='.$charge->status);


?>
