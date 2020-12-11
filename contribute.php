<!DOCTYPE html>
<html>
<head>
  <script data-ad-client="ca-pub-4262615568787850" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <title>Contribute</title>
  <style type="text/css">
    label{
      font-size: 20px;
      color:#e81a4a;
    }
.content { display: flex }
aside { width: 200px }
main { width: calc(100% - 200px) }
</style>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-color: #dae2e3;">
  <?php include 'app.php';?>
  <div class="container">
    <h2 style="color:blue;">Contribution Form</h2>
    <form action="problems.php" method="post">
      <div class="form-group custom-control">
        <label for="email">Email or Name</label>
    <input type="text" class="form-control" placeholder="This willbe displayed beside your question"
     name="name" required>
        <label for="title">Title of the Problem</label>
    <input type="text" class="form-control " placeholder="Simple title like Reverse of a given number etc." 
    name="title" required>
      </div>
      <div class="form-group custom-control custom-radio custom-control-inline" required>
        <label for="difficulty">Difficulty of the Problem</label>
        <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="easy" required>
    <label class="custom-control-label" for="customRadio">Easy</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="medium">
    <label class="custom-control-label" for="customRadio2">Medium</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="hard">
    <label class="custom-control-label" for="customRadio3">Hard</label>
  </div> 
      </div>
      <div class="form-group custom-control">
        <label for="description">Description</label>
    <textarea type="text" class="form-control custom-control-textarea " placeholder="Simple description of the problem (what is the outcome)" name="description" required></textarea>
        <label for="solution">Approach to solve the problem</label>
    <textarea type="text" class="form-control custom-control-textarea " placeholder="What is your approach to acheive solution(including tricks)." name="solution" required style="min-height: 200px;"></textarea>
        <label for="code">Sample code</label>
    <textarea type="text" class="form-control custom-control-textarea " placeholder="Place your code here atleast one language(copy and paste from any IDE for better experience)." name="code" required style="min-height: 200px;"></textarea></div>
    <input type="submit" name="submit" class="btn btn-success" style="margin-left:50%;"></button>
    </form>
  </div>
  </body>
  </html>