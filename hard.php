<head>
  <script data-ad-client="ca-pub-4262615568787850" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <title>Hard</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
    .a{
      text-decoration: none;
    }
</style>
</head>
<div class="content">
  <?php include'app.php';?>
  <main>
    <div class="card-columns">
  <?php
  //$conn=new mysqli("sql204.epizy.com","epiz_25677311","W8aZTrVv8w0k","epiz_25677311_programmingpioneers");
  $conn=new mysqli("sql107.epizy.com","epiz_25671524","LPySn967Dqk9G4A","epiz_25671524_programmingpioneers");
      //$conn=new mysqli("localhost","root","","programmingpioneers");
          if(!$conn)
          {
            echo "connection_failed";
          }
          else{
            
          }
          $query= "select title,description,id from problems where difficulty='hard'order by id";
          $result=mysqli_query($conn,$query);
          $num=mysqli_num_rows($result);
          if(mysqli_query($conn,$query)){
            
          }
          else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
        ?>

<?php 
  while ($row=mysqli_fetch_array($result)) { 
    $title=$row[0];
    $description=$row[1];
    $index=$row[2];
    ?>
    <div >
  <div class="card bg-info">
    <div class="card-body">
      <h5 class="card-title" style="color:white;"><?php echo"$title";?></h5>
      <p class="card-text" style="color: white;"><?php echo"$description";?></p>
      <a href="solution.php?search=<?php echo "$index"; ?>"><input class="btn btn-success" type="submit" value="Have a look"></a>
    </div>
  </div>
</div>
</body>
</html>
<?php }?>
  </main>
<div>
