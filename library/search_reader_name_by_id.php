<?php
	require 'system_variable.php';  // initialize global uses constrain,

    if ( !empty( $_GET['id'] ) )  {
      require $GLOBALS["classRoot"].'LibraryDb.php';
      $myLibrary = new LibraryDb();
      $thisKeyword = $_GET['id'];
      if ( $myLibrary->connect() )  {
		$readerList = $myLibrary->getRecords('Readers', 'card_id', $thisKeyword );
        if ( sizeof($readerList) > 0 ){
        }
  	  }
  	}
?>