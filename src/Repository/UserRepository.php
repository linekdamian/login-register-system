<?php

namespace App\Repository;

use App\Models\User;

class UserRepository extends Repository
{
    public $table = 'USERS';

    public function findOneByEmail(string $email): ?User
    {
        $pdo = $this->db->connect();
        $query = "SELECT * FROM $this->table where email = :email";
        $stmt = $pdo->prepare($query);
        if ($stmt->execute(['email' => $email])) {
            if ($data = $stmt->fetch()) {
                return new User($data);
            }
        } else {
            // TODO LOGS
            var_dump($stmt->errorInfo());
        }
        return null;
    }
}
