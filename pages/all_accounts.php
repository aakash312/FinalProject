
<?php include 'header.php' ?>

<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    body{
        background: -moz-linear-gradient(45deg, rgba(242, 34, 50, 0.5), rgba(255, 187, 54, 0.6) 100%);
        background: -webkit-linear-gradient(45deg, rgba(242, 34, 50, 0.5), rgba(255, 187, 54, 0.6) 100%);
        background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
    }
</style>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Final Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <![endif]-->
</head>

<body>
<div class="container">

    <table class="table table-striped">

        <?php
        //this is how you print something

        print utility\htmlTable::genarateTableFromMultiArray($data);


        ?>
</div>


