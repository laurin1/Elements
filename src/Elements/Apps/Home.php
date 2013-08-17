<?php
namespace Elements\Apps;

use Elements\Interfaces\Application;

class Home implements Application{

	/** Blocks Instantiation */
	private function __construct(){

	}

	public static function Init(){

	}

	public static function BodyUI(){

	}

	/**
	 * @return string
	 */
	public static function MainUI(){

		self::DATA();

	}

	public static function Data(){

	}

	/**
	 * @return string
	 */
	public static function getClassName(){

		return __CLASS__;

	}

	/** Blocks Cloning */
	public function __clone(){

		trigger_error("Clone is not allowed.", E_USER_ERROR);

	}

}