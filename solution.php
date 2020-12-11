<!DOCTYPE html>
<html>
<head>
	<script data-ad-client="ca-pub-4262615568787850" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<style type="text/css">
		.card{
			margin-top: 20px;
			background-color: black;

		}
	</style>
	<title>Solution</title>
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php include 'app.php';
	$answer=$_GET['search'];
	$conn=new mysqli("sql107.epizy.com","epiz_25671524","LPySn967Dqk9G4A","epiz_25671524_programmingpioneers");
	//$conn=new mysqli("sql204.epizy.com","epiz_25677311","W8aZTrVv8w0k","epiz_25677311_programmingpioneers");
	//$conn=new mysqli("localhost","root","","programmingpioneers");
          if(!$conn)
          {
            echo "connection_failed";
          }
          else{
            
          }
          $query= "select title,description,solution,code,name from problems where id=$answer";
          $result=mysqli_query($conn,$query);
          $num=mysqli_num_rows($result);
          if(mysqli_query($conn,$query)){
            
          }
          else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
	 while ($row=mysqli_fetch_array($result)) 
	 { 
			    $title=$row[0];
			    $description=$row[1];
			    $solution=$row[2];
			    $code=$row[3];
			    $name=$row[4];
   }
 ?>

 <div class="container card bg-light">
 	<div class="card-body">
 	<h2 class="card-title"><?php echo "$title";?></h2>
 	<h5 class="text-muted">contributed by <?php echo "$name";?></h5>
 	<hr>
 	<div class="card-text "style="background-color: #d9d9d9">
 		<p style="font-size: 18px;"><?php echo "$description";?></p>
 	</div>
 	<hr>
 	<div class="card-text" style="background-color: #edc253;">
 		 <p style="font-size: 29px;color:#0738fa;">Approach of this problem</p>
 		<pre style="font-size: 23px;"><?php echo "$solution";?></p>
 	</div>
 	<hr>
 	<div class="card-footer"style="font-size: 21px;">
 		<pre><?php echo "$code";?></pre>
 	</div>
 </div>
 </div>
</body>
</html>