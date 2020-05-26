<?php
$db = new PDO('mysql:host=localhost; dbname=Evaluation; charset=utf8', 'root', '0000');
$req = $db->PREPARE("UPDATE Eval SET name=:name, appearances=:appearances, creator=:creator, description=:description WHERE id=:id");
$req->bindParam(':name' , $_POST['name']);
$req->bindParam(':appearances' , $_POST['appearances']);
$req->bindParam(':creator' , $_POST['creator']);
$req->bindParam(':description' , $_POST['description']);
$req->bindParam(':id' , $_POST['name']);
$req->EXECUTE();

header ('Location: ./updateCyborg.php');
