<?php
$dbh = new PDO('mysql:dbname=test;host=127.0.0.1;charset=UTF8', 'root', 'root');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

// prepare table for test
$dbh->query('DROP TABLE IF EXISTS importantdata');
$dbh->query('create table test.importantdata (a int) engine=innodb');

$dbh->beginTransaction();
$dbh->query('insert into importantdata (a) VALUES (1), (2)');

sleep(20); // shut down mysql-server

var_dump($dbh->commit());

?>

