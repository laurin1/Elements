<?php
namespace Elements\Apps;

class Home implements Elements\Int\Application{

	/** Blocks Instantiation */
	private function __construct(){

	}

	/** Blocks Cloning */
	public function __clone(){

		trigger_error("Clone is not allowed.", E_USER_ERROR);

	}

	public static function Init(){

		echo Element::Title(Applications::getAppNameByID());

		Common::Head(null, "tiagra_menu");

	}

	public static function Data(){


	}

	public static function BodyUI(){

		$oAppBuilder = new AppBuilder();
		$oAppBuilder->addTitle(Applications::getAppNameByID());
		$oAppBuilder->Display();

	}

	/**
	 * @return string
	 */
	public static function MainUI(){

		self::DATA();

	}

	/**
	 * @return string
	 */
	public static function getClassName(){

		return __CLASS__;

	}

}