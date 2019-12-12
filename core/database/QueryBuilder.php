<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById($table, $id = 0)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE ID= :id");

        $statement->execute([':id' => $id]);

        $result = $statement->fetchAll(PDO::FETCH_CLASS);
        return empty($result) ? [] : reset($result);
         
    }
    public function deleteById($table, $id = 0)
    {
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE ID= :id");

        return $statement->execute([':id' => $id]);
            
    }
    
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
        $statement = $this->pdo->prepare($sql);

        $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}