<?php

require_once 'setup.php';
require_once 'result_prosessor.php';

$result = Braintree_Transaction::sale([
  'amount' => '10.00',
  'creditCard' => [
  	'cardholderName' => 'VP',
	'cvv' => 123,
	'number' => 4242424242424242,
	'expirationMonth' => 3,
	'expirationYear' => 2021
  ]
]);

processResult($result);

?>
