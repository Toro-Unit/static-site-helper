<?php

define( "DOC_PATH",$_SERVER["DOCUMENT_ROOT"]."/".SITE_DIR );

if( !empty($_SERVER["HTTPS"]) ) {
	define( "SITE_PATH","https://".$_SERVER["HTTP_HOST"]."/".SITE_DIR );
}
else {
	define( "SITE_PATH","http://".$_SERVER["HTTP_HOST"]."/".SITE_DIR );
}

define( "TEMPLATE_PATH", DOC_PATH."/".TEMPLATE_DIR );

?>