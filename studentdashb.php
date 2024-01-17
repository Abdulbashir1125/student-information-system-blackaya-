<?php
include "blackconnect.php";
session_start();




$id = $_SESSION['id'];



if (empty($id)) {
  header("Location: studentlogin.php");
 
}else{





// $student_id = $_GET['id'];
// $student_id;

$sql = "SELECT * FROM registration_aya where id = '$id'";
$quu = mysqli_query($conn,$sql);
if($quu){
    while($ff = mysqli_fetch_assoc($quu)){
        $sec = $ff['section'];
        $class = $ff['class'];
       $name = $ff['surname'];
       $othername = $ff['othername'];
       $full = $name.' '.$othername;
    }

}
else{
    echo 'not working sir aub';
}

if(isset($_POST['complain'])){
    $date = date('Y.M.d H:i');
     $textcom = $_POST['complainbox'];

     $coml ="INSERT INTO complains (user_id,name_of_student,section,class,timeofsubmission,complain) VALUES('$student_id','$full','$sec','$class','$date','$textcom')";
     $check = mysqli_query($conn,$coml);
     if($check){
         $scu = 'YOUR COMPLAIN HAS BEING SUBMITTED.';

     }
     else{
         $error = 'COMPLAIN IS NOT SUBMITTED';
     }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentdashb.css">
    <link href="studentdashb.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="icon" href="realaya.png" type="image/x-icon">
    <title>Student Dashboard</title>
  
</head>
<body>
<?php
if(!empty($scu)){
    echo '<div class="alert alert-success">
    COMPLAIN HAS BEING SUBMITTED SUCCESSFULLY.
</div>';
}
if(!empty($error)){
    echo '<div class="alert alert-danger">
    COMPLAIN NOT SUBMITTED .
</div>';
}
?>
<div class="das">BLACK-AYA INT'L SCHOOL-
    <span class="spa">STUDENT DASHBOARD</span>
</div>
<div class="lin">
    <ul type="none">
<a href="studentdashb.php"> <li class="underline" >Home</li></a>
       <a href="passchange.php" class="as" ><li style="color:green;">Change password</li></a>
       
      <a href="studentcomments.php" class="as" >  <li style="color:grey;">Check replies</li></a>
      <a href="out.php" class="as" >  <li style="color:blue;">Log-out</li></a>
      
    </ul>
</div>
    <div class="wel">
    <div class="divo"> <?php echo 'Welcome to your dashboard';
    ?></div>
    <div class="bay">
        This user can have access to all his/her academic record but <br>
         can't alter anything.Student can submit complain of anything<br>
         relevant to the school purpose.
    </div>
  
   &nbsp;<div class="divoo"><?php
   if($sec == 'Nursery'){
     echo $full;
   }
   elseif($sec =='Primary'){
    echo $_SESSION['fullnames'];
   }
   ?>.</div>
    <?php
    
    ?>
    </div>

    <div>
        <div class="profile">

            <h3>All your details</h3>
            <div style="width: 30%; text-align:justify;" >
            The details which the school has on a student and
            which can be use for any tracing or emergency purposes.
            </div>
            
            <div>
                <a href="userstu_prof.php?ids=<?=$id?>"><button class="btn btn-primary">GO TO YOUR PROFILE</button></a>

            </div>
        </div>

        <div class="activities" >
        <h3>All your academic performances</h3>
        
            <div style="width: 30%; text-align:justify;">
          
           This contains the student record of assessment
            which is use for exam compilation and other uses
            Student can check his/her CA and EXAM result here when made available.
            </div>
            
            <div>
               <?php
               
               if($sec == 'Nursery'){?>
                <a href="studentacts.php"> <button class="btn btn-success">CHECK ASSESSMENT</button></a>
            <?php   
            }
               
               elseif($sec == 'Primary'){?>
                <a href="studentactspri.php?ids=<?=$id?>"> <button class="btn btn-success">CHECK ASSESSMENT</button></a>
            <?php   
            }
            
               ?>

               
<!-- <button class="btn btn-success">CHECK ASSESSMENT</button> -->
            </div>
        </div>

        <div class="contact">
            <h3>Complain/Query to Us</h3>
            <div style="width: 30%; text-align:justify;">
            For any query/complain relevent,Student can report here.
           After the complain is submtted student should check his/her  
           profile
           more often for the call of the admin.
            
            </div>
                     
            <div>
          
                <!-- <a href="contactstu.php"><button class="btn btn-secondary">CONTACT US</button></a> -->
             <button class="btn btn-secondary" onclick="togglePopup()" >ASK/TELL US</button>

            </div>
        </div>


        <div class="popup" id="popup-1">
<div class="overlay"></div>
<div class="content">
<div class="close-btn" onclick="togglePopup()">&times;</div>

<h1>COMPLAIN FORM</h1> 
<h6>
Write your complain
        </h6>

  <form action="" method="POST">
            <table class="table table-striped">
                <tr>
                    <td>Name:</td>
                    <td><?=$full?></td>
                </tr>
               </table>
               <textarea name="complainbox" id="" cols="70" rows="5" required></textarea>
               <button type="reset" class="btn btn-secondary">RESET</button>
               <button type="submit" class="btn btn-primary" name="complain">SUBMIT COMPLAIN</button>
        </form>



</div>

</div>

    </div>
   
    <footer id="foot">
        <p>All right reserved &copy; 2021 Developed by : <span>BLACK-AYA</span></p>
    </footer>

    <script>

function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
}
</script>
</body>
</html>
<?php
}
?>