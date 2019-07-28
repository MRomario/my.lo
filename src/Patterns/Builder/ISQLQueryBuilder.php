<?php


namespace Mr\Patterns\Builder;


interface ISQLQueryBuilder
{
    /**
     * @param string $tabla
     * @param array $fields
     *
     * @return ISQLQueryBuilder
     */
    public function select(string $tabla, array $fields): ISQLQueryBuilder;

    /**
     * @param string $field
     * @param string $value
     * @param string $operator
     *
     * @return ISQLQueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): ISQLQueryBuilder;

    public function getSql(): string;

}