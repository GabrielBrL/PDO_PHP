<?php

$dataBasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dataBasePath);

echo 'Conectado';

$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('11', '948279566', 1), ('11', '985782655', 1);");
exit();

$createTableSql = '
    CREATE TABLE IF NOT EXISTS student(
        id INTEGER PRIMARY KEY,
        name TEXT,
        birth_date TEXT
    );

    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY(student_id) REFERENCES student(id)
    );
';

$pdo->exec($createTableSql);
