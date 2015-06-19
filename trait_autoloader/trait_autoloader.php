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

/*
curl -X POST --data "version=1.0" http://10.30.12.115:8989/trait_autoloader.php
curl -X POST --data "version=1.1" http://10.30.12.115:8989/trait_autoloader.php
curl -X POST --data "version=1.2" http://10.30.12.115:8989/trait_autoloader.php
curl -X POST --data "version=2.0" http://10.30.12.115:8989/trait_autoloader.php
