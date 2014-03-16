<?php
class SimpleTest extends PHPUnit_Framework_TestCase
{
	public function testForTruth() {
		SimpleTruth truthSayer = new SimpleTruth();
		$this->assertEquals(true, truthSayer->sayItsTrue());
	}
}