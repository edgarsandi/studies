--TEST--
parse_ini_file: warning on string containing "on"
--FILE--
<?php

$file = dirname(__FILE__) .'/bug68347.ini';

$content = <<<EOD
title0 = 'a on'
title1 = 'aon'
title2 = on
title4 = true
title5 = 1
title6 = 'true'
EOD;

file_put_contents($file, $content);

var_dump(parse_ini_file($file));

unlink($file);
?>
--EXPECT--
array(6) {
  ["title0"]=>
  string(4) "a on"
  ["title1"]=>
  string(3) "aon"
  ["title2"]=>
  string(1) "1"
  ["title4"]=>
  string(1) "1"
  ["title5"]=>
  string(1) "1"
  ["title6"]=>
  string(4) "true"
}
