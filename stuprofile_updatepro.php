<?php
 include "blackconnect.php";
session_start();


$message = "";
if(isset($_POST['submit']) && isset($_FILES['changephoto'])){
    $password = $_POST['cpass'];
    $repassword = $_POST['cpass1'];

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
    

    $img_name = $_FILES['changephoto']['name'];
    $img_size = $_FILES['chanhephoto']['size'];
    $tmp_name = $_FILES['changephoto']['tmp_name'];
    $error = $_FILES['changephoto']['error'];

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
                //   $sql = "INSERT INTO registration_aya (surname,othername,sessionyr,dateofbirth,gender,email,religion,home_address,nationality,city,section,class,student_password,par_surname,par_othername,par_number,par_address,rlship_cand,par_gender,id_name,id_key,nin,imagepath) 
                //        VALUES('$surname','$othername','$sessionyr','$dateofbirth','$gender','$email','$religion','$homeaddr','$nationality','$state','$section','$class','$password','$parsurname','$pothername','$pnumber','$paraddress','$rshiptocand','$pargender','$idname','$idkey','$nin','$new_img_name')";
                      $sql = "UPDATE registration_aya set surname = '$surname', othername = '$othername', sessionyr='$sessionyr', dateofbirth='$dateofbirth', gender='$gender',email='$email',religion='$religion', home_address='$homeaddr',nationality ='$nationality', city='$state',section='$section',class='$class',student_password='$password',imagepath='$new_img_name' WHERE id = '$newid' ";
                $q = mysqli_query($conn,$sql);
                           if($q){
                            //   if(mysqli_query($conn,$sql)){
                                 $sql = "SELECT * FROM registration_aya where email = '$email'";
                                 $qq = mysqli_query($conn,$sql);
                                 while($aha = mysqli_fetch_assoc($qq))  {
                                    
                                       $generalid =$aha['id'];
                                       $fullname = $surname.", ".$othername;
                                       $sql = "UPDATE  $class set student_name = '$fullname',general_id='$generalid'";
                                       $quer = mysqli_query($conn,$sql);
                                       if($quer){
                              $welcome = "Congratulations on your successful update";
                              header("location:stuprofile_update.php?welcome=$welcome");
                                       }
                                       else{
                                        echo $err = "Sorry your update is not completed";
                                        header("location:stuprofile_update.php?error=$err");
                                       }
    
                                 }
                              
                           }else{

                            echo $err = "Registration failed";
                            header("location:stuprofile_update.php?error=$err");
                           }
                       
                     
                   }
                   else{
                     echo  $err = "extension not supported";
                     header("location:stuprofile_update.php?error=$err");
                   }
               }
               }
               else{
                  echo $err = "unknown erroe occured";
                  header("location:stuprofile_update.php?error=$err");
               }
               }
               else{
                   $passerr = "the password does not match";
                   header("location:stuprofile_update.php?password-error=$passerr");
               }
     }
    
    else{
        $emailerror = "email already taken";
       
        header("location:stuprofile_update.php?emailerror=$emailerror");
      
    }
   
    }

    else{
        echo $newid;

       
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