--TEST--
Bug on switch in case 0
--FILE--
<?php
    $_GET['num'] = 0;
    $number = $_GET['num'];
    // $number = intval($_GET['num']);
    // $number = (int) $_GET['num'];

    switch ($number) {
        case ($number<2):
            $result = 'lower than 2';
            break;
        case ($number<5):
            $result = 'lower than 5';
            break;
        case ($number>=5):
            $result = 'higer than 5';
            break; // Se mete aqui con nota = 10
    }
    echo "The number " . $number . " is " . $result . ".";
?>
--EXPECT--
The number 0 is lower than 2.