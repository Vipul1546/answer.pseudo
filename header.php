<?php 
	function name_rand ($name){ // function start
		$rand=rand(6,15); // Generate random number between 6 and 15
		return $name . $rand;  // return output with name followed by random number
	} // function stop

echo name_rand("vipul"); // calling function for output
?>