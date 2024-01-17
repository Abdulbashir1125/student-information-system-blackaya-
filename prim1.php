<?php
include "blackconnect.php";
 session_start();
   $sql = "SELECT * FROM school_term WHERE sn = '1'";
   if($query = mysqli_query($conn,$sql)){
     while($hold = mysqli_fetch_assoc($query)){
     echo  $hol = $hold['term'];
    
     }
 }
// $sql = "SELECT * from nursery_two";
$sql = "SELECT * from registration_aya where class = 'primary_one'";

$sqll = "SELECT * FROM primary_one"


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>class-nursery-1</title>
	<link rel="stylesheet" href="nur2.css">
</head>
<body>
<body>
<header>
        <div class="container">
            <div class="branding">
               
                <h1>PRIMARY<span class="highlight"> ONE</span></h1>

            </div>
            <nav>
               <a href="index.php"><button>HOME</button></a>
               <a href="studentwelcome.php"><button>CLASS SEC.</button></a>
               <a href="#"><button>MASTER</button></a>
             
      
            </nav>
        </div>
    </header>
	<table class="table table-striped">
<thead>
<th>ID</th>
<th>Name</th>
<th>ACTION</th>
<!-- <th>PHONE NO.</th>
<th>ACTION</th> -->

</thead>
<?php
if($hol=='first term'){
if($query= mysqli_query($conn,$sql)){
		while($out=mysqli_fetch_assoc($query)){
			$id = $out['id'];
            $surname = $out['surname'];
            $othername = $out['othername'];
            $name = $surname.' '.$othername;
		    // $name = $out['student_name'];?>
<tbody>
    
	
			<td><?=$id?></td>
			<td><?=$name?></td>
			<td>
				<a href="sturecordpr1.php?id=<?=$id?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
				<a href="delete.php?id=<?=$id?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
			</td>


</tbody>
<?php			
		   
		   
		   }
	}}
    elseif($hol=='Second term'){
        if($query= mysqli_query($conn,$sql)){
            while($out=mysqli_fetch_assoc($query)){
                $id = $out['id'];
            $surname = $out['surname'];
            $othername = $out['othername'];
            $name = $surname.' '.$othername;
                ?>
    <tbody>
        
        
                <td><?=$id?></td>
                <td><?=$name?></td>
                <td>
                    <a href="stuurecordpr1.php?id=<?=$id?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                    <a href="delete.php?id=<?=$id?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
    
    
    </tbody>
    <?php
    }}}
    elseif($hol=='Third term'){
        if($query= mysqli_query($conn,$sql)){
            while($out=mysqli_fetch_assoc($query)){
                $id = $out['id'];
                $surname = $out['surname'];
                $othername = $out['othername'];
                $name = $surname.' '.$othername;
               ?>
    <tbody>
        
        
                <td><?=$id?></td>
                <td><?=$name?></td>
                <td>
                    <a href="stuuurecordpr1.php?id=<?=$id?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                    <a href="delete.php?id=<?=$id?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
    
    
    </tbody>
<?php
	}}}
    else{
        echo 'not found';
    }
    ?>


			</table>
</body>
</html>