<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Registration</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form action="index.php?page=accounts&action=register" method="POST">
   
   <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b> Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required>

        <label><b>Surname </b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required>

        <label><b>Mobile Number</b></label>
        <input type="text" placeholder="Enter Phone number" name="phone" required>
        <label><b>Date of Birth</b></label>
        <input type="text" placeholder="Enter Birthday" name="bday" required>

        <label><b>Gender</b></label>
        <input type="text" placeholder="Enter Gender" name="gender" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit">Register</button>

</div>
    
   
</form>


<script src="js/scripts.js"></script>
</body>
</html>
