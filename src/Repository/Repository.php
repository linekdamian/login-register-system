<?php

namespace App\Repository;

use App\Models\Model;
use Database\Database;

abstract class Repository
{
    use Properties;
    use SqlBuilders;

    protected $db;

    public $table = '';

    public function __construct()
    {
        // $this->model = $model;
        $this->db = new Database;
    }

    public function find($id): ?Model
    {
        // return $this->model;
    }


    public function destroy(Model $model): bool
    {
        // return true;
    }

    public function save(Model $model): ?Model
    {
        $prop = $this->getProperties($model);
        $pdo = $this->db->connect();
        try {
            $pdo->beginTransaction();

            if ($stmt = $pdo->prepare($this->getInsert($prop))) {
                if ($stmt->execute($this->getData($prop, $model))) {
                    $pdo->commit();
                    return $model;
                }
            }
        } catch (\Throwable $th) {
            /**
             * TODO LOGS
             */
            echo $th->getMessage();
        }
        $pdo->rollback();
        return null;
    }
}
