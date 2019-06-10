<?php

namespace RoqueJunior\QueryBuilder\Mysql;

class SelectTest extends \PHPUnit\Framework\TestCase
{

	public function testSelectWithouFilter()
	{
		$select = new Select();
		$select->setTable('pages');
		$actual = $select->getSql();
		$expected = "SELECT * FROM pages";
		$this->assertEquals($expected, $actual);
	}

	public function testSelectWithSpecifyFields()
	{
		$select = new Select();
		$select->setTable('users');
		$select->setFields(['id', 'name']);
		$actual = $select->getSql();
		$expected = "SELECT id, name FROM users";
		$this->assertEquals($expected, $actual);
	}

}