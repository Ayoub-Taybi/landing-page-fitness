<?php
    $dsn='mysql:host=localhost;dbname=db_fitness'; //Data Source Name
    $user='root'; // The User To Connect
    $pass=''; // Password Of This User
    $option= array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    try{
         $con= new PDO($dsn,$user,$pass,$option); // Start A new  Connection with PDO Class
         $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
           echo 'Failed To Connect'. $e->getMessage();
    }
?>


