<?php

namespace App\Repository;

use ReflectionClass;
use ReflectionProperty;
use App\Models\Model;

trait Properties
{
    public function getProperties(Model $model): array
    {
        $props = new ReflectionClass($model);
        $data = array_merge(
            $props->getProperties(ReflectionProperty::IS_PROTECTED),
            $props->getProperties(ReflectionProperty::IS_PRIVATE)
        );
        return $this->formatProperties($data);
    }

    protected function formatProperties(array $data): array
    {
        foreach ($data as $key => $value) {
            $formatted[] = $value->name;
        }
        return $formatted;
    }

    public function getData(array $properties, Model $model): array
    {
        foreach ($properties as $prop) {
            $data[$prop] = $model->{'get' . camelCase($prop)}();
        }
        return $data;
    }
}
