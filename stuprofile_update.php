<?php
    
    include "blackconnect.php";
    $newid ="";
    $newid = $_GET['hisid'];
    
    
    $sql = "SELECT * FROM registration_aya where id = '$newid'";
    if($query = mysqli_query($conn,$sql)){
        while($out = mysqli_fetch_assoc($query)){
            $stu_img = $out['imagepath'];
            $surname = $out['surname'];
            $othername = $out['othername'];
 $session = $out['sessionyr'];
 $dateofbirth =$out['dateofbirth'];
 $gender = $out['gender']; 
 $email =$out['email'];
 $religion = $out['religion'];
 $home_address = $out['home_address'];
 $nationality = $out['nationality'];
 $city = $out['city'];
 $section = $out['section'];
 $class = $out['class'];

 $pasword = $out['student_password'];

 
    }
}
else{
    echo 'not fetching';
}

if(isset($_POST['submit']) && isset($_FILES['changephoto'])){
    $passupdate = $_POST['cpass'];
    $repassword = $_POST['cpass1'];

    $surupdate = $_POST['surname'];
    $otherupdate = $_POST['othername'];
    $sessionyrup = $_POST['sessionyr'];
    $dateofbirthup = $_POST['dateofbirth'];
    $genderup = $_POST['gender'];
    $emailup = $_POST['email'];
    $religionup = $_POST['religion'];
    $homeaddrup = $_POST['address'];
    $nationalityup = $_POST['nationality'];
    $stateup = $_POST['states'];
    $sectionup = $_POST['section'];
    $classup = $_POST['class'];
    

    $img_name = $_FILES['changephoto']['name'];
    $img_size = $_FILES['changephoto']['size'];
    $tmp_name = $_FILES['changephoto']['tmp_name'];
    $error = $_FILES['changephoto']['error'];

    $sql = "SELECT * FROM registration_aya WHERE email = '$emailup'";
    $qw = mysqli_query($conn,$sql);
     if(mysqli_num_rows($qw)==0){
        if($passupdate == $repassword){
            if ($error===0) {
                if($img_size>300000){
               echo $err = "sorry file is too large";
               header("location:stuprofile_update.php?error=$err");
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
                      $sql = "UPDATE registration_aya set surname = '$surupdate', othername = '$otherupdate', sessionyr='$sessionyrup', dateofbirth='$dateofbirthup', gender='$genderup',email='$emailup',religion='$religionup', home_address='$homeaddrup',nationality ='$nationalityup', city='$stateup',section='$sectionup',class='$classup',student_password='$passupdate',imagepath='$new_img_name' WHERE id = '$newid' ";
                $q = mysqli_query($conn,$sql);
                           if($q){
                            //   if(mysqli_query($conn,$sql)){
                                 $sql = "SELECT * FROM registration_aya where email = '$emailup'";
                                 $qq = mysqli_query($conn,$sql);
                                 while($aha = mysqli_fetch_assoc($qq))  {
                                    
                                       $generalid =$aha['id'];
                                       $fullname = $surupdate.", ".$otherupdate;
                                       $sql = "UPDATE  $class set student_name = '$fullname',general_id='$generalid' WHERE general_id='$generalid'";
                                       $quer = mysqli_query($conn,$sql);
                                       if($quer){
                                          header("location:seeitupdate.php?welcome=$generalid");
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
         $newid;

       
    }
  

?>

            
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stuprofile_update.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <title>Student profile update</title>

    <script>
function my_fun(str){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById('pol1').innerHTML = this.responseText;

        }
    }
    xmlhttp.open("GET","updatehelper.php?value="+str,true);
    xmlhttp.send();
}
function my_func(str){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById('pol2').innerHTML = this.responseText;

        }
    }
    xmlhttp.open("GET","updatehelper.php?valuee="+str,true);
    xmlhttp.send();
}



</script>
</head>
<body>


        <?php if(isset($_GET['error'])):?>
        <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>

        <?php if(isset($_GET['password-error'])):?>
        <p><?php echo $_GET['password-error']; ?></p>
        <?php endif ?>

        <?php if(isset($_GET['emailerror'])):?>
        <p><?php echo $_GET['emailerror']; ?></p>
        <?php endif ?>

<header class="header">
        <div class="containerr">
            <div class="branding">
               
                <h1>STUDENT PROFILE<span class="highlight"> UPDATE</span></h1>

            </div>
            <nav class="nav">
               <a href="index.php"><button><i class="fas fa-home"></i></button></a>
               <a href="nur2.php"><button>Back to class</button></a>
               <a href="#"><button>Master</button></a>
             
      
            </nav>
        </div>
    </header>
    <form action="" method="POST" enctype="multipart/form-data">
     <div class="alb">
       <img src="images/<?=$stu_img;?>" alt="">
   </div>
   <div>
       <input type="file" name="changephoto" value="<?=$stu_img?>">
   </div>
   

 
  <div class="tabur">
        <div class="card-header">STUDENT SECTION</div>
        <table class="table table-striped">
            <tr>
               <td> Surname: <input type="text" name="surname"  class="form-control" value="<?=$surname?>"></td>
               <td>Othername: <input type="text" name="othername"  class="form-control" value="<?=$othername?>"><br></td>
            </tr>
            <tr>
                <td>
Date of Birth : <input type="date" name="dateofbirth"  class="form-control" value="<?=$dateofbirth?>">
                <td>   Gender: <br> <select name="gender" id="">
                    <option value="male">-<?=$gender?>-</option>
                    <option value="male">male</option>
                    <option value="female">Female</option>

                </select>
                    <br></td>
            </tr>

            <tr>
                <td> Email: <input type="text" name="email"  class="form-control" value="<?=$email?>">&nbsp</td>
                <td> Religion: 
               <br> <select name="religion" id="">
                    <option value="Islam">-<?=$religion?>-</option>
                    <option value="Islam">islam</option>
                    <option value="Christianity">Christianity</option>
                    <option value="no religion">No religion</option>

                </select>
                <br></td>
            </tr>

            <tr>
                <td>   Home Address:  <input type="text" name="address"  class="form-control" value="<?=$home_address?>"><br></td>
               <td>
                  FROM: <br><label for="">
                      BLACK:AYA
                  </label>
               </td>
            </tr>

            <tr>
         
            <td> Nationality: <br>
            <select name="nationality" id="" onchange="my_fun(this.value);">
                <option value="<?=$nationality?>">-<?=$nationality?>-</option>
                <option value="America">America</option>
               <option value="Nigeria">Nigeria</option>
                <option value="Ghana">Ghana</option>
                <option value="China">China</option>
            </select>
            </td>
          
                <td> 
                <div id="pol1">
                </div>
            </td>
              
          
            </tr>

            <tr>
                  
            <td> Section: <br>
            <select name="section" id="" onchange="my_func(this.value);">
            <option value="<?=$section?>"><?=$section?></option>
<option value="Primary">primary</option>
<option value="Nursery">nursery</option>
<option value="Junior secondary">Junior secondary</option>
<option value="Senior secondary">Senior secondary</option>
              
            </select>
            </td>
                
           <td>  
           <div id="pol2"></div>
            </td>
               
           
            </tr>
            <tr>
               
            <td>
                    Change password: <input type="text" name="cpass"  class="form-control" value="<?=$pasword?>">
                    
                </td>
               
                <td>
                  Confirm  Change password: <input type="text" name="cpass1"  class="form-control" value="<?=$pasword?>">
                    
                </td>
            </tr>
            <tr>
                <td>
                    session year : <br> <select name="sessionyr" id="">
                    <option value="2020/2021">-<?=$session?>-</option>
                    <option value="2020/2021">2021/2022</option>
                    <option value="2021/2022">2021/2022</option>
                    <option value="2022/2023">2022/2023</option>


                </select>
                </td>
                <td>
<div>
    <input type="submit" name="submit" id="" value="Update" class="btn btn-primary" >

</div>
             
                </td>
            </tr>
            
        </table>

        </div>


</form>

</body>
</html>