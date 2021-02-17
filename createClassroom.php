<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreate;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreate::createConnection();

$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
try {
    $aStudent = new Student(
        null,
        'Gabriel Barros',
        new DateTimeImmutable('2002-02-23')
    );


    $anotherStudent = new Student(
        null,
        'Fabricia Lenez',
        new DateTimeImmutable('1993-11-03')
    );

    //$studentRepository->save($aStudent);
    $studentRepository->save($anotherStudent);

    $connection->commit();
} catch (\PDOException $erro) {
    echo $erro->getMessage();
    $connection->rollBack();
}
