<?php

namespace RoqueJunior\QueryBuilder\Mysql;

class Select
{

	private $table;
	private $fields;
	private $filters;
	public function setTable(String $table)
	{
		$this->table = $table;
	}

	public function getSql(): String
	{
		$this->fields = empty($this->fields) ? '*' : implode(', ', $this->fields);
		$this->filters = empty($this->filters) ? '' : ' '.$this->filters;
		return sprintf("SELECT %s FROM %s%s", $this->fields, $this->table, $this->filters);
	}

	public function setFields(array $fields)
	{
		$this->fields = $fields;
	}

	public function setFilter(Filter $filter)
	{
		$this->filters = $filter->getSql();
	}

}