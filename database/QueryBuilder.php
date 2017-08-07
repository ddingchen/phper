<?php

class QueryBuilder
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $model = null)
    {
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $model);
    }
}
