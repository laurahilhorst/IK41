<?php
  # move this configuration file out of the web server's range!!!
  $dbconf = simplexml_load_file("mysql_config_rhapsody.xml");
  if ($dbconf === FALSE) {
    die("Could not parse XML file");
  }
  else {
    $db = new PDO("mysql:host=$dbconf->mysql_host;dbname=$dbconf->mysql_database;charset=utf8",
                  "$dbconf->mysql_username", "$dbconf->mysql_password")
                  or die('Error connecting to mysql server');
  }
?>