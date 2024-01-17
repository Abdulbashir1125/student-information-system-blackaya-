<?php
include "blackconnect.php";
$delete_id = $_GET['id'];
$sql = "SELECT * FROM registration_aya WHERE id = '$delete_id'";
if($check = mysqli_query($conn,$sql)){
while($ciro = mysqli_fetch_assoc($check)){
    $class = $ciro['class'];
    $event = $class.' '.'deleted';
}
}
if(isset($_POST['delete'])){
$sql1 = "UPDATE registration_aya set class = '$event' WHERE id = '$delete_id'";
if(mysqli_query($conn,$sql1)){
    header('location:nur2.php?deleted');
}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="delete" onclick="return(confirm('are you sure you want to delete this student?'))">
    </form>
</body>
</html>