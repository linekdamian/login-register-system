<?php

namespace App\Repository;

use App\Models\Model;

interface IRepository
{
    public function find($id): ?Model;
    public function save(Model $model): ?Model;
    public function destroy(Model $model): bool;
}
