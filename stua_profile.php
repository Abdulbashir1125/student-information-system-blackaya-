<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="stu_profile.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <title>Student Profile</title>
</head>
<body>
    <!-- <a href="nur2.php"><i class="fas fa-arrow-left fa-3x"></i></a> -->
    <header class="header">
        <div class="containerr">
            <div class="branding">
               
                <h1>STUDENT<span class="highlight"> PROFILE IN ADMINISTRATIVE</span></h1>

            </div>
            <nav class="nav">
               <a href="index.php"><button><i class="fas fa-home"></i></button></a>
               <a href="nur2.php"><button>Back to class</button></a>
               <a href="#"><button>Master</button></a>
             
      
            </nav>
        </div>
    </header>


    <div class="all">
    <?php
include "blackconnect.php";
$id1 = $_GET['general_id'];
$sql = "SELECT * FROM registration_aya where id = '$id1'";
if($query = mysqli_query($conn,$sql)){
    while($out = mysqli_fetch_assoc($query)){
       
    //    echo $stu_img = $out['imagepath'];?>
       <div class="alb">
       <img src="images/<?=$out['imagepath']?>" alt="">
   </div>
   
<?php
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
 $par_surname = $out['par_surname'];
 $par_othername = $out['par_othername'];
 $par_number  =$out['par_number'];
 $par_address = $out['par_address'];
 $rlshiptocand = $out['rlship_cand'];
 $par_gender = $out['par_gender'];
 $parnin = $out['nin'];
 
    }
}
else{
    echo 'not fetching';
}
?>

  
   

  
 
  
  

   <!-- <div class="container">
   <div class="col-ml-8"> <div class="card mb-3">
    <div class="card-header">STUDENT SECTION</div>
    <div class="card-body">  -->
        <div class="tabur">
        <div class="card-header">STUDENT SECTION</div>
        <table class="table table-striped">
            <tr>
               <td> surname: <label for=""><?=$surname?></label>&nbsp;</td>
               <td>Othername: <label for=""><?=$othername?></label><br></td>
            </tr>
            <tr>
                <td>
Date of Birth : <label for=""><?=$dateofbirth?></label>&nbsp</td>
                <td>   Gender: <label for=""><?=$gender?></label><br></td>
            </tr>

            <tr>
                <td> Email: <label for=""><?=$email?></label>&nbsp</td>
                <td> Religion: <label for=""><?=$religion?></label><br></td>
            </tr>

            <tr>
                <td>   Home Address:  <label for=""><?=$home_address?></label><br></td>
                <td> Nationality:  <label for=""><?=$nationality?></label>&nbsp</td>
            </tr>

            <tr>
                <td>  City: <label for=""><?=$city?></label><br></td>
                <td> Section:  <label for=""><?=$section?></label>&nbsp</td>
            </tr>

            <tr>
                <td>
                Class:  <label for=""><?=$class?></label><br>
                </td>
                <td>
                    <a href="stuprofile_update.php?hisid=<?=$id1;?>">   <button class="btn btn-primary">Edit Student's profile</button></a>
             
                </td>
            </tr>
        </table>

        </div>
      
 <!-- </div></div>
  
</div>
</div> -->
<br><br>




<div class="taburr">
    <hr>
    <div class="card-header" id="card-header">PARENT SECTION</div>
        <table class="table table-striped">
            <tr>
               <td> surname: <label for=""><?=$par_surname?></label>&nbsp;</td>
               <td>Othername: <label for=""><?=$par_othername?></label><br></td>
            </tr>
            <tr>
                <td>
Phone number: <label for=""><a href="tel:<?=$par_number?>" ><?=$par_number?></a></label>&nbsp</td>
                <td>   Address: <label for=""><?=$par_address?></label><br></td>
            </tr>

            <tr>
                <td> Relationship with candidate: <label for=""><?=$rlshiptocand?></label>&nbsp</td>
                <td> Gender: <label for=""><?=$par_gender?></label><br></td>
            </tr>
<tr>
      <td> NIN: <label for=""><?=$parnin?></label>&nbsp</td>
              
                <td>
                    <a href="#"> <button class="btn btn-primary">Edit Parent's profile</button></a>
               
                   
                </td>
            </tr>
        </table>

        </div>
      

</div>

</body>
</html>