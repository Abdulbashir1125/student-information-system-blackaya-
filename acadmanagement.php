<?php
include "blackconnect.php";



$sql = "SELECT * FROM school_term WHERE sn = '1'";
  if($query = mysqli_query($conn,$sql)){
    while($hold = mysqli_fetch_assoc($query)){
      $hol = $hold['term'];
     
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
if(isset($_POST['release'])){
$gg = 'release';
$id = '1';
        if($action =='release'){
            $insett = "UPDATE result_release set term='$hol', action = 'unrelease' where id = '1'";
            $cherr = mysqli_query($conn,$insett);
            if($cherr){
               echo '<script> alert("RESULT UNRELEASED")</script>'; 
            }
            else{
                echo 'not inserted';
            }
        }
        else{
           
            $inset = "UPDATE result_release set term='$hol', action = 'release' where id = '1'";
            $cher = mysqli_query($conn,$inset);
            if($cher){
                echo '<script> alert("RESULT RELEASED")</script>'; 
            }
            else{
                echo 'not inserted';
            }

        }
    }
if($hol == 'Third term'){
    if(isset($_POST['promote'])){
        $ch = "SELECT * FROM registration_aya where class = 'Nursery_two'";
        if($rr = mysqli_query($conn,$ch)){
            while($gg = mysqli_fetch_assoc($rr)){
$status = $gg['promote_decision'];
if ($status=='promote' || $status=='demote'){
    $pro = "UPDATE registration_aya set class = 'primary_one',section = 'Primary' where promote_decision = 'promote' AND class = 'Nursery_two'";
    if(mysqli_query($conn,$pro)){


$pick = "SELECT * FROM registration_aya where class = 'primary_one' and promote_decision='promote'";
if($rrr = mysqli_query($conn,$pick)){
while($sat = mysqli_fetch_assoc($rrr)){
$id = $sat['id'];
$surname = $sat['surname'];
$othername = $sat['othername'];
$name = $surname.' '.$othername;
$re = "INSERT INTO primary_one (general_id,student_name) VALUES('$id','$name')";
if(mysqli_query($conn,$re)){
  
    echo "<script>alert('promoted successfully')</script>";
}
else{
    echo 'hmm';
}
}
echo "<script>alert('promoted successfully')</script>";
}
    }

    $por = "SELECT * FROM registration_aya where class = 'Nursery_two' and promote_decision='demote'";
    if($yayi = mysqli_query($conn,$por)){
        while($dem = mysqli_fetch_assoc($yayi)){
            $id = $dem['id'];
            $sur = $dem['surname'];
            $other = $dem['othername'];
            $name = $sur.' '.$other;

            $upo = "UPDATE Nursery_two set statusofu = 'demote' where general_id = '$id'";
            if(mysqli_query($conn,$upo)){
                $sat = "INSERT INTO Nursery_two (general_id,student_name) VALUES('$id','$name')";
                if(mysqli_query($conn,$sat)){
                    $refr = "UPDATE registration_aya set promote_decision='noo' where class = 'Nursery_two'";
                    if(mysqli_query($conn,$refr)){
                        echo '<script> alert("SUCCESSFULLY PROMOTED FOR NU2 - PR1")</script>';
                    }
                }
            }
          
        }
        
    }
}
else{
    echo "<script> alert('you cannot promote when there are other students left without their assessment filled')</script>";
}
            }
        }
  
        else{
            echo 'nothing working';
        }

        $ch = "SELECT * FROM registration_aya where class = 'Primary_one'";
        if($rr = mysqli_query($conn,$ch)){
            while($gg = mysqli_fetch_assoc($rr)){
$status = $gg['promote_decision'];
if ($status=='promote' || $status=='demote'){
        $pro = "UPDATE registration_aya set class = 'primary_two',section = 'Primary' where promote_decision = 'promote' AND class = 'primary_one'";
        if(mysqli_query($conn,$pro)){


$pick = "SELECT * FROM registration_aya where class = 'primary_two' and promote_decision='promote'";
if($rrr = mysqli_query($conn,$pick)){
while($sat = mysqli_fetch_assoc($rrr)){
    $id = $sat['id'];
    $surname = $sat['surname'];
    $othername = $sat['othername'];
    $name = $surname.' '.$othername;
    $re = "INSERT INTO primary_two (general_id,student_name) VALUES('$id','$name')";
    if(mysqli_query($conn,$re)){
        echo 'done with promotion';
       
    }
    else{
        echo 'hmm';
    }
}

}
        }
       
        $por = "SELECT * FROM registration_aya where class = 'Primary_one' and promote_decision='demote'";
        if($yayi = mysqli_query($conn,$por)){
            while($dem = mysqli_fetch_assoc($yayi)){
                $id = $dem['id'];
                $sur = $dem['surname'];
                $other = $dem['othername'];
                $name = $sur.' '.$other;

                $upo = "UPDATE primary_one set statusofu = 'demote' where general_id = '$id'";
                if(mysqli_query($conn,$upo)){
                    $sat = "INSERT INTO primary_one (general_id,student_name) VALUES('$id','$name')";
                    if(mysqli_query($conn,$sat)){
                        $refr = "UPDATE registration_aya set promote_decision='noo' where class ='Primary_one'";
                        if(mysqli_query($conn,$refr)){
                            echo '<script> alert("promoted for primary 1 to 2")</script>';
                        }
                        
                    }
                }
              
            }
            
        }
    }
    else{
        echo "<script> alert('you cannot promote when there are other students left without their assessment filled')</script>";
    }
}}
        else{
            echo 'nothing working';
        }
    }

if(isset($_POST['dan'])){
    $refr = "UPDATE registration_aya set promote_decision='pending'";
    if(mysqli_query($conn,$refr)){
        echo '<script> alert("REFRESHED... READY TO PROMOTE")</script>';
    }
}

}
else{
    echo "<script> alert('YOU CAN ONLY PROMOTE STUDENTS IN THIRD TERM ,AFTER EXAMINATION')</script>";
}
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="acadmana.css">
    <title>Academic Management</title>
</head>
<body>
    
    <header>
    
    <div class="title">
    <div class="round">
       <a href="adminstuprocess.php"><i class="fas fa-arrow-left"></i></a> 
    </div>
        <h2>ACADEMIC MANAGEMENT</h2>
     
        <p>All academic activities and students access to their assessment(CAs AND RESULT) will be managed/controlled here</p>

    </div>
</header>

<article>
    <div class="article">
        Current term: <span>
            <?php
           echo $hol;
            ?>
        </span>
       </div>

       <div class="sub-art">
            Anything the admin will release to the students will be with regard to the current <span>TERM</span>.
        </div>
</article>


    
<form action="" method="post">
<section style="border: 15px grey solid; width:fit-content; border-radius:20px; padding-top:5px;">
    <div class="btnn">
       <div>
           <button type="submit" class="release-result" name="release" style="background-color: grey; font-size:40px;" onclick="return confirm('DO YOU REALLY WANT TO RELEASE RESULTS TO STUDENTS?')">Release/UN-release RESULT</button>
       </div> 
&nbsp;&nbsp;&nbsp;&nbsp;
       <div>
           <button type="submit" class="unable-login" name="unable" style="background-color: darkgoldenrod; font-size:30px;">Disable students <br> login</button>
       </div> 
       <br>
       <div>
           <button type="submit" class="unable-login" name="promote" style="background-color: chocolate; font-size:40px;">PROMOTE</button>
       </div> 
       <!-- <div>
           <button type="submit" class="unable-login" name="promote2">PRI_1-PRI_2</button>
       </div>  -->

       <div>
           <button type="submit" class="unable-login" name="dan" style="background-color: teal; font-size:40px;">REFRESH BEFORE ANY PROMOTION</button>
       </div> 
    </div>


</section>
</form>


</body>
</html>