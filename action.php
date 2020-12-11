</!DOCTYPE html>
<html>
<head>
	<script data-ad-client="ca-pub-4262615568787850" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<title></title>
</head>
<body style="background-color: #dae2e3;">

<?php
		if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
}
//$conn=new mysqli("sql204.epizy.com","epiz_25677311","W8aZTrVv8w0k","epiz_25677311_programmingpioneers");
$conn=new mysqli("sql107.epizy.com","epiz_25671524","LPySn967Dqk9G4A","epiz_25671524_programmingpioneers");
	//$conn=new mysqli("localhost","root","","programmingpioneers");
	if(!$conn)
	{
		echo "connection_failed";
	}
		$query="insert into contact(name,email,mobile,message)values('$name','$email','$mobile','$message')";
		if (mysqli_query($conn, $query)) {

			include 'app.php';
			 include'thanks.html';
		} 

	else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
		?>
</body>
</html>