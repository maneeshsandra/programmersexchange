<!DOCTYPE html>
<html>
<head>
  <script data-ad-client="ca-pub-4262615568787850" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <title>Contribute</title>
  <style type="text/css">
    label{
      font-size: 20px;
    
    }
</style>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-color: #dae2e3;">
  <?php include 'app.php';?>
  <div class="container">
    <h2 style="color:blue;">Contact Form</h2>
    <form action="action.php" method="post">
      <div class="form-group custom-control">
        <label for="email">Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name"
     name="name" required>
        <label for="title">Email</label>
    <input type="Email" class="form-control " placeholder="Enter your email" 
    name="email" required>
    <label for="title">Mobile</label>
    <input type="text" class="form-control " placeholder="Enter your Mobile No." 
    name="mobile" required></div>
        <div class="form-group custom-control">
        <label for="code">Message</label>
    <textarea type="text" class="form-control custom-control-textarea " placeholder="Enter Your issues and suggestions here" name="message" required></textarea></div>
    <input type="submit" name="submit" class="btn btn-success" style="margin-left: 400px;"></button>
    </form>
  </div>
</body>
</html>