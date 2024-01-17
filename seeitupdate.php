<?php
include "blackconnect.php";
$gusid = $_GET['welcome'];
 $gusid;
     $sqle = "SELECT * FROM registration_aya where id='$gusid'";
                                           $qr = mysqli_query($conn,$sqle);
                                           if($qr){
                                                    while($out = mysqli_fetch_assoc($qr)){
                                                     $class = $out['class'];

                                                // $sqli = "SELECT * FROM $class WHERE general_id = $gusid";
                                                // $qrr = mysqli_query($conn,$qrr);
                                                // if($qrr){
                                                //     while($fet = mysqli_fetch_assoc($qrr)){
                                                                      $stu_imgg = $out['imagepath'];
                                                        $surnameg = $out['surname'];
                                                        $othernameg = $out['othername'];
                                             $sessiong = $out['sessionyr'];
                                             $dateofbirthg =$out['dateofbirth'];
                                             $genderg = $out['gender']; 
                                             $emailg =$out['email'];
                                             $religiong = $out['religion'];
                                             $home_addressg = $out['home_address'];
                                             $nationalityg = $out['nationality'];
                                             $cityg = $out['city'];
                                             $sectiong = $out['section'];
                                             $classg = $out['class'];
                                            
                                             $paswordg = $out['student_password'];
        
                                             $welcome = "Congratulations on your successful update";
                                                //     }
                                                // }
                                          
                                        }}
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
    <title>Updated successful</title>
<style>
    .alert{
        text-align: center;
    }
    label{
        font-size: 30px;
      
    }
</style>
</head>
<body>
<header class="header">
        <div class="containerr">
            <div class="branding">
               
                <h1>PROFILE<span class="highlight"> UPDATE</span></h1>

            </div>
            <nav class="nav">
               <a href="index.php"><button><i class="fas fa-home"></i></button></a>
               <a href="studentwelcome.php"><button>Back to class</button></a>
               <a href="#"><button>Master</button></a>
             
      
            </nav>
        </div>
    </header>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="alert alert-success">
					YOUR PROFILE HAS BEEN UPDATED SUCCESSFULLY.
				</div>
     <div class="alb">
       <img src="images/<?=$stu_imgg;?>" alt="">
   </div>
   
   

 
  <div class="tabur">
        <div class="card-header">STUDENT SECTION</div>
        <table class="table table-striped">
            <tr>
               <td> Surname: <br>
               <label for=""><?=$surnameg?></label>
               </td>
               <td>Othername:  <br><label for=""><?=$othernameg?></label><br></td>
            </tr>
            <tr>
                <td>
Date of Birth : <br><label for=""><?=$dateofbirthg?></label>
                <td>   Gender:
                
                <br><label for=""><?=$genderg?></label>
               
                    <br></td>
            </tr>

            <tr>
                <td> Email: <br><label for=""><?=$emailg?></label>&nbsp</td>
                <td> Religion: 
                <br><label for=""><?=$religiong?></label>
                <br></td>
            </tr>

            <tr>
                <td>   Home Address: <br><label for=""><?=$home_addressg?></label><br></td>
                <td>
                    session year : <br> 
                    
                    <br><label for=""><?=$sessiong?></label>


               
                </td>
            </tr>

            <tr>
         
            <td> Nationality:
            <br><label for=""><?=$nationalityg?></label>
            </td>
          
                <td> 
                State:
                <br><label for=""><?=$cityg?></label>
                </div>
            </td>
              
          
            </tr>

            <tr>
                  
            <td> Section:
            <br><label for=""><?=$sectiong?></label>
            </td>
                
           <td>  
           Class:
           <br><label for=""><?=$classg?></label>
            </td>
               
           
            </tr>
            <tr>
               
            <td>
                     Recent password: <br><label for=""><?=$paswordg?></label>
                    
                </td>
               
            </tr>
            <tr>
            
 
            </tr>
            
        </table>

        </div>


</form>
</body>
</html>