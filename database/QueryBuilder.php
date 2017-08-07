<?php

class QueryBuilder
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($sql, $model = null)
    {
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $model);
    }
}
