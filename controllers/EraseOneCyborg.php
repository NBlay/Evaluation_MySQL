<?php

$db = new PDO('mysql:host=localhost; dbname=Evaluation; charset=utf8', 'root', '0000');
$req = $db->PREPARE("DELETE FROM eval WHERE ID=:ID");
$req->bindParam(':ID' , $_POST['ID']);
$req->EXECUTE();

header('Location: /');
