
<?php include 'header.php' ?>

<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    body{
        background:  #e6f2ff;
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


