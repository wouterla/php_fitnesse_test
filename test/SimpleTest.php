<?php
require 'SimpleTruth.php';

class SimpleTest extends PHPUnit_Framework_TestCase
{
	public function testForTruth() 
	{
		$truthSayer = new SimpleTruth();
		$this->assertTrue($truthSayer->sayItsTrue());
	}
}