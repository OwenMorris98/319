<?php

 include "Controller/cntrBook.php";

 $book = new cntrBook();
 
 if(!isset($_REQUEST['flag'])){
	 
      $book->viewMenu();
 }else{
	 
	 $book->actions($_REQUEST['flag']);
 }
 

?> 