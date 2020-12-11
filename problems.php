<!DOCTYPE html>
<html>
<head>
	<script data-ad-client="ca-pub-4262615568787850" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<title>Hurray</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-color: #dae2e3;">
		 <?php
		 		if (isset($_POST['submit'])) {
				$name=$_POST['name'];
				$title=$_POST['title'];
				$difficulty=$_POST['example'];
				$description=$_POST['description'];
				$solution=$_POST['solution'];
				$code=$_POST['code'];
}
		//$conn=new mysqli("sql204.epizy.com","epiz_25677311","W8aZTrVv8w0k","epiz_25677311_programmingpioneers");
		$conn=new mysqli("sql107.epizy.com","epiz_25671524","LPySn967Dqk9G4A","epiz_25671524_programmingpioneers");
					if(!$conn)
					{
						echo "connection_failed";
					}
					else{
						//echo "sucess";
					}
	$query="insert into problems(name,title,difficulty,description,solution,code)values ('$name','$title','$difficulty',
	'$description','$solution','$code')";
						if (mysqli_query($conn, $query)) {

							include 'app.php';
							 include'thanking.html';
						} 

					else {
				    		echo "Error: " . $query . "<br>" . mysqli_error($conn);
						}
					mysqli_close($conn);
		?>
</body>
</html>