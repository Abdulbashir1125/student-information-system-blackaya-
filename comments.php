<?php
include "blackconnect.php";
$sell = "SELECT * FROM complains ORDER BY id DESC";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comments.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <title>COMMENTS TO ADMIN</title>
</head>
<body>
<header>
        
        <div class="title">
            COMPLAINS/QUERIES FROM<span> STUDENTS AND STAFFS</span> 
        </div>
        <div class="lin">
    <ul type="none">
<a href="adminstuprocess.php"> <li class="underline" > <i class="fas fa-arrow-left"></i> Back </li></a>
       <a href="#" class="as" ><li >What's new?</li></a>
       </ul>
</div>
    </header> 
    
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
            <th>REG_ID:</th>
            <th>NAME:</th>
            <th>TIME OF COMPLAIN</th>
            <th>COMPLAINS</th>
            <th>ACTION</th>
        </thead>
<?php
        if($hee = mysqli_query($conn,$sell)){
    while($outpls= mysqli_fetch_assoc($hee)){
        $id = $outpls['id'];
        $uid = $outpls['user_id'];
        $name = $outpls['name_of_student'];
        $sect = $outpls['section'];
        $clas = $outpls['class'];
        $complaindin = $outpls['complain'];
        $time = $outpls['timeofsubmission'];
        ?>
        <tbody>
            <td><?=$uid?></td>
            <td><?=$name?></td>
            <td><?=$time?></td>
            <td><?=$complaindin?></td>
            <td><a href="commentreply.php?id=<?=$id?>"><button type="button" class="btn btn-primary">REPLY</button></a></td>

        </tbody>
        <?php
}
        }
        ?>
    </table>
</body>
</html>