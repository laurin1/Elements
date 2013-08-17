<?php
namespace Elements\Abstracts;

abstract class Tag{

	/** @var string */
	private $sContent;

	/**
	 * @return string
	 */
	public function getHTML(){

		$sTag = strtolower(str_ireplace("elements\\tags\\", "", get_called_class()));

		return "<".$sTag.">".$this->sContent."</".$sTag.">";

	}

	/**
	 * @param $sContent
	 */
	public function addContent($sContent){

		$this->sContent = $sContent;

	}

}