<?php
namespace Elements\Abstracts;

abstract class Tag{

	/** @var string */
	private $content;

	/** @var string */
	private $tag_name;

	/** @var string */
	private $style;

	public function __construct($content){

		$this->content  = $sContent;
		$this->tag_name = get_called_class();

		return $this;

	}

	public function style($style){

		$this->style = $style;

	}

	private function getProperties(){

		$return = '';

		foreach(get_object_vars($this) as $property => $value){

			if(
				$property === 'content' ||
				$value === '' ||
				$value === null
			)
				continue;

			$return .= ' '.$property.'="'.$value.'"';

		}

		return $return;

	}

	public function getHTML(){

		return '<'.$this->tag_name.$this->getProperties().'>'.$this->content.'<'.$this->tag_name.'/>';

	}


}