<?php

namespace RoqueJunior\QueryBuilder\Mysql;

class Filter
{

	private $sql;
	private $fields;
	public function setWhere(String $fileds, string $condition, string $value)
	{
		$where = sprintf("WHERE %s %s %s", $fileds, $condition, $value);
		$this->sql[] = $where;

	}

	public function setOrderBy(string $field, string $order)
	{
		$this->sql[] = sprintf("ORDER BY %s %s", $field, $order);
	}

	public function getSql(): String
	{
		return implode(' ', $this->sql);
	}


}