<?php

class QueryBuilder
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $model = null)
    {
        $model = $model ? "App\\Model\\{$model}" : null;
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $model);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        $query = $this->pdo->prepare($sql);
        $query->execute($parameters);
    }
}
