<?php

declare(strict_types=1);

$pdo = null;

try{
	$pdo = new PDO('mysql:host=localhost;dbname=loja', 'root', 'your_password');
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

return $pdo;
//var_dump($pdo);
