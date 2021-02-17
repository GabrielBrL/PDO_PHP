<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreate;

require_once './vendor/autoload.php';

$connection = ConnectionCreate::createConnection();

$student = new Student(
    null,
    'Fabricio',
    new DateTimeImmutable('1991-02-23')
);

$anotherStudent = new Student(
    null,
    'Gabriel',
    new DateTimeImmutable('2003-04-14')
);

$sqlInsert = "INSERT INTO student (name, birth_date) VALUES (:name, :birth_date);";

$statement = $connection->prepare($sqlInsert);

$statement->bindParam(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo 'Aluno incluído';
}

$inserStudent->save($student);
