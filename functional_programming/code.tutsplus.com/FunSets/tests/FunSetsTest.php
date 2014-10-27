<?php

require 'FunSets.php';

class FunSetsTest extends PHPUnit_Framework_TestCase {
	private $funSets;

	protected function setUp() {
		$this->funSets = new FunSets();
	}

	public function testContainsIsImplemented() {
		$set = function ($element) {return true;};
		$this->assertTrue($this->funSets->contains($set, 100));
	}

	public function testSigletonSetContainsSingleElement() {
		$singleton = $this->funSets->singletonSet(1);
		$this->assertTrue($this->funSets->contains($singleton, 1));
	}

	public function testUnionContainsAllElements() {
		$s1 = $this->funSets->singletonSet(1);
		$s2 = $this->funSets->singletonSet(2);
		$union = $this->funSets->union($s1, $s2);

		$this->assertTrue($this->funSets->contains($union,1));
		$this->assertTrue($this->funSets->contains($union,2));
		$this->assertFalse($this->funSets->contains($union, 3));
	}

	public function testIntersectionContainsOnlyCommonElements() {
		$u12 = $this->createUnionWithElements(1, 2);
		$u23 = $this->createUnionWithElements(2, 3);
		$intersection = $this->funSets->intersect($u12, $u23);

		$this->assertTrue($this->funSets->contains($intersection, 2));
		$this->assertFalse($this->funSets->contains($intersection, 1));
		$this->assertFalse($this->funSets->contains($intersection, 3));
	}

	public function testDiffContainsOnlyUniqueElementsFromTheFirstArray() {
		$u12 = $this->createUnionWithElements(1, 2);
		$u23 = $this->createUnionWithElements(2, 3);
		$difference = $this->funSets->diff($u12, $u23);

		$this->assertTrue($this->funSets->contains($difference, 1));
		$this->assertFalse($this->funSets->contains($difference, 2));
		$this->assertFalse($this->funSets->contains($difference, 3));
	}

	public function testFilterContainOnlyElementsThatMatchConditionFunction() {
		$u123 = $this->createUnionWith123();

		$condition = function($elem) { 
			return $elem > 1;
		};

		$filteredSet = $this->funSets->filter($u123, $condition);

		$this->assertFalse($this->funSets->contains($filteredSet, 1), "Should not contain 1");
		$this->assertTrue($this->funSets->contains($filteredSet, 2), "Should contain 2");
		$this->assertTrue($this->funSets->contains($filteredSet, 3), "Should contain 3");
	}

	public function testForAllCorrectlyTellsIfAllElementsSatisfyCondition() {
		$u123 = $this->createUnionWith123();

		$higherThanZero = function($elem) { return $elem > 0; };
		$higherThanOne  = function($elem) { return $elem > 1; };
		$higherThanTwo  = function($elem) { return $elem > 2; };

		$this->assertTrue($this->funSets->forall($u123, $higherThanZero));
		$this->assertFalse($this->funSets->forall($u123, $higherThanOne));
		$this->assertFalse($this->funSets->forall($u123, $higherThanTwo));
	}

	public function createUnionWithElements($elem1, $elem2) {
		$s1 = $this->funSets->singletonSet($elem1);
		$s2 = $this->funSets->singletonSet($elem2);

		return $this->funSets->union($s1, $s2);
	}

	public function createUnionWith123() {
		$u12 = $this->createUnionWithElements(1, 2);
		return $this->funSets->union($u12, $this->funSets->singletonSet(3));
	}

	public function testExistsCorrectlyTellsIfAnElementSatisfiesCondition() {
		$u123 = $this->createUnionWith123();

		$higherThanZero  = function($elem) { return $elem > 0; };
		$higherThanOne   = function($elem) { return $elem > 1; };
		$higherThanTwo   = function($elem) { return $elem > 2; };
		$higherThanThree = function($elem) { return $elem > 3; };

		$this->assertTrue($this->funSets->exists($u123, $higherThanZero));
		$this->assertTrue($this->funSets->exists($u123, $higherThanOne));
		$this->assertTrue($this->funSets->exists($u123, $higherThanTwo));
		$this->assertFalse($this->funSets->exists($u123, $higherThanThree));
	}

	public function testMapAppliesFunctionToAllElements() {
		$u12 = $this->createUnionWithElements(1, 2);

		$double = function($elem) { return $elem * 2; };
		$mapped = $this->funSets->map($u12, $double);

		$this->assertTrue($this->funSets->contains($mapped, 2));
		$this->assertTrue($this->funSets->contains($mapped, 4));
	}
}