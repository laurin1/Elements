<?php
class ElementsTest extends PHPUnit_Framework_TestCase{

	public function test_BasicHTML(){

		$oHTML = new \Elements\Elements(new \Elements\Tags\HTML());

		$this->assertEquals(
			"<html></html>",
			$oHTML->getHTML());

	}

}
