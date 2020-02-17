<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['submit'])){ //id and password sent from form
            require 'db.php'; #import database connect
            $id=$_POST['id'];
            $password=$_POST['password'];
            $sql = "SELECT * FROM login WHERE id = '$id' and password = '$password'"; #sql query
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);      
            $count = mysqli_num_rows($result);
            if($count == 1) { #if credential found
                $_SESSION['login'] = 1;
                $_SESSION['lid'] = $row['lid'];
                header("location: welcome.php");
             }else { #if credential not found
                $error = "Your Login Name or Password is invalid";
                header("location: index.php");
             }
            
        }
    }
    else {
        $error = "You are not allower to enter this page";
        header("location: index.php");
     }
?>