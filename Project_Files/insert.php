<?php
		include('server.php');
		session_start();
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$username = strtolower($_POST["username"]);
		$password = $_POST["password_1"];
		$sql = 'INSERT INTO users (username, email, password) VALUES' . '("' .$username . '","' . $_POST["email"] . '","' . $password . '")';
		try{
			$db->beginTransaction();
			$db->exec($sql);
			$db->commit();
			$db = null;
			$_SESSION['nonunique'] = false;
			header('Location:login.php');
			
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			$db = null;
			$_SESSION['nonunique'] = true;
			header('Location:register.php');
		}

		

		
	?>