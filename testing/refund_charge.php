<?php

require_once 'setup.php';
require_once 'result_prosessor.php';

$result = Braintree_Transaction::refund('p183md58',[
	'amount'=> 2
]);


	
processResult($result);

?>
