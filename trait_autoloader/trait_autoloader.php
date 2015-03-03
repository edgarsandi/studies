<?php
namespace Autoloader;
$_SESSION['version'] = $_POST['version'];

spl_autoload_register(function ($name) {
    $fileName = stream_resolve_include_path('Versao' . $_SESSION['version'] . '/' . $name . '.php');
    if ($fileName !== false) {
        include $fileName;
    }
});
?>

<?php
namespace Padrao;
	class User { 
		use \A;
	}
?>

<?php 
	$obj = new \Padrao\User();
	echo $obj->version . PHP_EOL;
?>