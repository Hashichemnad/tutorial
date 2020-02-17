<?php
if(isset($_POST['content'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $desc = $_POST['desc'];
    $sid = $_POST['sid'];
    $query="INSERT into content (sid,title,descr,date) values('$sid','$title','$desc','$date')";
    mysqli_query($connect,$query);
}
if(isset($_POST['video'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $sid = $_POST['sid'];
    $query="INSERT into video (sid,title,link,date) values('$sid','$title','$link','$date')";
    mysqli_query($connect,$query);
}
echo '<script>alert("inserted successfully")</script>';
?>