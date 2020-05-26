<?php
$db = new PDO('mysql:host=localhost; dbname=Evaluation; charset=utf8', 'root', '0000');
$req = $db->PREPARE("SELECT * FROM eval WHERE id=:id");
$req->bindParam(':id' , $_POST['id']);
$req->EXECUTE();
$user=$req->FETCH(PDO::FETCH_ASSOC);
