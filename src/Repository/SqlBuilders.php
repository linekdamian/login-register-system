<?php

namespace App\Repository;

trait SqlBuilders
{
    public function getInsert(array $properties = []): string
    {
        $beginning = "INSERT INTO $this->table (";
        $end = " VALUES (";
        $counter = 0;

        foreach ($properties as $value) {
            $beginning .= $counter === 0 ? $value : ', ' . $value;
            $end .= $counter === 0 ? ':' . $value : ', :' . $value;
            $counter++;
        }

        $beginning .= ')';
        $end .= ')';
        return $beginning . $end;
    }
}
