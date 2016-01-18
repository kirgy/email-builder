<?php 
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;
require('vendor/autoload.php');

class emailBuilder {

	public function __construct($aSettings) {
		$this->aSettings = $aSettings;
	}

	/**
	*
	*	@sBlockName String, name of the file stored in the blocks folder, minus the PHP extension
	*	@return void
	*/
	public function addBlock($sBlockName){
		echo "\r\n<!-- BLOCKSTART $sBlockName -->\r\n";
		include('blocks/' . $sBlockName . '.php');
		echo "\r\n<!-- BLOCKEND  $sBlockName -->\r\n";
	}

	/**
	*	Turns a unformatted email into a email with specified inline CSS
	*
	*	@param String $sRawHTML, string containing the raw HTML of the email
	*	@param String $sCSS, string containing the CSS you wish to make inline
	*
	*	@return String
	*/
	public function genInlineCode($sRawHTML, $sCSS) {
		/* 
		*	The class below seems to strip out &nbsp; and other escaped chars. This is a temp 
		* 	fix and won't escape all chars.
		*/
		$sRawHTML = preg_replace("/&#?[a-z0-9]+;/i",'{{nbsp}}',$sRawHTML);
		$sInlineCode = $sRawHTML;
		
		$cssToInlineStyles= new CssToInlineStyles();
		$cssToInlineStyles->setHTML($sRawHTML);
		$cssToInlineStyles->setCSS($sCSS);
		$sInlineCode = $cssToInlineStyles->convert();
		// restore escaped &nbsp;
		$sInlineCode = str_replace('{{nbsp}}', '&nbsp;',$sInlineCode);
		$sInlineCode = str_replace('{{padding}}', $this->aSettings['padding'],$sInlineCode);
		
		return $sInlineCode;
	}
}

	$aSettings = array(
		'padding' => '20',
	);

	$eb = new emailBuilder($aSettings);
	ob_start();

	include('header.php');
	include('body.php');

	$sRawHTML = ob_get_clean();
	$sCSS     = file_get_contents('css/main.css');

	$sHTML = $eb->genInlineCode($sRawHTML, $sCSS);

	echo $sHTML;
?>