<?php

$db = new PDO('mysql:host=localhost; dbname=Evaluation; charset=utf8', 'root', '0000');


$req = $db->PREPARE('SELECT * FROM eval');
$req->EXECUTE();
$eval = $req->fetchAll(PDO::FETCH_ASSOC);
