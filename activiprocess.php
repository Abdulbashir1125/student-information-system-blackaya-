<?php
include "blackconnect.php";
session_start();
$ids = $_GET['ids'];

$sql = "SELECT * FROM registration_aya WHERE id ='$ids'";
if($qr=mysqli_query($conn,$sql)){
    while($getit = mysqli_fetch_assoc($qr)){
    $section = $getit['section'];
       $class = $getit['class'];

       $sqll = "SELECT * FROM release_ca";
       if($qrr=mysqli_query($conn,$sqll)){
        while($getitt = mysqli_fetch_assoc($qrr)){
         $english_ca = $getitt['english'];
          $math_ca = $getitt['math'];
          $bscince_ca=$getitt['basicscience'];
          $phe_ca = $getitt['phe'];
          $spelling_ca = $getitt['spelling'];

        
         

           


    }
}
    }
}



?>


