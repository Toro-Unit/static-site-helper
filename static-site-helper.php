<?php
/**
 *
 * HELPER !!!
 *
 *
 */
require dirname(__FILE__)."./config.php";
require dirname(__FILE__)."./define.php";


Class Load_Templates {

	public function __call( $name , $arg ) {
		include TEMPLATE_PATH."/".$name."tpl.php";
	}

	public function header( $title ) {
		include TEMPLATE_PATH."/header.tpl.php";
	}

	public function footer() {
		include TEMPLATE_PATH."/footer.tpl.php";
	}

	public function sidebar() {
		include TEMPLATE_PATH."/sidebar.tpl.php";
	}

	public function navigation() {
		include TEMPLATE_PATH."/navigation.tpl.php";
	}

}

class Static_Site_Helper extends Load_Templates {

	public function is_current( $uri = "" ) {
		$uri = SITE_DIR."/".trim( $uri, "/" );
		$request_uri = $_SERVER['REQUEST_URI'];

		if( $uri && strpos($request_uri."/", "/".$uri."/", 0) !== FALSE ) {
			return true;
		}
		$request_uri = trim(str_replace( "/index.php", "", $request_uri ), '/');
		if( !SITE_DIR."/".$uri && !$request_uri ) {
			return true;
		}
		return false;
	}

	public function current( $uri = "" ) {
		if($this->is_current( $uri )) {
			echo 'current';
		};
	}

}

$h = new Static_Site_Helper();
?>