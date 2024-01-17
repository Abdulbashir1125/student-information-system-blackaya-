<?php
include "blackconnect.php";
error_reporting(0);
session_start();
$ids = $_GET['ids'];


$sql = "SELECT * FROM school_term WHERE sn = '1'";
if($query = mysqli_query($conn,$sql)){
  while($hold = mysqli_fetch_assoc($query)){
    $hol = $hold['term'];
   
  }
}
$sql = "SELECT * FROM registration_aya WHERE id ='$ids'";
if($qr=mysqli_query($conn,$sql)){
    while($getit = mysqli_fetch_assoc($qr)){
    $section = $getit['section'];
       $class = $getit['class'];

       $sqll = "SELECT * FROM release_ca";
       if($qrr=mysqli_query($conn,$sqll)){
        while($getitt = mysqli_fetch_assoc($qrr)){
         $english_ca = $getitt['prienglish'];
          $math_ca = $getitt['primath'];
          $bscince_ca=$getitt['pribscience'];
          $btech = $getitt['Btech'];
          $lit=$getitt['literature'];
          

          if($english_ca=='out now'){
            $sell = "SELECT * FROM $class WHERE general_id ='$ids' and statusofu!='demote'";
          }
          else{
              $not =  ' not released yet(ENGLISH)';
          }

          if($math_ca=='out now'){
            $sellm = "SELECT * FROM $class WHERE general_id ='$ids' and statusofu!='demote'";
          }
          else{
              $not_m =  ' not released yet(MATH)';
          }

          if($bscince_ca=='out now'){
            $sells = "SELECT * FROM $class WHERE general_id ='$ids' and statusofu!='demote'";
          }
          else{
              $not_s =  ' not released yet(B/SCIENCE)';
          }

          if($btech=='out now'){
            $sellp = "SELECT * FROM $class WHERE general_id ='$ids' and statusofu!='demote'";
          }
          else{
              $not_p =  ' not released yet(phe)';
          }
          if($lit=='out now'){
            $spell = "SELECT * FROM $class WHERE general_id ='$ids' and statusofu!='demote'";
          }
          else{
              $not_sp =  ' not released yet(spelling)';
          }
}

}
    }
}

$ell = "SELECT * FROM result_release";
$rr = mysqli_query($conn,$ell);
if($rr){
    while($ft= mysqli_fetch_assoc($rr)){
  $term = $ft['term'];
 $action= $ft['action'];


    }

}
if($hol =='first term'){
    $cas = "SELECT * FROM $class where general_id='$ids' and statusofu!='demote'";
    if($yayi = mysqli_query($conn,$cas)){
        while($ciro = mysqli_fetch_assoc($yayi)){
               $namet = $ciro['student_name'];
                $subject1= $ciro['subject_1'];
                $c1= $ciro['ca1'];
                $c2= $ciro['ca2'];
                $exam1= $ciro['exam1'];
                $total1= $ciro['total1'];

                $subject2= $ciro['subject_2'];
                $c3= $ciro['ca3'];
                $c4= $ciro['ca4'];
                $exam2= $ciro['exam2'];
                $total2= $ciro['total2'];

                $subject3= $ciro['subject_3'];
                $c5= $ciro['ca5'];
                $c6= $ciro['ca6'];
                $exam3= $ciro['exam3'];
                $total3= $ciro['total3'];

                $subject4= $ciro['subject_4'];
                $c7= $ciro['ca7'];
                $c8= $ciro['ca8'];
                $exam4= $ciro['exam4'];
                $total4= $ciro['total4'];

                $subject5= $ciro['subject_5'];
                $c9= $ciro['ca9'];
                $c10= $ciro['ca10'];
                $exam5= $ciro['exam5'];
                $total5= $ciro['total5'];

                $average = $ciro['total_average'];
                $gradee = $ciro['grade'];

        }
    }
}
if($hol =='Second term'){
    $cas = "SELECT * FROM $class where general_id='$ids' and statusofu!='demote'";
    if($yayi = mysqli_query($conn,$cas)){
        while($ciro = mysqli_fetch_assoc($yayi)){
               $namet = $ciro['student_name'];
                $subject21= $ciro['subject_21'];
                $c21= $ciro['ca21'];
                $c22= $ciro['ca22'];
                $exam21= $ciro['exam21'];
                $total21= $ciro['total21'];

                $subject22= $ciro['subject_22'];
                $c23= $ciro['ca23'];
                $c24= $ciro['ca24'];
                $exam22= $ciro['exam22'];
                $total22= $ciro['total22'];

                $subject23= $ciro['subject_23'];
                $c25= $ciro['ca25'];
                $c26= $ciro['ca26'];
                $exam23= $ciro['exam23'];
                $total23= $ciro['total23'];

                $subject24= $ciro['subject_24'];
                $c27= $ciro['ca27'];
                $c28= $ciro['ca28'];
                $exam24= $ciro['exam24'];
                $total24= $ciro['total24'];

                $subject25= $ciro['subject_25'];
                $c29= $ciro['ca29'];
                $c210= $ciro['ca210'];
                $exam25= $ciro['exam25'];
                $total25= $ciro['total25'];

                $average2 = $ciro['total_average2'];
                $gradee2 = $ciro['grade_2'];

        }
    }
}

elseif($hol =='Third term'){
    $cas = "SELECT * FROM $class where general_id='$ids' and statusofu!='demote' ";
    if($yayi = mysqli_query($conn,$cas)){
        while($ciro = mysqli_fetch_assoc($yayi)){
               $namet = $ciro['student_name'];
                $subject31= $ciro['subject_31'];
                $c31= $ciro['ca31'];
                $c32= $ciro['ca32'];
                $exam31= $ciro['exam31'];
                $total31= $ciro['total31'];

                $subject32= $ciro['subject_32'];
                $c33= $ciro['ca33'];
                $c34= $ciro['ca34'];
                $exam32= $ciro['exam32'];
                $total32= $ciro['total32'];

                $subject33= $ciro['subject_33'];
                $c35= $ciro['ca35'];
                $c36= $ciro['ca36'];
                $exam33= $ciro['exam33'];
                $total33= $ciro['total33'];

                $subject34= $ciro['subject_34'];
                $c37= $ciro['ca37'];
                $c38= $ciro['ca38'];
                $exam34= $ciro['exam34'];
                $total34= $ciro['total34'];

                $subject35= $ciro['subject_35'];
                $c39= $ciro['ca39'];
                $c310= $ciro['ca310'];
                $exam35= $ciro['exam35'];
                $total35= $ciro['total35'];

                $average3 = $ciro['total_average3'];
                $gradee3 = $ciro['grade_3'];

        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentacts.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <title>STUDENT ACTIVITIES B-I-S</title>
</head>
<body>
    <header>
        
        <div class="title">
           &nbsp STUDENT <span>ACTIVITIES</span> 
        </div>
        <div class="lin">
    <ul type="none">
<a href="studentdashb.php?id=<?=$ids?>"> <li class="underline" >Back to my dashboard</li></a>
       <a href="#" class="as" ><li style="color:green;">What's new?</li></a>
       
      <a href="#" class="as" >  <li style="color:white;">Contact School</li></a>
      
    </ul>
</div>
    </header>
    <div class="com" style="width:50%; text-align:justify; margin-left:15px;">
    <div>Your C_A RESULT of any subject will appear here  when released by the admin(subject teacher) but  any subject that wishes to released it
     scores to its  student must have to provide the full recording of all  the C_A's (both first and second). Also not all  subjects will be released at a time but 
    each  subject can be released separately if the rule is abided.
</div>

<form action="" method="post">


    <button type="button" class="btn btn-success " id="who" onclick="togglePopup()"> CHECK YOUR RESULT</button>
  
</form>

    <div class="comm">
    <div>Your <span>RESULT</span> can be checked here  when released at the end of each term. 
    Although only those whose school fees  is cleared can be able to view their results.
   
</div>

</div>
<div class="output" style="width: 40%;">
<table class="table table-striped">
<thead>
    <th>SUBJECT</th>
    <th>CA 1</th>
    <th>CA 2</th>
</thead>
<?php 
if($hol =='first term'){
    if($quer = mysqli_query($conn,$sell)){
        while($fetch = mysqli_fetch_assoc($quer)){
           $subject_1 = $fetch['subject_1'];
           $ca1= $fetch['ca1']."<br>";
         $ca2= $fetch['ca2'];

      


?>
<?php
}}
else{
$not_e ='not yet out';
}
}
elseif($hol =='Second term'){
    if($quer = mysqli_query($conn,$sell)){
        while($fetch = mysqli_fetch_assoc($quer)){
           $subject_2 = $fetch['subject_21'];
           $ca21= $fetch['ca21']."<br>";
         $ca22= $fetch['ca22'];

      


?>
<?php
}}
else{
$not_e ='not yet out';
}
}

elseif($hol =='Third term'){
    if($quer = mysqli_query($conn,$sell)){
        while($fetch = mysqli_fetch_assoc($quer)){
           $subject_31 = $fetch['subject_31'];
           $ca31= $fetch['ca31']."<br>";
         $ca32= $fetch['ca32'];

      


?>
<?php
}}
else{
$not_e ='not yet out';
}
}



if($hol =='first term'){
    if($querr = mysqli_query($conn,$sellm)){
        while($fetchm = mysqli_fetch_assoc($querr)){
           $subject_2 = $fetchm['subject_2'];
           $ca3= $fetchm['ca3']."<br>";
         $ca4= $fetchm['ca4'];

      


?>
<?php
}}
else{
$not_m ='not yet out';
}
}
elseif($hol =='Second term'){
    if($querr = mysqli_query($conn,$sellm)){
        while($fetchm = mysqli_fetch_assoc($querr)){
           $subject_22 = $fetchm['subject_22'];
           $ca23= $fetchm['ca23']."<br>";
         $ca24= $fetchm['ca24'];

      


?>
<?php
}}
else{
$not_m ='not yet out';
}
}

elseif($hol =='Third term'){
    if($querr = mysqli_query($conn,$sellm)){
        while($fetchm = mysqli_fetch_assoc($querr)){
           $subject_32 = $fetchm['subject_32'];
           $ca33= $fetchm['ca33']."<br>";
         $ca34= $fetchm['ca34'];

      


?>
<?php
}}
else{
$not_m ='not yet out';
}
}


if($hol =='first term'){
    if($quers = mysqli_query($conn,$sells)){
        while($fetchs = mysqli_fetch_assoc($quers)){
           $subject_3 = $fetchs['subject_3'];
           $ca5= $fetchs['ca5']."<br>";
         $ca6= $fetchs['ca6'];

      


?>
<?php
}}
else{
$not_s ='not yet out';
}
}
elseif($hol =='Second term'){
    if($quers = mysqli_query($conn,$sells)){
        while($fetchs = mysqli_fetch_assoc($quers)){
           $subject_23 = $fetchs['subject_23'];
           $ca25= $fetchs['ca25']."<br>";
         $ca26= $fetchs['ca26'];

      


?>
<?php
}}
else{
$not_s ='not yet out';
}
}

elseif($hol =='Third term'){
    if($quers = mysqli_query($conn,$sells)){
        while($fetchs = mysqli_fetch_assoc($quers)){
           $subject_33 = $fetchs['subject_33'];
           $ca35= $fetchs['ca35']."<br>";
         $ca36= $fetchs['ca36'];

      


?>
<?php
}}
else{
$not_s ='not yet out';
}
}



if($hol =='first term'){
    if($querp = mysqli_query($conn,$sellp)){
        while($fetchp = mysqli_fetch_assoc($querp)){
           $subject_4 = $fetchp['subject_4'];
           $ca7= $fetchp['ca7']."<br>";
         $ca8= $fetchp['ca8'];

      


?>
<?php
}}
else{
$not_p ='not yet out';
}
}
elseif($hol =='Second term'){
    if($querp = mysqli_query($conn,$sellp)){
        while($fetchp = mysqli_fetch_assoc($querp)){
           $subject_24 = $fetchp['subject_24'];
           $ca27= $fetchp['ca27']."<br>";
         $ca28= $fetchp['ca28'];

      


?>
<?php
}}
else{
$not_p ='not yet out';
}
}

elseif($hol =='Third term'){
    if($querp = mysqli_query($conn,$sellp)){
        while($fetchp = mysqli_fetch_assoc($querp)){
           $subject_34 = $fetchp['subject_34'];
           $ca37= $fetchp['ca37']."<br>";
         $ca38= $fetchp['ca38'];

      


?>
<?php
}}
else{
$not_p ='not yet out';
}
}



if($hol =='first term'){
    if($quersp = mysqli_query($conn,$spell)){
        while($fetchsp = mysqli_fetch_assoc($quersp)){
           $subject_5 = $fetchsp['subject_5'];
           $ca9= $fetchsp['ca9']."<br>";
         $ca10= $fetchsp['ca10'];

      


?>
<?php
}}
else{
$not_sp ='not yet out';
}
}
elseif($hol =='Second term'){
    if($quersp = mysqli_query($conn,$spell)){
        while($fetchsp = mysqli_fetch_assoc($quersp)){
           $subject_25 = $fetchsp['subject_25'];
           $ca29= $fetchsp['ca29']."<br>";
         $ca210= $fetchsp['ca210'];

      


?>
<?php
}}
else{
$not_sp ='not yet out';
}
}

elseif($hol =='Third term'){
    if($quersp = mysqli_query($conn,$spell)){
        while($fetchsp = mysqli_fetch_assoc($quersp)){
           $subject_35 = $fetchsp['subject_35'];
           $ca39= $fetchsp['ca39']."<br>";
         $ca310= $fetchsp['ca310'];

      


?>
<?php
}}
else{
$not_sp ='not yet out';
}
}





    



        
    ?>
    


<tbody>
   
        <?php 
        if($hol == 'first term'){?>
            <tr>
            <td><?=$subject_1?></td>
            <td><?=$ca1?>
            <?php
            if($not_e){
            echo $not_e;
        }?>
        </td>
            <td><?=$ca2?></td>
        </tr>
        <?php
        }
        ?>

         <?php 
        if($hol == 'Second term'){?>
            <tr>
            <td><?=$subject21?></td>
            <td><?=$ca21?>
            <?php
            if($not_e){
            echo $not_e;
        }?>
        </td>
            <td><?=$ca22?></td>
        </tr>
        <?php
        }
        ?>


<?php 
        if($hol == 'Third term'){?>
            <tr>
            <td><?=$subject_31?></td>
            <td><?=$ca31?>
            <?php
            if($not_e){
            echo $not_e;
        }?>
        </td>
            <td><?=$ca32?></td>
        </tr>
        <?php
        }
        ?>



      
<?php 
        if($hol == 'first term'){?>
            <tr>
            <td><?=$subject_2?></td>
            <td><?=$ca3?>
            <?php
            if($not_m){
            echo $not_m;
        }?>
        </td>
            <td><?=$ca4?></td>
        </tr>
        <?php
        }
        ?>

         <?php 
        if($hol== 'Second term'){?>
            <tr>
            <td><?=$subject_22?></td>
            <td><?=$ca23?>
            <?php
            if($not_m){
            echo $not_m;
        }?>
        </td>
            <td><?=$ca24?></td>
        </tr>
        <?php
        }
        ?>


<?php 
        if($hol == 'Third term'){?>
            <tr>
            <td><?=$subject_32?></td>
            <td><?=$ca33?>
            <?php
            if($not_m){
            echo $not_m;
        }?>
        </td>
            <td><?=$ca34?></td>
        </tr>
        <?php
        }
        ?>



      
   
<?php 
        if($hol == 'first term'){?>
            <tr>
            <td><?=$subject_3?></td>
            <td><?=$ca5?>
            <?php
            if($not_s){
            echo $not_s;
        }?>
        </td>
            <td><?=$ca6?></td>
        </tr>
        <?php
        }
        ?>

         <?php 
        if($hol == 'Second term'){?>
            <tr>
            <td><?=$subject_23?></td>
            <td><?=$ca25?>
            <?php
            if($not_s){
            echo $not_s;
        }?>
        </td>
            <td><?=$ca26?></td>
        </tr>
        <?php
        }
        ?>


<?php 
        if($hol == 'Third term'){?>
            <tr>
            <td><?=$subject_33?></td>
            <td><?=$ca35?>
            <?php
            if($not_s){
            echo $not_s;
        }?>
        </td>
            <td><?=$ca36?></td>
        </tr>
        <?php
        }
        ?>



      

<?php 
        if($hol == 'first term'){?>
            <tr>
            <td><?=$subject_4?></td>
            <td><?=$ca7?>
            <?php
            if($not_p){
            echo $not_p;
        }?>
        </td>
            <td><?=$ca8?></td>
        </tr>
        <?php
        }
        ?>

         <?php 
        if($hol == 'Second term'){?>
            <tr>
            <td><?=$subject_24?></td>
            <td><?=$ca27?>
            <?php
            if($not_p){
            echo $not_p;
        }?>
        </td>
            <td><?=$ca28?></td>
        </tr>
        <?php
        }
        ?>


<?php 
        if($hol == 'Third term'){?>
            <tr>
            <td><?=$subject_34?></td>
            <td><?=$ca37?>
            <?php
            if($not_p){
            echo $not_p;
        }?>
        </td>
            <td><?=$ca38?></td>
        </tr>
        <?php
        }
        ?>

   


<?php 
        if($hol == 'first term'){?>
            <tr>
            <td><?=$subject_5?></td>
            <td><?=$ca9?>
            <?php
            if($not_sp){
            echo $not_sp;
        }?>
        </td>
            <td><?=$ca10?></td>
        </tr>
        <?php
        }
        ?>

         <?php 
        if($hol == 'Second term'){?>
            <tr>
            <td><?=$subject_25?></td>
            <td><?=$ca29?>
            <?php
            if($not_sp){
            echo $not_sp;
        }?>
        </td>
            <td><?=$ca210?></td>
        </tr>
        <?php
        }
        ?>


<?php 
        if($hol == 'Third term'){?>
            <tr>
            <td><?=$subject_35?></td>
            <td><?=$ca39?>
            <?php
            if($not_sp){
            echo $not_sp;
        }?>
        </td>
            <td><?=$ca310?></td>
        </tr>
        <?php
        }
        ?>
</tbody>

</table>
</div>
</div>

<div class="popup" id="popup-1">
<div class="overlay"></div>
<div class="content">

<div class="close-btn" onclick="togglePopup()">&times;</div>
<?php
if($action == 'release'){
    if($hol == 'first term'){?>

   

    <h1>Black-aya intl school</h1> 
    <h5><?=$hol?> Result</h5>
    <div>
        <table class="table table-striped">
          
               <div class="stun">STUDENT NAME: <SPAN><?=$namet?></SPAN></div>
                
           
            <thead>
                <th>Subject</th>
                <th>ca_1</th>
                <th>ca_2</th>
                <th>Exams</th>
                <th>Total</th>
            </thead>
            <tbody>
                <tr>
                    <td><?=$subject1?></td>
                    <td><?=$c1?></td>
                    <td><?=$c2?></td>
                    <td><?=$exam1?></td>
                    <td><?=$total1?></td>
                </tr>
                <tr>
                    <td><?=$subject2?></td>
                    <td><?=$c3?></td>
                    <td><?=$c4?></td>
                    <td><?=$exam2?></td>
                    <td><?=$total2?></td>
                </tr>

                <tr>
                    <td><?=$subject3?></td>
                    <td><?=$c5?></td>
                    <td><?=$c6?></td>
                    <td><?=$exam3?></td>
                    <td><?=$total3?></td>
                </tr>

                <tr>
                    <td><?=$subject4?></td>
                    <td><?=$c7?></td>
                    <td><?=$c8?></td>
                    <td><?=$exam4?></td>
                    <td><?=$total4?></td>
                </tr>

                <tr>
                    <td><?=$subject5?></td>
                    <td><?=$c9?></td>
                    <td><?=$c10?></td>
                    <td><?=$exam5?></td>
                    <td><?=$total5?></td>
                </tr>
               
                <tr>
                    <td> <div class="spec">Your grade is:</div></td>
                    <td> <div class="tt"><?=$gradee?></div></td>
                    <td></td>
                    <td  class="spec">Total Average:</td>
                    <td class="tt"><?=$average?></td>
                </tr>

               
              
            </tbody>
        </table>
    </div>
    <?php
     }
     elseif($hol == 'Third term'){?>
<?php
$rt = "SELECT promote_decision FROM registration_aya where id = '$ids'";
if($tr = mysqli_query($conn,$rt)){
    while($rot = mysqli_fetch_assoc($tr)){
     echo   $dec = $rot['promote_decision'];
    }
}
?>

        <h1>Black-aya intl school</h1> 
        <h5><?=$hol?> Result</h5>
        <div>
            <table class="table table-striped">
              
                   <div class="stun">STUDENT NAME: <SPAN><?=$namet?></SPAN></div>
                    
               
                <thead>
                    <th>Subject</th>
                    <th>ca_1</th>
                    <th>ca_2</th>
                    <th>Exams</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$subject31?></td>
                        <td><?=$c31?></td>
                        <td><?=$c32?></td>
                        <td><?=$exam31?></td>
                        <td><?=$total31?></td>
                    </tr>
                    <tr>
                        <td><?=$subject32?></td>
                        <td><?=$c33?></td>
                        <td><?=$c34?></td>
                        <td><?=$exam32?></td>
                        <td><?=$total32?></td>
                    </tr>
    
                    <tr>
                        <td><?=$subject33?></td>
                        <td><?=$c35?></td>
                        <td><?=$c36?></td>
                        <td><?=$exam33?></td>
                        <td><?=$total33?></td>
                    </tr>
    
                    <tr>
                        <td><?=$subject34?></td>
                        <td><?=$c37?></td>
                        <td><?=$c38?></td>
                        <td><?=$exam34?></td>
                        <td><?=$total34?></td>
                    </tr>
    
                    <tr>
                        <td><?=$subject35?></td>
                        <td><?=$c39?></td>
                        <td><?=$c310?></td>
                        <td><?=$exam35?></td>
                        <td><?=$total35?></td>
                    </tr>
                   
                    <tr>
                        <td> <div class="spec">Your grade is:</div></td>
                        <td> <div class="tt"><?=$gradee3?></div></td>
                        <td></td>
                        <td  class="spec">Total Average:</td>
                        <td class="tt"><?=$dec?>(<?=$average3?>)</td>
                    </tr>
    
                   
                  
                </tbody>
            </table>
        </div>
        <?php
         }
         elseif($hol == 'Second term'){?>

   

            <h1>Black-aya intl school</h1> 
            <h5><?=$hol?> Result</h5>
            <div>
                <table class="table table-striped">
                  
                       <div class="stun">STUDENT NAME: <SPAN><?=$namet?></SPAN></div>
                        
                   
                    <thead>
                        <th>Subject</th>
                        <th>ca_1</th>
                        <th>ca_2</th>
                        <th>Exams</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$subject21?></td>
                            <td><?=$c21?></td>
                            <td><?=$c22?></td>
                            <td><?=$exam21?></td>
                            <td><?=$total21?></td>
                        </tr>
                        <tr>
                            <td><?=$subject22?></td>
                            <td><?=$c23?></td>
                            <td><?=$c24?></td>
                            <td><?=$exam22?></td>
                            <td><?=$total22?></td>
                        </tr>
        
                        <tr>
                            <td><?=$subject23?></td>
                            <td><?=$c25?></td>
                            <td><?=$c26?></td>
                            <td><?=$exam23?></td>
                            <td><?=$total23?></td>
                        </tr>
        
                        <tr>
                            <td><?=$subject24?></td>
                            <td><?=$c27?></td>
                            <td><?=$c28?></td>
                            <td><?=$exam24?></td>
                            <td><?=$total24?></td>
                        </tr>
        
                        <tr>
                            <td><?=$subject25?></td>
                            <td><?=$c29?></td>
                            <td><?=$c210?></td>
                            <td><?=$exam25?></td>
                            <td><?=$total25?></td>
                        </tr>
                       
                        <tr>
                            <td> <div class="spec">Your grade is:</div></td>
                            <td> <div class="tt"><?=$gradee2?></div></td>
                            <td></td>
                            <td  class="spec">Total Average:</td>
                            <td class="tt"><?=$average2?></td>
                        </tr>
        
                       
                      
                    </tbody>
                </table>
            </div>
            <?php
             }
}


else{?>
    <h1>YOUR RESULT</h1> 
<div class="not">

Hello your result is not yet out. <br>
<i class="fas fa-times-circle fa-5x"></i>
</div>


<?php
}

?>




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






