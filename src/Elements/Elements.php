<?php
namespace Elements;

use Elements\Abstracts\Tag;

class Elements{

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