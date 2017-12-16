
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 
<title>Final Project</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<meta name="description" content="Final Project">
<meta name="author" content="SitePoint">


<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>
<style>
    body{
        background: url("http://mdbootstrap.com/img/Photos/Others/img%20(42).jpg")
        no-repeat center center;
        background-size: cover;
    }

</style>

<body class="p-3 mb-2 bg-info text-white" .mr-3>
<center>

</center>

<center><h1><a href="index.php?page=accounts&action=all" >Display Accounts</a></h1></center>
<center><h1><a href="index.php?page=tasks&action=all" >Display Tasks</a></h1></center>


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


<script src="js/scripts.js"></script>
</body>
</html>
