<?php
include "blackconnect.php";

$sql = "SELECT * FROM school_term WHERE sn = '1'";
if($query = mysqli_query($conn,$sql)){
  while($hold = mysqli_fetch_assoc($query)){
    $hol = $hold['term'];
   
  }
}
session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM nursery_two WHERE general_id ='$id' and statusofu!='demote'";
if($text = mysqli_query($conn,$sql)){
    while($sendout=mysqli_fetch_assoc($text)){
$s1 = $sendout['subject_21'];
$s2 = $sendout['subject_22'];
$s3 = $sendout['subject_23'];
$s4 = $sendout['subject_24'];
$s5 = $sendout['subject_25'];

        $name = $sendout['student_name'];
        $general_id = $sendout['general_id'];
        $ca1 = $sendout['ca21'];
        $ca2 = $sendout['ca22'];
        $exam1 = $sendout['exam21'];
        $total1 = $sendout['total21'];

        
        $ca3 = $sendout['ca23'];
        $ca4 = $sendout['ca24'];
        $exam2 = $sendout['exam22'];
        $total2 = $sendout['total22'];

        $ca5 = $sendout['ca25'];
        $ca6 = $sendout['ca26'];
        $exam3 = $sendout['exam23'];
        $total3 = $sendout['total23'];

        $ca7 = $sendout['ca27'];
        $ca8 = $sendout['ca28'];
        $exam4 = $sendout['exam24'];
        $total4 = $sendout['total24'];

        $ca9 = $sendout['ca29'];
        $ca10 = $sendout['ca210'];
        $exam5 = $sendout['exam25'];
        $total5 = $sendout['total25'];
        $total_average = $sendout['total_average2'];

        if(isset($_POST['rels_ce'])){
            $ENG_CA = "out now";
            $sql4="UPDATE release_ca set english='$ENG_CA' WHERE id = 9 ";
            if(mysqli_query($conn,$sql4)){
                echo '<script>alert("ENGLISH C.A has been released to students")</script>';
            }
            else{
                echo 'not released(english)';
            }}

        if(isset($_POST['relsu_ce'])){
            $ENG_CA = 'not out';
            $sql4="UPDATE release_ca set english='$ENG_CA' WHERE id = 9 ";
            if(mysqli_query($conn,$sql4)){
                echo '<script>alert("ENGLISH C.A has been un-released from students")</script>';
            }
            else{
                echo 'not updated';
            }}

            if(isset($_POST['rels_gm'])){
                $math_CA = "out now";
                $sql4="UPDATE release_ca set math='$math_CA' WHERE id = 9 ";
                if(mysqli_query($conn,$sql4)){
                    echo '<script>alert("MATH C.A has been released to students")</script>';
                }
                else{
                    echo 'not released(math)';
                }}
    
            if(isset($_POST['relsu_gm'])){
                $math_CA = 'not out';
                $sql4="UPDATE release_ca set math='$math_CA' WHERE id = 9 ";
                if(mysqli_query($conn,$sql4)){
                    echo '<script>alert("MATH C.A has been un-released from students")</script>';
                }
                else{
                    echo 'not updated';
                }}


                if(isset($_POST['rels_bs'])){
                    $basic_CA = "out now";
                    $sql4="UPDATE release_ca set basicscience='$basic_CA' WHERE id = 9 ";
                    if(mysqli_query($conn,$sql4)){
                        echo '<script>alert("B/SCIENCE C.A has been released to students")</script>';
                    }
                    else{
                        echo 'not released(b/science)';
                    }}
        
                if(isset($_POST['relsu_bs'])){
                    $basic_CA = 'not out';
                    $sql4="UPDATE release_ca set basicscience='$basic_CA' WHERE id = 9 ";
                    if(mysqli_query($conn,$sql4)){
                        echo '<script>alert("B/SCIENCE C.A has been un-released from students")</script>';
                    }
                    else{
                        echo 'not updated';
                    }}

                    
                if(isset($_POST['rels_phe'])){
                    $phe_CA = "out now";
                    $sql4="UPDATE release_ca set phe='$phe_CA' WHERE id = 9 ";
                    if(mysqli_query($conn,$sql4)){
                        echo '<script>alert("P.H.E C.A has been released to students")</script>';
                    }
                    else{
                        echo 'not released(phe)';
                    }}
        
                if(isset($_POST['relsu_phe'])){
                    $phe_CA = 'not out';
                    $sql4="UPDATE release_ca set phe='$phe_CA' WHERE id = 9 ";
                    if(mysqli_query($conn,$sql4)){
                        echo '<script>alert("P.H.E C.A has been un-released from students")</script>';
                    }
                    else{
                        echo 'not updated';
                    }}

                    if(isset($_POST['rels_gs'])){
                        $gs_CA = "out now";
                        $sql4="UPDATE release_ca set spelling='$gs_CA' WHERE id = 9 ";
                        if(mysqli_query($conn,$sql4)){
                            echo '<script>alert("GENERAL SPELLINGS C.A has been released to students")</script>';
                        }
                        else{
                            echo 'not released(speling)';
                        }}
            
                    if(isset($_POST['relsu_gs'])){
                        $gs_CA = 'not out';
                        $sql4="UPDATE release_ca set spelling='$gs_CA' WHERE id = 9 ";
                        if(mysqli_query($conn,$sql4)){
                            echo '<script>alert("General spellings C.A has been un-released from students")</script>';
                        }
                        else{
                            echo 'not updated';
                        }}
      
       

    }
}
else{
    echo 'not fetching for u AUB';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Composed Result</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sturecord.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="branding">
               
                <h1>NURSERY TWO<span class="highlight"> COMPOSED ASSESSMENT</span></h1>

            </div>
            <nav>
               <a href="stuurecord.php?id=<?=$id?>"><button><i class="fas fa-arrow-left"></i></button></a>
               <a href="index.php"><button>HOME</button></a>
               <a href="#"><button>MASTER</button></a>
             
      
            </nav>
        </div>
    </header>

    <form action="" method="post">
     <table class="table table-striped">
     
<thead>
          
   <th>NAME:</th>
   <th></th>
   <th><?=$name?></th>
   <th></th>



</thead>
    <tbody>
      <td>SUBJECTS</td>
      <td>CA1</td>
      <td>CA2</td>
      <td>EXAMS1</td>
      <td>TOTAL</td>
     <td colspan="2">ACTION</td>

    <tr>
    <!-- <td><input type="text" name="name-update"  class="form-control"></td> -->
    <td><?=$s1?></td>
    <td><label for=""><?=$ca1?></label></td>
    <td><label for=""><?=$ca2?></label></td>
    <td><label for=""><?=$exam1?></label></td>
    <td><label for=""><?=$total1?></label></td>
    <td><input type="submit" value="RELEASE" name="rels_ce" class="btn btn-primary" onclick="return  confirm('Only this subject\'s CA will be made available to students.Proceed?')"> 
<input type="submit" name="relsu_ce" value="UNRELEASE" class="btn btn-danger" onclick="return  confirm('You are unreleasing the CA from the student\'s dashboard.unrelease?')"> 
</td>
    
</tr>
 <tr>
     <td><?=$s2?></td>
     <td><label for=""><?=$ca3?></label></td>
     <td><label for=""><?=$ca4?></label></td>
     <td><label for=""><?=$exam2?></label></td>
     <td><label for=""><?=$total2?></label></td>
     <td><input type="submit" value="RELEASE" name="rels_gm" class="btn btn-primary" onclick="return confirm('Only this subject\'s CA will be made available to students.Proceed?')">
     <input type="submit" name="relsu_gm" value="UNRELEASE" class="btn btn-danger" onclick="return  confirm('You are unreleasing the CA from the student\'s dashboard.unrelease?')"> 
    </td>
     
    </tr>

 <tr>
     <td><?=$s3?></td>
     <td><label for=""><?=$ca5?></label></td>
     <td><label for=""><?=$ca6?></label></td>
     <td><label for=""><?=$exam3?></label></td>
     <td><label for=""><?=$total3?></label></td>
     <td><input type="submit" value="RELEASE" name="rels_bs" class="btn btn-primary" onclick="return confirm('Only this subjects CA will be made available to students.Proceed?')">
     <input type="submit" name="relsu_bs" value="UNRELEASE" class="btn btn-danger" onclick="return  confirm('You are unreleasing the CA from the student\'s dashboard.unrelease?')"> </td>
 </tr>

 <tr>
     <td><?=$s4?></td>
     <td><label for=""><?=$ca7?></label></td>
     <td><label for=""><?=$ca8?></label></td>
     <td><label for=""><?=$exam4?></label></td>
     <td><label for=""><?=$total4?></label></td>
     <td><input type="submit" value="RELEASE" name="rels_phe" class="btn btn-primary" onclick="return confirm('Only this subjects CA will be made available to students.Proceed?')">
     <input type="submit" name="relsu_phe" value="UNRELEASE" class="btn btn-danger" onclick="return  confirm('You are unreleasing the CA from the student\'s dashboard.unrelease?')">
    </td>

 </tr>

 <tr>
     <td><?=$s5?></td>
     <td><label for=""><?=$ca9?></label></td>
     <td><label for=""><?=$ca10?></label></td>
     <td><label for=""><?=$exam5?></label></td>
     <td><label for=""><?=$total5?></label></td>

     <td><input type="submit" value="RELEASE" name="rels_gs" class="btn btn-primary" onclick="return confirm('Only this subjects CA will be made available to students.Proceed?')">
     <input type="submit" name="relsu_gs" value="UNRELEASE" class="btn btn-danger" onclick="return  confirm('You are unreleasing the CA from the student\'s dashboard.unrelease?')">
    </td>
 </tr>

 <tr>
     <td>
         <?php
        
?>
         <div  style="font-size: 25px;"><?=$hol.' average score';?></div> 
         <?php
         ?>
     </td>
     <td><label for=""></label></td>
     <td><label for=""></label></td>
     <td><label for=""></label></td>
     <td></td>
     <td class="avgg"><div ><?=$total_average?></div></td>

 </tr>
            </tbody>
        </table>
    </form>

</body>
</html>