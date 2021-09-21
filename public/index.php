<?php
declare(strict_types=1);

try {
    $pdo = new PDO('pgsql:host=db;dbname=hillel', 'root', 'secret');
    $sql = 'CREATE TABLE IF NOT EXISTS projects (
        project_id   INTEGER PRIMARY KEY,
        project_name TEXT NOT NULL
      )';
    $pdo->exec($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
}
