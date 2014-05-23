<?php

	function encryptDecrypt($input){
		$key = "KCQ" //Can be any chars, and any length array
		$output = "";
		
		for($i=0;$i<strlen($input);$i++){
			$output .= $input{$i} ^ $key{$i % strlen($key)};
		}

		return $output;
	}
	
	$encrypted =  encryptDecrypt("kylewbanks.com");
	echo "Encrypted:" . $encrypted . "\n";
	
	$decrypted =  encryptDecrypt($encrypted);
	echo "Decrypted:" . $decrypted . "\n";
	
?>
