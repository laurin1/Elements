<?php
namespace Elements;

class Elements{

	/** @var string */
	private $sHTML;

	public function __construct(Elements $oElement){

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