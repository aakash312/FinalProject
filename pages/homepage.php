<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 
<title>Project</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<meta name="description" content="Final Project">
<meta name="author" content="SitePoint">



<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>

<body>


<h1>
<?php

    //this how to print some data;
echo $data['site_name'];

  ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<form action="index.php?page=accounts&action=login" method="POST">

<div class="container">
<label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="email" required>
      <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn btn-dark" >Login</button>
  </div>


</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>
