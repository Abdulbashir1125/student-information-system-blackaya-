<?php
require("blackconnect.php");
session_start();
error_reporting(0);
 $val = $_GET["value"];
 $val_M = mysqli_real_escape_string($conn,$val);
 $sql = "SELECT D_Type , D_Name FROM list WHERE D_Type = '$val_M'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
 echo "state/city:<select name='states'>";
 while ($rows = mysqli_fetch_assoc($result)){
     $suna = $rows["D_Name"];
     echo "<option>".$suna."</option>";
 }
 echo "</select required><br>";
}



$val = $_GET["valuee"];
$val_M = mysqli_real_escape_string($conn,$val);
$sql = "SELECT D_Type , D_Name FROM list WHERE D_Type = '$val_M'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
echo "class here:<select name='class'>";
while ($rows = mysqli_fetch_assoc($result)){
    $suna = $rows["D_Name"];
    echo "<option>".$suna."</option>";
}
echo "</select required><br> ";

}

?>
