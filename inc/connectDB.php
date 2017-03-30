<?php
	$dsn = "mysql:host=localhost;dbname=mgb";
    try{
        $db = new PDO($dsn, "root", "mh02au368");                
        // $db = new PDO($dsn, "root", "");                
    }
    catch(Exception $e){
     die($e->getMessage());
    }
?>
