<?php
	// Start the session
	session_start();
	//check if user is logged in
    if(!$_SESSION['loggedin']){
        header("Location:login.php");
    }

?>
<?php
// Creates the file in folder "Submissions"
chdir("Submissions");
		$myfile = fopen("$_SESSION[user].txt", "a+") or die("Unable to open file!");
		$txt = "                                          ".PHP_EOL.
			   "Name(Last, First, Midde):   $_SESSION[user] ".PHP_EOL.
		       "Student ID:                 $_SESSION[StudentID]".PHP_EOL.
			   "Global ID:                  $_SESSION[GlobalID]".PHP_EOL.
			   "Street Address:             $_SESSION[StreetAdd]".PHP_EOL.
			   "City:                       $_SESSION[City]".PHP_EOL.
			   "State/Province/Region:      $_SESSION[State]".PHP_EOL.
			   "Postal/Zip Code:            $_SESSION[Postal]".PHP_EOL.
			   "Country:                    $_SESSION[Country]".PHP_EOL.
			   "Cell Phone:                 $_SESSION[CellPhone]".PHP_EOL.
			   "Local Phone:                $_SESSION[LocalPhone]".PHP_EOL.
			   "                                          ".PHP_EOL.
			   "Faculty member:             $_SESSION[FacultyName]".PHP_EOL.
			   "Faculty Phone Number:       $_SESSION[FacultyPhone]".PHP_EOL.
			   "                                          ".PHP_EOL.
			   "Enrollment Semester:        $_SESSION[Semester]".PHP_EOL.
			   "Number of credits:          $_SESSION[NumCredits]".PHP_EOL.
			   "                                          ".PHP_EOL.
			   "Description:                $_SESSION[Description]".PHP_EOL.
			   "                                          ".PHP_EOL.
			   "Student Signature:          $_SESSION[StudentsSignature]".PHP_EOL.
			   "Date of Submission:         $_SESSION[DateSubmitted]".PHP_EOL.
			   "                                          ".PHP_EOL.
			   "Approved by:        _______________________"
			   ;	
		fwrite($myfile, $txt);
		fclose($myfile);


?>

 <!-- HTML page for after the submission page is run -->

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Brogrammers University</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" src="calendar.js"></script>
</head>

<body>
	<div class="header">
		<h2>Brogrammers University</h2>
		<p><center><font size="3">Online form for Independent Study Admission </font></center></p>
	</div>

		 <form class="content" id="form_53538" class="appnitro" enctype="multipart/form-data" action= "Submission.php">
   

		<center> Thank you for submitting. You can close the page now.<center/>

		</form>

        <div id="footer">
           <center><a> &#9400; Brogrammer University</a></center>
        </div>
	</div>
	<div>

        </div>
        <a href="logout.php">Sign Out</a>

</body>
</html>
<?php
$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 
$mail->Host       = "smtp.gmail.com";      // SMTP server
$mail->Port       = 587;                   // SMTP port
$mail->Username   = "cps410form@gmail.com";  // username
$mail->Password   = "cps410admin";            // password

$mail->SetFrom('cps410form@gmail.com', 'Test');

$mail->Subject    = "I hope this works!";

$mail->MsgHTML('Blah');

$address = "cps410form@gmail.com";
$mail->AddAddress($address, "Test");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>