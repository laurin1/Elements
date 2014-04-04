<?php
namespace Elements;

class Element extends Elements\Abstracts\Tag{

	public static function create($content){

		$element = new Element();

		return $element->getHTML();

	}

}