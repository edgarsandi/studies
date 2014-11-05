--TEST--
// phpt file: request10657.phpt
Request #10657	Add warning about overflow to settype()
--FILE--
<?php
// overflow integer
$foo = '11111111112';
settype($foo, "integer");
var_dump($foo);

// string -> integer
$bar = 'fjsfjsdh';
settype($bar, "integer");
var_dump($bar);
?>
--EXPECT--
int(11111111112)
int(0)