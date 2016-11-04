<?php
// Starts new or existing session
session_start();
// A function to connect to database connect() 
  function connect() {
    // How to Logon to Database
    $db_host = 'localhost';
    $db_name = 'fp1-data';
    $db_user = 'root';
    $db_password = '';
    // Test to see if the login works
    try {
      $db = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_password);
      return $db;
      echo Whats good!
    } catch (PDOExceptions $e) {
      echo "Error: ". $e->getMessage();
      die();
    }
    
    
  }
?>
