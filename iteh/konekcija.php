<?php
try {
	    $host = "localhost";
	    $username = "root";
	    $password = "";
	    $db_name = "ecommerce";
	    $mysqli = new mysqli($host, $username, $password, $db_name);
	} catch (mysqli_sql_exception $e) {
    	die($e->getMessage());
}
?>