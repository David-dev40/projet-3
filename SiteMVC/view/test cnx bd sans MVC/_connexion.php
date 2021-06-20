<?php

$servname = 'localhost';
$db = 'pdodb';
$userdb = 'test';
$passdb = '';

   try{
      $dbco = new PDO("mysql:host=$servname;dbname=$db;charset=utf8", $userdb, $passdb,array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>