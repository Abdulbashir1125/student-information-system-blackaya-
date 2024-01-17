<?php
include "blackconnect.php";
$id = $_GET['id'];
$mess = "";
$sql = "SELECT * FROM primary_two WHERE general_id = '$id'";
if($query = mysqli_query($conn,$sql)){
    while($allout = mysqli_fetch_assoc($query)){

        $s1 = $allout['subject_31'];
        $s2 = $allout['subject_32'];
        $s3 = $allout['subject_33'];
        $s4 = $allout['subject_34'];
        $s5 = $allout['subject_35'];
           $name = $allout['student_name'];
         $general_id = $allout['general_id'];
         $ca1 = $allout['ca31'];
         $ca2 = $allout['ca32'];
         $exam1 = $allout['exam31'];

         $ca3 = $allout['ca33'];
         $ca4 = $allout['ca34'];
         $exam2 = $allout['exam32'];

         $ca5 = $allout['ca35'];
         $ca6 = $allout['ca36'];
         $exam3 = $allout['exam33'];

         $ca7 = $allout['ca37'];
         $ca8 = $allout['ca38'];
         $exam4 = $allout['exam34'];

         $ca9 = $allout['ca39'];
         $ca10 = $allout['ca310'];
         $exam5 = $allout['exam35'];
         
         if(isset($_POST['update'])){
             $c1 = $_POST['c1'];
             $c2 = $_POST['c2'];
             $e1 = $_POST['e1'];
            $total1 = $c1+$c2+$e1;

             $c3 = $_POST['c3'];
             $c4 = $_POST['c4'];
             $e2 = $_POST['e2'];
             $total2 = $c3+$c4+$e2;

             $c5 = $_POST['c5'];
             $c6 = $_POST['c6'];
             $e3 = $_POST['e3'];
             $total3 = $c5+$c6+$e3;

             $c7 = $_POST['c7'];
             $c8 = $_POST['c8'];
             $e4 = $_POST['e4'];
             $total4 = $c7+$c8+$e4;
            

             $c9 = $_POST['c9'];
             $c10 = $_POST['c10'];
             $e5 = $_POST['e5'];
             $total5 = $c9+$c10+$e5;

         $average = ($total1+$total2+$total3+$total4+$total5)/100; 
        //  echo "Your average is = ".$average."<br>";
           
            if($average<=1.4){
                $grade = 'FAIL';
            }
           elseif($average>=1.5 && $average<=2.4){
            $grade = 'PASS';
           }
           elseif($average>=2.5 && $average<=3.4){
            $grade = 'GOOD';
        }
        elseif($average>=3.5 && $average<=4.4){
           $grade = 'VERY GOOD';
        }
        elseif($average>=4.5 && $average<=5.0){
        $grade = 'DISTINCTION';
        }
           else{
               echo 'he no they these groups';
           }
        //    echo "&nbsp Your Grade is = ".$grade;
           
        $myq = "UPDATE primary_two set ca31 = '$c1', ca32 = '$c2',exam31 = '$e1',total31 = '$total1',ca33 = '$c3', ca34 = '$c4',exam32 = '$e2',total32 = '$total2',ca35 = '$c4', ca36 = '$c6',exam33 = '$e3',total33 = '$total3',ca37 = '$c7', ca38 = '$c8',exam34 = '$e4',total34 = '$total4',ca39 = '$c9', ca310 = '$c10',exam35 = '$e5',total35 = '$total5',grade_3 = '$grade',total_average3 = '$average',subject_31='ENGLISH',subject_32='MATHEMATICS',subject_33='BASIC SCIENCE',subject_34='BASIC TECHNOLOGY',subject_35='LITERATURE' WHERE general_id = '$id' ";
           if($quer = mysqli_query($conn,$myq)){
           
            $thh = "SELECT * FROM primary_two where general_id='$id'";
           if($qrr = mysqli_query($conn,$thh)){
               while($tout = mysqli_fetch_assoc($qrr)){
                $first_term_average = $tout['total_average'];
                $second_term_average = $tout['total_average2'];
                $third_term_average = $tout['total_average3'];
               
                $cumulative_average = ($first_term_average+$second_term_average+$third_term_average)/3;
               

                $myq = "UPDATE primary_two set cumulative_average='$cumulative_average' WHERE general_id = '$id' ";
               
                if($quer = mysqli_query($conn,$myq)){
                 $mess = "Update Successful";
                 header("refresh:1");
                }
                else{
                    echo "not update to database";
                }
            }
           
                     
         
      

           }}
           else{
               echo 'notgood';
           }
        
        }}}


else{
    echo 'not working';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="sturecord.css">
    <title>Student assessment</title>
</head>
<body>
<header>
        <div class="container">
            <div class="branding">
               
                <h1>PRIMARY<span class="highlight"> TWO</span></h1>

            </div>
            <nav>
               <a href="index.php"><button><i class="fas fa-home"></i></button></a>
               <a href="prim_two.php"><button>Back to class</button></a>
               <a href="#"><button>MASTER</button></a>
             
      
            </nav>
        </div>
    </header>
    <?php
        if ($mess) {

?>
<div class="alert alert-success" style="text-align: center; font-size:30px;">
    <?=$mess?>
</div>
<?php
}
?>
    <div>
        <p></p>
        <a href="stua_profile.php?general_id=<?=$general_id?>">
        <button type="button" name="update" class="btn btn-secondary ml-2"><i class="fas fa-arrow-left"></i> &nbsp VIEW Student's profile</button>
        </a>
        </a>
        <a href="primary2third.php?id=<?=$id?>">
        <button type="button" name="update" class="btn btn-dark ml-2"><i class="fas fa-arrow-left"></i> &nbsp See composed assessment</button>
        </a>
   
    <p></p>
        <table class="table table-striped">
            <th class="thh">NAME:</th>
       
            <th class="thh"><?=$name?></th>
        </table>
    </div>
    <form action="" method="post">
    <table class="table table-striped">
<thead>
    <!-- <th>NAME</th> -->
<th>SUBJECTS</th>
<th>CA1</th>
<th>CA2</th>
<th>EXAMS1</th>
</thead>

<tbody>
    <tr>
    <!-- <td><input type="text" name="name-update"  class="form-control"></td> -->
    <td><?=$s1?></td>
    <td><input type="number" name="c1"  class="form-control" value="<?=$ca1?>" max=20></td>
    <td><input type="number"name="c2"  class="form-control" value="<?=$ca2?>" max=20></td>
    <td><input type="number" name="e1"  class="form-control" value="<?=$exam1?>" max=60></td>
    </tr>

    <tr>
    <td><?=$s2?></td>
    <td><input type="number"name="c3"  class="form-control" value="<?=$ca3?>" max=20></td>
    <td><input type="number" name="c4"  class="form-control" value="<?=$ca4?>" max=20></td>
    <td><input type="number"name="e2"  class="form-control" value="<?=$exam2?>" max=60></td>
    </tr>

    <tr>
    <td><?=$s3?></td>
    <td><input type="number" name="c5"  class="form-control" value="<?=$ca5?>" max=20></td>
    <td><input type="number" name="c6"  class="form-control" value="<?=$ca6?>" max=20></td>
    <td><input type="number"name="e3"  class="form-control" value="<?=$exam3?>" max=60></td>
    </tr>

    <tr>
    <td><?=$s4?></td>
    <td><input type="number"name="c7"  class="form-control" value="<?=$ca7?>" max=20></td>
    <td><input type="number" name="c8"  class="form-control" value="<?=$ca8?>" max=20></td>
    <td><input type="number" name="e4"  class="form-control" value="<?=$exam4?>" max=60></td>
    </tr>

    <tr>
    <td><?=$s5?></td>
    <td><input type="number" name="c9"  class="form-control" value="<?=$ca9?>" max=20></td>
    <td><input type="number" name="c10"  class="form-control" value="<?=$ca10?>" max=20></td>
    <td><input type="number" name="e5"  class="form-control" value="<?=$exam5?>" max=60></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
        <?php
        if ($mess) {

?>
<div class="alert alert-success">
    <?=$mess?>
</div>
<?php
}
?>
        </td>
        <td><button type="submit" name="update" class="btn btn-primary"><i class="fas fa-plus"></i> &nbsp Update assessment</button></td>
    </tr>
</tbody>
    </table>
    
    </form>

</body>
</html>
