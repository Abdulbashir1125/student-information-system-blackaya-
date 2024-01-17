<?php
include "blackconnect.php";
$se = "SELECT email FROM registration_aya";
$qur = mysqli_query($conn,$se);
if($qur){
while($out = mysqli_fetch_array($qur)){
 echo $hu = $out['email'].",";
$names_array=explode('',$out);
echo $names_array[1];
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
    
</body>
</html>