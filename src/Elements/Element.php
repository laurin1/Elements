<?php
namespace Elements;

use Elements\Abstracts\Tag;
use Elements\Tags\Title;

class Element{

	/** @var string */
	private $sHTML;

	/**
	 * @param Tag $oTag
	 */
	public function __construct(Tag $oTag){

		$this->sHTML = $oTag->getHTML();

	}

	/**
	 * @return string
	 */
	public function getHTML(){

		return $this->sHTML;

	}

}