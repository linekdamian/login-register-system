<?php

namespace Validator;

use Database\Database;

trait Queries
{
    protected $db;

    public function setDb(Database $db)
    {
        $this->db = $db;
    }

    public function findOne(string $from, string $property, string $value)
    {
        $this->setDb(new Database);
        $pdo = $this->db->connect();
        $query = "SELECT * FROM $from where $property = :value";
        $stmt = $pdo->prepare($query);
        if ($stmt->execute(['value' => $value])) {
            return $stmt->fetch();
        } else {
            // TODO LOGS
            var_dump($stmt->errorInfo());
        }
    }
}
