<?php
//Singleton pattern
class Database{
	
private static $instance;
 
private $HOST = "aa8ptezdj3amw8.crfsirrnmvve.us-east-1.rds.amazonaws.com:3306";
private $DB = "ebdb";
private $DBUSER = "bestview";
private $PASS = "bestview";


private function _construct(){
	//This will load only once regardless of how many times the class is called
	 }

public static function getInstance(){
	if(!self::$instance){
		self::$instance = new Database ();
	}
	return self::$instance;
}

public function connect() { 
    //db connection
 	  mysql_connect($this->HOST,$this->DBUSER,$this->PASS) or die (mysql_error());
	  mysql_select_db($this->DB) or die(mysql_error()); 
}
 
public function query($query) {
    //queries 
 	$sql = mysql_query($query) or die(mysql_error()); 
    return $sql;
}

public function numrows($query) {
    //count number of rows  
    $sql = $this->query($query);
    return mysql_num_rows($sql);
}

}
//Intantiate the class
$database = Database::getInstance();
$database->connect();
?>
