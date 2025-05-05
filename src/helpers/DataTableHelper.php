<?php

class DataTableHelper
{
    public static function pluck(array $array, string $prop): array
    {
        $out = [];
        foreach ($array as $item) {
            $out[] = $item[$prop] ?? null;
        }
        return $out;
    }

    // Build SQL search clause
    public static function buildSearch(array $columns, string $searchTerm): string
    {
        if (empty($searchTerm)) return '';

        $likeClauses = array_map(function ($col) use ($searchTerm) {
            return "$col LIKE '%" . addslashes($searchTerm) . "%'";
        }, $columns);

        return ' AND (' . implode(' OR ', $likeClauses) . ')';
    }

    // Build SQL ORDER + LIMIT clause
    public static function buildOrderLimit(array $columns, array $order, int $start, int $length): string
    {
        $colIndex = $order[0]['column'] ?? 0;
        $dir = strtolower($order[0]['dir'] ?? 'asc');
        $dir = $dir === 'desc' ? 'DESC' : 'ASC';

        $orderCol = $columns[$colIndex] ?? 'id';

        return " ORDER BY $orderCol $dir LIMIT $start, $length";
    }
}
