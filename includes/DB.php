<?php

include_once('connection.php');

class DB
{
    static function addAll(?string $tableName, ?array $data): bool
    {
        global $pdo;
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        $stmt = @$pdo->prepare("INSERT INTO $tableName($columns) VALUES ($placeholders)");

        foreach ($data as $column => $value) {
            $stmt->bindValue(':' . $column, $value);
        }
        $stmt->execute();
        return ($stmt->rowCount() > 0);
    }
}
