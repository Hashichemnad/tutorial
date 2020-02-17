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
    $query = "SELECT * FROM section where sid=".$_GET['a']."";  
    $result = mysqli_query($connect, $query);  
    $section = mysqli_fetch_array($result);  
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'uploadcontent.php';
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
                    <li><a href="section.php">Add Section</a></li>
                    <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Content <span class="caret"></span></a>
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
        <h3>Add Content -  <?php echo $section['name']; ?></h3>

        <?php
            if($section['content']==1){
                echo'<h3>Add Content</h3>
                <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="section">Title</label>
                        <input type="text" name="title" class="form-control" id="section" aria-describedby="emailHelp" placeholder="Enter Title" required>
                        </div>
                        <div class="form-group">
                        <label for="desc">Date</label>
                        <input type="date" name="date" class="form-control" id="section" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group form-check">
                        <textarea name="desc" class="form-control" id="desc" rows="3" placeholder="Description / Content" required></textarea>
                        </div>
                        <input type="hidden" name="sid" value="'.$section['sid'].'">
                        <button type="submit" name="content" class="btn btn-primary">Submit</button>
                    </form>';
            }
            if($section['video']==1){
                echo'<h3>Add Video</h3>
                <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="section">Title</label>
                        <input type="text" name="title" class="form-control" id="section" aria-describedby="emailHelp" placeholder="Enter Title" required>
                        </div>
                        <div class="form-group ">
                        <label for="desc">Date</label>
                        <input type="date" name="date" class="form-control" id="section" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group form-check">
                        <input type="link" name="link" class="form-control"  placeholder="Enter the youtube link"id="section" aria-describedby="emailHelp" required>
                        </div>
                        <input type="hidden" name="sid" value="'.$section['sid'].'">
                        <button type="submit" name="video" class="btn btn-primary">Submit</button>
                    </form>';
            }
        ?>
        </div>
    </body>
</html>