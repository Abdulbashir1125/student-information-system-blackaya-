<?php
if(isset($_POST['submit']) && isset($_FILES['my_image'])){
    include "blackconnect.php";
echo "<pre>";
print_r($_FILES['my_image']);
echo "</pre>";
$name = $_POST['text'];
$img_name = $_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_name = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];

if ($error===0) {
 if($img_size>125000){
echo $err = "sorry file is too large";
header("location:photoupload.php?error=$err");
}else{
  $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
  $img_ex_lc = strtolower($img_ex);
 $allowed_exs = array("jpg","jpeg","png");
    if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name =uniqid("IMG-",true).'.'.$img_ex_lc;
        $img_upload_path = 'images/'.$new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
        // echo "here";
        $sql = "INSERT INTO images(img_url) VALUES('$new_img_name')";
        $q = mysqli_query($conn,$sql);
            if($q){
                echo "inserted";
                echo $name;
                // header("location:view.php");
            }else{
                echo "not inserted".$new_img_name;
                
            }
        
      
    }
    else{
      echo  $err = "extension not supported";
      header("location:photoupload.php?error=$err");
    }
}
}
else{
   echo $err = "unknown erroe occured";
   header("location:photoupload.php?error=$err");
}
}
else{
    echo "upload pls";
   
}
  
 

 
 ?>