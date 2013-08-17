<?php
namespace Elements\Abstracts;

abstract class Tag{

	/**
	 * @return string
	 */
	public function getHTML(){

		$sTag = strtolower(str_ireplace("elements\\tags\\", "", get_called_class()));

		return "<".$sTag.">".$this->getContent()."</".$sTag.">";

	}

	public function getContent(){
	}

}