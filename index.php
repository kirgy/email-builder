<?php 

	/**
	*
	*	@sBlockName String, name of the file stored in the blocks folder, minus the PHP extension
	*	@return void
	*/
	function addBlock($sBlockName){
		echo "\r\n<!-- BLOCKSTART $sBlockName -->\r\n";
		include('blocks/' . $sBlockName . '.php');
		echo "\r\n<!-- BLOCKEND  $sBlockName -->\r\n";
	}

	include('header.php');
	include('body.php');
?>