<?php 
require 'admin/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MicroDegree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
 
  </style>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">MicroDegree</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Videos
      </a>
      <div class="dropdown-menu">
      <?php
						$query = "SELECT * FROM section where video=1";  
						$result = mysqli_query($connect, $query);  
						while($row = mysqli_fetch_array($result))  
						{ 
              echo'<a class="dropdown-item" href="videos.php?a='.$row['sid'].'">'.$row['name'].'</a>';
            }
      ?>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Content
      </a>
      <div class="dropdown-menu">
      <?php
						$query = "SELECT * FROM section where content=1";  
						$result = mysqli_query($connect, $query);  
						while($row = mysqli_fetch_array($result))  
						{ 
              echo'<a class="dropdown-item" href="content.php?a='.$row['sid'].'">'.$row['name'].'
              </a>';
            }
      ?>
      </div>
    </li>
    
      <li class="nav-item">
        <a class="nav-link" href="#footer">contact us</a>
      </li>    
    </ul>
  </div>  
</nav>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="images/logo.jpeg" class="img-responsive margin" style="display:inline" alt="" width="350" height="150">
  <h3>I'm a </h3>
</div>

<?php
$query = "SELECT * FROM content where sid=".$_GET['a']."";  
$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_array($result))  
{ 
echo'<div class="container" style="margin-top:30px">
  <div class="row">
    
    <div class="col-sm-6">
    <h2>'.$row['title'].'</h2>
    <h5>'.$row['date'].'</h5>
      <p>'.$row['descr'].'</p>
      <button class="btn btn-primary"> more </button>
    </div>
       <div class="col-sm-6">
       <h2>'.$row['title'].'</h2>
       <h5>'.$row['date'].'</h5>
      <p>'.$row['descr'].'</p>
      <button class="btn btn-primary"> more </button>
    </div>
  </div>
</div>';
}
?>

<!-- Footer -->
<footer id="footer" style="color:white;background: #172138;" class="page-footer font-small mdb-color lighten-3 pt-4">
<div class="container text-center text-md-left">
    <div class="row">
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
        <h5 class="font-weight-bold text-uppercase mb-4">MicroDegree</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>
        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">Videos</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">About US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">Content</a>
            </p>
          </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fa fa-home mr-3"></i> Mangalore, Karanataka , India</p>
          </li>
          <li>
            <p>
              <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          </li>
          <li>
            <p>
              <i class="fa fa-phone mr-3"></i> + 91 234 567 88</p>
          </li>
          <li>
            <p>
              <i class="fa fa-print mr-3"></i> + 91 234 567 89</p>
          </li>
        </ul>
      </div>
       <hr class="clearfix w-100 d-md-none">
     </div>
   </div>
  <div class=" text-center py-3">© 2020 
</div>
</footer>
<!-- Footer -->
</body>
</html>
