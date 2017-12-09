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

<body class="p-3 mb-2 bg-info text-white".bg-info >


<center><h1><a href="index.php?page=accounts&action=all" class="text-dark bg-info" .text-white>Display Accounts</a></h1></center>
<center><h1><a href="index.php?page=tasks&action=all" class="text-dark bg-info" .text-white>Display Tasks</a></h1></center>
<form class="form-group" action="index.php?page=accounts&action=login" method="POST">
<div class="form-row align-items-center">
    <div class="col-auto">
<div class="container-fluid">
<label><b>Username</b></label>
<input class="form-control" type="text" placeholder="Enter Username" name="email" required>
      <label><b>Password</b></label>
        <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
<div class="container-fluid">
  <button type="submit" class="btn btn-dark" >Login</button>
  </div>
 
    </div>
    </div>
    </div>



</form>
<center><h1><a href="index.php?page=accounts&action=register" class="text-dark bg-info" .text-white>Register</a></h1></center>


<script src="js/scripts.js"></script>
</body>
</html>
