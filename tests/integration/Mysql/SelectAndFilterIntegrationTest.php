<?php

namespace RoqueJunior\QueryBuilder\Mysql;

class SelectAndFilterIntegrationTest extends \PHPUnit\Framework\TestCase
{
	public function testSelectWithFilterWhereAndOrder()
	{
		$select = new Select();
		$select->setTable('pages');

		$filter = new Filter();
		$filter->setWhere('id', '=', 1);
		$filter->setOrderBy('created', 'DESC');
		$select->setFilter($filter);

		$actual = $select->getSql();
		$expected = "SELECT * FROM pages WHERE id = 1 ORDER BY created DESC";
		$this->assertEquals($expected, $actual);

	}
}
