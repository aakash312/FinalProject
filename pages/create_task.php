<?php include 'header.php' ?>

<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
body{
  background-image: url("https://mdbootstrap.com/img/Photos/Others/architecture.jpg");
  no-repeat center center;
      background-size: cover;
}
</style>

<body>

<div class="container" >
<center>
<form action="https://web.njit.edu/~ab997/FinalP/index.php?page=tasks&action=store" method="POST" name="form">
 <div class="container">
        <h1>Make a New Task!</h1>

        <br>
        <div class="form-group">
        <label><b>Creation Date</b></label>
        <input type="text" value="" name="Creation Date" >
</div>
        <br>
       <div class="form-group">
        <label><b>Submission Date</b></label>
        <input type="text" value="" name="Submission Date" >
</div>

        <br>
        <div class="form-group">
        <label><b>Information</b></label>

        <textarea name="message" cols="50" rows="5"> </textarea>
</div>
        <br>
        <div class="form-group">
        <label><b>ISDone</b></label>
        <input type="text" value="" name="ISDone" >
</div>
        <br>
        <div class="form-group">
        <input type="submit" name="btSubmit" value="Add your task!">
</div>

</form>
</center>
</div>
</body>


