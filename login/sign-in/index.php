<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Student information</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      <?php include "c:/my_project/global/style.css"?>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Student Information</h1>

    <div class="form-floating">
      <input type="name" class="form-control" id="floatingInput" name="frollno" placeholder="Enter the rollno">
      <label for="floatingInput">Rollno</label>
    </div>
    <div class="form-floating">
      <input type="rollno" class="form-control" id="floatingPassword" name="fname" placeholder="Enter the name">
      <label for="floatingPassword">Name</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button><br><br>
  
    <?php
echo "<h2><b>INFORMATION</b></h2><br><br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $rollno =($_REQUEST["frollno"]);
    if(empty($rollno)) 
    {
        echo "<p class='mycss'>*Roll No is empty</p><br>";   
    }
    elseif(!is_numeric($_POST["frollno"]))
    {
        echo "<h5><p class='mycss'>*Enter Rollno Only</p></h5>";
    }
    else 
    {
        echo "<b>ROLLNO</b>:$rollno<br><br>";
    } 	

    $name = ($_REQUEST["fname"]);
    if (empty($name)) 
    {
        echo "<p class='mycss'>*Name is empty</p>";
    } 
    elseif(is_numeric($_POST["fname"]))
    {
        echo "<h5><p class='mycss'>*Enter Characters Only</p></h5>";
    }
    else 
    {
        echo "<b>NAME</b> $name ";
    }
}
?> 
    
  </form>
</main>

    
  </body>
</html>
