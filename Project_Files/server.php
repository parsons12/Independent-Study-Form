<?php
	try {
    $db = new PDO('sqlite:registration.db');

	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>