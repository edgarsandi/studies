<?php

$db = new PDO('mysql:host=10.20.26.29;dbname=dev_provaonline','developers','gAt01at390');

$sql = '
SELECT question_id, answer_id 
FROM answers 
ORDER BY question_id, RAND();
';

$res = $db->query($sql, PDO::FETCH_OBJ);

foreach($res as $k => $v) {
	$questions[] = array($v->question_id => $v->answer_id);
}

print_r($questions);

//var_dump($res);