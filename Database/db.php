<?php

namespace App\Database;

use \PDO;
use \PDOException;

class Database
{
    const HOST = 'localhost';
    const NAME = 'crud';
    const USER = 'root';
    const PASSWORD = 'root';

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NAME, self::USER, self::PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function insert($values)
    {
        $fields = array_keys($values);

        $bind = array_pad([], count($fields), '?');

        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $bind) . ')';

        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null)
    {
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        // $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        // $query = 'SELECT * FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        $query = "SELECT * FROM jobs";

        return $this->execute($query);
    }
}
