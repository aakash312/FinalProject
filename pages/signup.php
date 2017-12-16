<?php
include "header.php";
?>

    <title>Final Project</title>
    
<style>
body{
  background-image: url("https://mdbootstrap.com/img/Photos/Others/architecture.jpg");
  no-repeat center center;
      background-size: cover;
}
</style>
<center>

<form action="index.php?page=accounts&action=store" method="post"><div>
  <div>  First name: <input type="text" name="fname"><br><div>
      <div>  Last name: <input type="text" name="lname"><br><div>
          <div> Email: <input type="text" name="email"><br><div>
              <div>Phone: <input type="text" name="phone"><br><div>
                  <div>Date Of Birth: <input type="text" name="birthday"><br><div>
                      <div>Gender: <input type="text" name="gender"><br><div>
                          <div>Password: <input type="password" name="password"><br><div>
                              <div><input type="submit" value="Submit"><div>
</form>

</center>
