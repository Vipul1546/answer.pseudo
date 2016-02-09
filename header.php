<?php 
	function name_rand ($name){
		$rand=rand(6,15);
		$out = $name . $rand;
		return $out;
	}
echo name_rand("vipul");
?>