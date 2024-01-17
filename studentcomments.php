<?php
include "blackconnect.php";
session_start();
$id = $_SESSION['id'];
$selle = "SELECT * FROM complains WHERE user_id ='$id' ORDER BY id DESC";

if (empty($id)) {
    header("Location: studentlogin.php");
   
  }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stcomment.css">
    <title>Student Comment's</title>
</head>
<body>
    <header>
       
            <h2> <div><a href="studentdashb.php"><i class="fas fa-arrow-left fa-1x ml-3"></i></a>  YOUR COMPLAINS/QUERIES</h2>
        </div>
    </header>
    <table class="table table-striped table-bordered">
        <thead>
        <th>REG_ID:</th>
            <th>TIME OF COMPLAIN</th>
            <th>COMPLAINS</th>
           
        </thead>

        <?php
        if($hee = mysqli_query($conn,$selle)){
    while($outpls= mysqli_fetch_assoc($hee)){
        $id = $outpls['id'];
        $uid = $outpls['user_id'];
        $time = $outpls['timeofsubmission'];
        $dcomplain = $outpls['complain'];
        $adminreplytime = $outpls['timeofreply'];
        $reply = $outpls['admin_reply'];
        ?>
        <tbody>
            <td><?=$uid?></td>
            <td><?=$time?></td>
           
            <td><?=$dcomplain?>
          
        </td>
            <tr>
                <td colspan="2">
                    
                    <div style="font-size: 20px; color:red;">Admin's reply <span style="font-size: 12px; color:grey;">@<?=$adminreplytime?></span></div>
                </td>
                
                <td>
                    <div style="color: green; font-size:18px;">-<?=$reply?></div>
                
                <?php
        if(empty($reply)){?>
            <div style="color: maroon; text-decoration:underline;">No reply yet</div>
            <?php
        }?>
                </td>
            </tr>

        </tbody>
        <?php
}
        }
        
        ?>
    
    </table>

</body>
</html>
<?php
}
?>