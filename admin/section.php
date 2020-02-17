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
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['submit'])){
            require 'uploadsection.php';
        }
    }
?>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Admin MicroDegree</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="welcome.php">Home</a></li>
                    <li class="active"><a href="section.php">Add Section</a></li>
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
        <h3>Add Section</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="section">Section Name</label>
                <input type="text" name="name" class="form-control" id="section" aria-describedby="emailHelp" placeholder="Enter Section Name" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="desc" class="form-control" id="desc" rows="3" placeholder="Breif Description" required></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" value="1" name="content" class="form-check-input" id="content">
                <label class="form-check-label" for="content">Content</label>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" value="1" name="video" class="form-check-input" id="content">
                <label class="form-check-label" for="content">video</label>
            </div>
            <div class="form-group">
                <label for="video">Image(optional)</label>
                <input type="file" name="image" class="form-control-file" id="video">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <br>
        <div class="container">
            <h3>Uploaded</h3>            
            <table class="table table-hover">
            <thead>
                <tr>
                <th>Name</th>
                <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM section";  
				$result = mysqli_query($connect, $query);  
				while($row = mysqli_fetch_array($result))  
				{
                echo'<tr>
                <td>'.$row['name'].'</td>
                <td>'.$row['descr'].'</td>
                </tr>';
                }
            ?>
            </tbody>
            </table>
        </div>
    </body>
</html>