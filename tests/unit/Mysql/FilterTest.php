<?php

namespace RoqueJunior\QueryBuilder\Mysql;

class FilterTest extends \PHPUnit\Framework\TestCase
{

	public function testWhere()
	{
		$filter = new Filter();
		$filter->setWhere('id', '=', 1);
		$actual = $filter->getSql();
		$expected = "WHERE id = 1";
		$this->assertEquals($expected, $actual);
	}

	public function testOrderBy()
	{
		$filter = new Filter();
		$filter->setOrderBy('created', 'DESC');
		$actual = $filter->getSql();
		$expected = "ORDER BY created DESC";
		$this->assertEquals($expected, $actual);
	}

	public function testWhereOrderBy()
	{
		$filter = new Filter();
		$filter->setWhere('id', '=', 1);
		$filter->setOrderBy('created', 'DESC');
		$actual = $filter->getSql();
		$expected = "WHERE id = 1 ORDER BY created DESC";
		$this->assertEquals($expected, $actual);
	}

}