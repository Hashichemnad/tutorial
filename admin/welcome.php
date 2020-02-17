<?php 
require 'db.php';
session_start();
if($_SESSION['login']!=1)
    header("location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  <!-- using bootstrap-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Admin</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Admin MicroDegree</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="welcome.php">Home</a></li>
                    <li><a href="section.php">Add Section</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Content <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <?php
						$query = "SELECT * FROM section";  
						$result = mysqli_query($connect, $query);  
						while($row = mysqli_fetch_array($result))  
						{ 
                            echo'<li><a href="content.php?a='.$row['sid'].'">'.$row['name'].'</a></li>';
                        }
                    ?>
                    </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
  
        <div class="container">
        
        </div>
    </body>
</html>