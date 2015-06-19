<?php

	$var1 = 0;
	$var2 = 'a';
	$var3 = new stdClass();
	$var4 = new ArrayObject(array());

	foreach (get_defined_vars() as $var) {
		if (is_object($var)) {
			echo 'encontrei uma classe do tipo ', get_class($var) . PHP_EOL . PHP_EOL;
			var_dump($var);
		}
	}


	// var_dump(get_defined_vars());

