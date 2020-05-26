<?php
//var_dump($_POST); die;
$name = $_POST['name'];
$appearances = $_POST['appearances'];
$creator = $_POST['creator'];
$description = $_POST['descri'];

$db = new PDO('mysql:host=localhost; dbname=Evaluation; charset=utf8', 'root', '0000');
$req = $db->prepare("INSERT INTO eval (name, appearances, creator, description) VALUES(:name, :appearances, :creator, :descri)");
$req->bindParam(':name' , $name);
$req->bindParam(':appearances' , $appearances);
$req->bindParam(':creator' , $creator);
$req->bindParam(':descri' , $description);
$req->execute();

header ('Location: /');
