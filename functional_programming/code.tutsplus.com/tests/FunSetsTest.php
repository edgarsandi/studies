<?php

require 'FunSets.php';

class FunSetsTest extends PHPUnit_Framework_TestCase {
	private $funSets;

	protected function setUp() {
		$this->funSets = new FunSets();
	}

	function testContainsIsImplemented() {
		$set = function ($element) {return true;};
		$this->assertTrue($this->funSets->contains($set, 100));
	}
}