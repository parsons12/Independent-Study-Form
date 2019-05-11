<?php
	// Start the session
	session_start();
	//check if user is logged in
    if(!$_SESSION['loggedin']){
        header("Location:login.php");
    }

?>

<html>
<head>
    <title>Independant Study Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    		
    <div class="header">
	<h2><?php echo $_POST["element_1"]; ?>: Independent Study Form</h2>
    </div>
    <form class="content" id="form_53538" class="appnitro" enctype="multipart/form-data" action= "Submission.php">
    <p>
	<!--  The submission of form for clarification of reader -->
    Name(Last, First, Midde): <?php echo $_POST["element_1"]; ?><br>
    Student ID: <?php echo $_POST["element_2"]; ?> <br>
    Global ID: <?php echo $_POST["element_3"]; ?><br>
	<hr>
    Street Address: <?php echo $_POST["element_4_1"]; ?><br>
    City: <?php echo $_POST["element_4_3"]; ?><br>
    State / Province / Region: <?php echo $_POST["element_4_4"]; ?><br>
    Postal / Zip Code: <?php echo $_POST["element_4_5"]; ?><br>
    Country: <?php echo $_POST["element_4_6"]; ?><br>
	<hr>
    Cell-Phone: (<?php echo $_POST["element_5_1"]?>)-<?php echo $_POST["element_5_2"]?>-<?php echo $_POST["element_5_3"]?><br>
    Local Phone(If Different): (<?php echo $_POST["element_6_1"]?>)-<?php echo $_POST["element_6_2"]?>-<?php echo $_POST["element_6_3"]?><br>
	<hr>
    Name of overseeing faculty member: <?php echo $_POST["element_7"]; ?><br>
    Faculty Email: <?php echo $_POST["element_8"]; ?><br>
    Faculty Phone: (<?php echo $_POST["element_9_1"]?>)-<?php echo $_POST["element_9_2"]?>-<?php echo $_POST["element_9_3"]?><br>
	<hr>
    Semester you will be enrolled in: <?php echo $_POST["element_10"]; ?><br>
    Number of Credits: <?php echo $_POST["element_11"]; ?><br>
    Description: <?php echo $_POST["element_12"]; ?><br>
	<hr>
    Students e-Signature: <?php echo $_POST["element_14"]; ?><br>
    Date Submitted: <?php echo $_POST["element_20_1"]?>/<?php echo $_POST["element_20_2"]?>/<?php echo $_POST["element_20_3"]?><br><br>
    </p>

	<!--  The submittion button that will take to other page to email -->
	<br>
	
    <center><input type="submit" class = "btn" name="submiter" value="SUBMIT" style="height:37.5px; width:75px; font-size:15px;" href= "Submission.php"/></center>
	<br/>

	<a href="javascript:history.back()">Go Back</a>


</body>
</html>

<!--  This will add the file upon submission to k-drive -->

	<?php
/*Variables declaration*/

		$user = $_POST["element_1"]; 
		$StudentID = $_POST["element_2"];
		$GlobalID = $_POST["element_3"];
		$StreetAdd = $_POST["element_4_1"];
		$City = $_POST["element_4_3"];
		$State = $_POST["element_4_4"];
		$Postal = $_POST["element_4_5"];
		$Country = $_POST["element_4_6"];
		$CellPhone = $_POST["element_5_1"]."-".$_POST["element_5_2"]."-".$_POST["element_5_3"];
		$LocalPhone = $_POST["element_6_1"]."-".$_POST["element_6_2"]."-".$_POST["element_6_3"];
		$FacultyName = $_POST["element_7"];
		$FacultyEmail = $_POST["element_8"];
		$FacultyPhone = $_POST["element_9_1"]."-".$_POST["element_9_2"]."-".$_POST["element_9_3"];
		$Semester = $_POST["element_10"];
		$NumCredits = $_POST["element_11"];
		$Description = $_POST["element_12"];
		$StudentsSignature = $_POST["element_14"];
		$DateSubmitted = $_POST["element_20_1"]."/".$_POST["element_20_2"]."/".$_POST["element_20_3"];

		$_SESSION['user'] = $user;
		$_SESSION['StudentID'] = $StudentID;
		$_SESSION['GlobalID'] = $GlobalID;
		$_SESSION['StreetAdd'] = $StreetAdd;
		$_SESSION['StreetAdd2'] = $StreetAdd2;
		$_SESSION['City'] = $City;
		$_SESSION['State'] = $State;
		$_SESSION['Postal'] = $Postal;
		$_SESSION['Country'] = $Country;
		$_SESSION['CellPhone'] = $CellPhone;
		$_SESSION['LocalPhone'] = $LocalPhone;
		$_SESSION['FacultyName'] = $FacultyName;
		$_SESSION['FacultyEmail'] = $FacultyEmail;
		$_SESSION['FacultyPhone'] = $FacultyPhone;
		$_SESSION['Semester'] = $Semester;
		$_SESSION['NumCredits'] = $NumCredits;
		$_SESSION['Description'] = $Description;
		$_SESSION['StudentsSignature'] = $StudentsSignature;
		$_SESSION['DateSubmitted'] = $DateSubmitted;


?>
