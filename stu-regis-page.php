<?php
 include "blackconnect.php";
session_start();
$message = "";
if(isset($_POST['submit']) && isset($_FILES['my_image'])){
    $password = $_POST['pass-stu'];
    $repassword = $_POST['pass-stuu'];

    $surname = $_POST['surname'];
    $othername = $_POST['othername'];
    $sessionyr = $_POST['session-year'];
    $dateofbirth = $_POST['date'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $religion = $_POST['religion'];
    $homeaddr = $_POST['address'];
    $nationality = $_POST['country'];
    $state = $_POST['states'];
    $section = $_POST['section'];
    $class = $_POST['class'];
    
    $parsurname = $_POST['par-surname'];
    $pothername = $_POST['par-othername'];
    $pnumber = $_POST['par-number'];
   $paraddress = $_POST['par-address'];
    $rshiptocand = $_POST['rship-student'];
    $pargender = $_POST['par-gender'];
    $idname = $_POST['id-name'];
     $idkey = $_POST['id-key'];
    $nin = $_POST['nin'];

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    $sql = "SELECT * FROM registration_aya WHERE email = '$email'";
    $qw = mysqli_query($conn,$sql);
     if(mysqli_num_rows($qw)==0){
        if($password == $repassword){
            if ($error===0) {
                if($img_size>300000){
               echo $err = "sorry file is too large";
               header("location:stu-registration.php?error=$err");
               }else{
                 $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                 $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","jpeg","png");
                   if(in_array($img_ex_lc,$allowed_exs)){
                       $new_img_name =uniqid("IMG-",true).'.'.$img_ex_lc;
                       $img_upload_path = 'images/'.$new_img_name;
                       move_uploaded_file($tmp_name,$img_upload_path);
                  $sql = "INSERT INTO registration_aya (surname,othername,sessionyr,dateofbirth,gender,email,religion,home_address,nationality,city,section,class,student_password,par_surname,par_othername,par_number,par_address,rlship_cand,par_gender,id_name,id_key,nin,imagepath) 
                       VALUES('$surname','$othername','$sessionyr','$dateofbirth','$gender','$email','$religion','$homeaddr','$nationality','$state','$section','$class','$password','$parsurname','$pothername','$pnumber','$paraddress','$rshiptocand','$pargender','$idname','$idkey','$nin','$new_img_name')";
                       $q = mysqli_query($conn,$sql);
                           if($q){
                            //   if(mysqli_query($conn,$sql)){
                                 $sql = "SELECT * FROM registration_aya where email = '$email'";
                                 $qq = mysqli_query($conn,$sql);
                                 while($aha = mysqli_fetch_assoc($qq))  {
                                    
                                       $generalid =$aha['id'];
                                       $fullname = $surname.", ".$othername;
                                      
                                       $sql = "INSERT INTO $class (student_name,general_id) VALUES('$fullname','$generalid')";
                                       $quer = mysqli_query($conn,$sql);
                                       if($quer){
                              $welcome = "Congratulations on your joining into Black-aya international";
                              header("location:stu-registration.php?welcome=$welcome");
                                       }
                                       else{
                                        echo $err = "Sorry your registration is not completed";
                                        header("location:stu-registration.php?error=$err");
                                       }
    
                                 }
                              
                           }else{

                            echo $err = "Registration failed";
                            header("location:stu-registration.php?error=$err");
                           }
                       
                     
                   }
                   else{
                     echo  $err = "extension not supported";
                     header("location:stu-registration.php?error=$err");
                   }
               }
               }
               else{
                  echo $err = "unknown erroe occured";
                  header("location:stu-registration.php?error=$err");
               }
               }
               else{
                   $passerr = "the password does not match";
                   header("location:stu-registration.php?password-error=$passerr");
               }
     }
    
    else{
        $emailerror = "email already taken";
       
        header("location:stu-registration.php?emailerror=$emailerror");
      
    }
   
    }

    else{
        echo "upload pls";
       
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
    <h1>hello our new student</h1>
</body>
</html>