<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreate;

require_once './vendor/autoload.php';

$connection = ConnectionCreate::createConnection();

$prepareStatement = $connection->prepare('DELETE FROM student WHERE id = ?;');
$prepareStatement->bindValue(1, 1, PDO::PARAM_INT);
var_dump($prepareStatement->execute());
