<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreate;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once './vendor/autoload.php';

$pdo = ConnectionCreate::createConnection();

$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);


