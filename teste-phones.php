<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreate;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once './vendor/autoload.php';

$connection = ConnectionCreate::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \Alura\Pdo\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();

var_dump($studentList);
