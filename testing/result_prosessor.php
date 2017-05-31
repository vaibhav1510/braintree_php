<?php
function processResult($result)
{
	if ($result->success) {
	    print_r("success!: " . $result->transaction->id);
		print_r($result->transaction);
	} else if ($result->transaction) {
	    print_r("Error processing transaction:");
	    print_r("\n  code: " . $result->transaction->processorResponseCode);
	    print_r("\n  text: " . $result->transaction->processorResponseText);
	} else {
	    print_r("Validation errors: \n");
	    print_r($result->errors->deepAll());
	}   
}

?>