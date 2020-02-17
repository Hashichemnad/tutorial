<?php 
require 'db.php';
session_start();
if($_SESSION['login']==1)
    header("location: welcome.php");
?>
<!DOCTYPE html> <!-- mentioning the type of document.-->
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  <!-- using bootstrap-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="login.php" method="post"> <!-- login form -->
            <div class="form-group">
                <label for="Admin ID">Admin ID</label>
                <input type="text" name="id" class="form-control" placeholder="Enter Admin ID"> <!-- input for admin id -->
                <small id="emailHelp" class="form-text text-muted">We'll never share your ID.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> <!-- input for password -->
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html> 