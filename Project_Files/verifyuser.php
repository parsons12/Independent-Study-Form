<?php

		session_start();
		

		include('server.php');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$username =  strtolower($_POST["username"]);
		$sql = 'SELECT password FROM users WHERE username =' . '("' . $username . '")';
		print $sql;
		try{
			$q = $db->query($sql);
			$result = $q->fetch();
			$password = $result["password"];	
			
			
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
		}

		print $password;
		$db = null;

		if($password == $_POST["password"] And $password != null){
			
			$_SESSION['loggedin'] = true;
			header("Location:form.php");
			
		}
		else{
			$_SESSION['redirected'] = true;
			header("Location:login.php");
		}
	?>