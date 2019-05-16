<?php

$conn = new PDO("mysql:host=localhost;dbname=db_ecommerce", "root", "123");

$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, despassword) VALUES(:LOGIN, :PASSWORD)");

$login = "José";
$password = "123432431";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

?>