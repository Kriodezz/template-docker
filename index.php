<?php

try {
	$dbh = new PDO('mysql:host=mysql;dbname=test', 'root', 'root');

    echo 'Yeah!!!';
} catch (PDOException $e) {
	echo $e->getMessage();
}
