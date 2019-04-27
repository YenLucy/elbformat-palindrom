<?php	
  	function palindromCheck($testString) {
  		$testString=strtolower($testString);
  		if($testString==NULL) return "Error";
	  	if(strrev($testString)!=$testString) return 0;
	  	if (strrev($testString) === $testString) return 1;
  	}
?>