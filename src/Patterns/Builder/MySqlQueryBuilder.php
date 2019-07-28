<?php

declare(strict_types=1);

namespace Mr\Patterns\Builder;

use Exception as Exception;
use stdClass as StdClass;

class MySqlQueryBuilder implements IMySqlQueryBuilder
{

    protected $query;

    /**
     * @param string $table
     * @param array $fields
     *
     * @return ISQLQueryBuilder
     */
    public function select(string $table, array $fields): ISQLQueryBuilder
    {
        $this->reset();
        $this->query->base = "SELECT " . implode(', ', $fields) . ' FROM ' . $table;
        $this->query->type = 'select';
        return $this;
    }


    public function where(string $field, string $value, string $operator = '='): ISQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update'])) {
            throw new Exception("WHERE can only be added to SELECT OR UPDATE");
        }
        $this->query->where[] = "$field $operator '$value'";
        return $this;
    }

    protected function reset(): void
    {
        $this->query = new StdClass();
    }

    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        $sql .= ";";
        return $sql;
    }
}