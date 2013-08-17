<?php
namespace Elements;

use Elements\Elements\Element;

class Elements{

	/** @var string */
	private $sHTML;

	/**
	 * @param \Elements\Elements\Element $oElement
	 */
	public function __construct(Element $oElement){

		$this->sHTML = $oElement->getHTML();

	}

	/**
	 * @return string
	 */
	private function getHTML(){

		$sElement = strtolower(get_called_class());

		return "<".$sElement.">".$this->getContent()."</".$sElement.">";

	}

	private function getContent(){
	}

}