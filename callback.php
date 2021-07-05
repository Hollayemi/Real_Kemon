<?php
mysql_connect();
session_start();



$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_3de212b838be6af8dd3740325e5a643e6a7112a0",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
	if ('email' == $email ) {
    $subscription  = $_SESSION['sub'];
    $date = date();
    $monthsub;
    if($subscription > $date){
      $subscription += $monthsub;
    }
    else{
      $subscription = $date + $monthsub;
    }
    $sql = "SELECT userid,username FROM users WHERE ids='' AND username='$'"



    "<script>window.location(index.php)</script>"

	}

  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  echo "<h2>Thank you for making a purchase. Your file has bee sent your email.</h2>";
}

?>