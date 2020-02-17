<?php
$content=0;
$video=0;
$name = $_POST['name'];
$desc = $_POST['desc'];
if(isset($_POST['content'])){
    $content=1;
};
if(isset($_POST['video'])){
    $video=1;
};
$query="INSERT into section (name,descr,content,video) values('$name','$desc','$content','$video')";
mysqli_query($connect,$query);
$id=mysqli_insert_id($connect);
$target_file = "/home/hashichemnad/admin/section/".$id.".jpg";
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
echo '<script>alert("inserted successfully")</script>';
?>