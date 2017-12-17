<?php include 'header.php' ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 
<title>Final Project</title>

 <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->

<meta name="description" content="Final Project">
<meta name="author" content="SitePoint">


<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>
<style>
    body{

        background-image: url("https://mdbootstrap.com/img/Photos/Others/architecture.jpg");
        no-repeat center center;
        background-size: cover;
    }


</style>

<!--<body class="p-3 mb-2 bg-info text-white" .mr-3>-->
<center>

</center>
<div class="container">
    <div class="jumbotron">
        <h2>Welcome to my Final Project!!</h2>
        <p> Attn: Prof. Keith Willams  <br>Teaching Assistant: Ikjyot Singh Gujral <br>Teaching Assistant: Brandon Major<br></p>
    </div>

</div>





<form action="index.php?page=accounts&action=login" method="POST">
<div class="form-group" class="form-row" class="row" div class="col" >
<center><label><b>Username</b></label><center>
<center><input  type="text" placeholder="Enter Email-ID" name="email" required> </center>
      <center><label><b>Password</b></label></center>
      <center>  <input  type="password" placeholder="Enter Password" name="password" required> </center>
  <button type="submit" class="btn btn-dark" >Login</button>
 
 
     </div>

</form>
 <center><h1><a href="index.php?page=accounts&action=signup" >Register</a></h1></center>
 <!-- <center><h1><a href="index.php?page=accounts&action=all" > View Accounts</a></h1></center>-->

<script src="js/scripts.js"></script>
</body>
</html>
<?php
include 'footer.php';
?>
