<?php
include "blackconnect.php";
echo $id = $_GET['id'];
$mess = "";
$sql = "SELECT * FROM primary_one WHERE general_id = '$id' and statusofu!='demote'";
if($query = mysqli_query($conn,$sql)){
    while($allout = mysqli_fetch_assoc($query)){

        $s1 = $allout['subject_21'];
$s2 = $allout['subject_22'];
$s3 = $allout['subject_23'];
$s4 = $allout['subject_24'];
$s5 = $allout['subject_25'];
           $name = $allout['student_name'];
         $general_id = $allout['general_id'];
         $ca1 = $allout['ca21'];
         $ca2 = $allout['ca22'];
         $exam1 = $allout['exam21'];

         $ca3 = $allout['ca23'];
         $ca4 = $allout['ca24'];
         $exam2 = $allout['exam22'];

         $ca5 = $allout['ca25'];
         $ca6 = $allout['ca26'];
         $exam3 = $allout['exam23'];

         $ca7 = $allout['ca27'];
         $ca8 = $allout['ca28'];
         $exam4 = $allout['exam24'];

         $ca9 = $allout['ca29'];
         $ca10 = $allout['ca210'];
         $exam5 = $allout['exam25'];
         
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
           
		$myq = "UPDATE primary_one set ca21 = '$c1', ca22 = '$c2',exam21 = '$e1',total21 = '$total1',ca23 = '$c3', ca24 = '$c4',exam22 = '$e2',total22 = '$total2',ca25 = '$c4', ca26 = '$c6',exam23 = '$e3',total23 = '$total3',ca27 = '$c7', ca28 = '$c8',exam24 = '$e4',total24 = '$total4',ca29 = '$c9', ca210 = '$c10',exam25 = '$e5',total25 = '$total5',grade_2 = '$grade',total_average2 = '$average',subject_21='ENGLISH',subject_22='MATHEMATICS',subject_23='BASIC SCIENCE',subject_24='BTECH',subject_25='LITERATURE' WHERE general_id = '$id' and statusofu!='demote' ";
           if($quer = mysqli_query($conn,$myq)){
            $mess = "Update Successful";
            header("refresh:1");
           }
           else{
               echo "not update to database";
           }
         }
         else{
             $echo="not updated";
         }
      

    }
}
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
               
                <h1>PRIMARY<span class="highlight"> ONE</span></h1>

            </div>
            <nav>
               <a href="index.php"><button><i class="fas fa-home"></i></button></a>
               <a href="prim1.php"><button>Back to class</button></a>
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
        <a href="studentprofpr1.php?general_id=<?=$general_id?>">
        <button type="button" name="update" class="btn btn-secondary ml-2"><i class="fas fa-arrow-left"></i> &nbsp VIEW Student's profile</button>
        </a>
        <a href="compopri1sec.php?id=<?=$id?>">
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
