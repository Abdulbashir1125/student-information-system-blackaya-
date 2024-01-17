<?php
include "blackconnect.php";
session_start();
$_SESSION['id'];
$id = $_SESSION['id'];

if (empty($id)) {
    header("Location: studentlogin.php");
   
  }else{
$select  = "SELECT * FROM registration_aya WHERE id = '$id'";
$rrr = mysqli_query($conn,$select);
if($rrr){
    while($hold = mysqli_fetch_assoc($rrr)){
 $hm =  $hold['student_password'];
    }

}
if(isset($_POST['change'])){
    $old = $_POST['old_pass'];
    $new = $_POST['new_pass'];
    $confirm = $_POST['confirm_pass'];

    if($old == $hm){
        if($new == $confirm){
            $upd = "UPDATE registration_aya SET student_password = '$confirm' WHERE id = '$id'";
            if(mysqli_query($conn,$upd)){
            $ans= 'yayi';
            }
        }
        else{
            $an='the new password doesnt match';
        }

    }
    else{
        $a= 'the old password is not correct';
    }
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
    <title>Change Password</title>
    <style>
        input[type='password']{
            font-size: 20px;
            
            
        }
        
    </style>
</head>
<body style="background-color: grey;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="studentdashb.php"><i class="fas fa-arrow-left fa-2x"></i></a>

<?php
if(!empty($ans)){
    echo '<div class="alert alert-success" style="text-align:center; font-size:30px; margin-top:3%; ">
    Password changed successfully.
</div>';
header("refresh:2");
}?>
<?php
if(!empty($an)){
    echo '<div class="alert alert-danger" style="text-align:center; font-size:30px; margin-top:3%; ">
    The new password does not match.
</div>';
header("refresh:2");
}?>
<?php
if(!empty($a)){
    echo '<div class="alert alert-danger" style="text-align:center; font-size:30px; margin-top:3%; ">
    Old password is not correct.
</div>';
header("refresh:2");
}?>

    <form action="" method="post" style=" font-size:30px; text-align:center; margin-top:10%; color:white;">
        Old password: <br>
        <input type="password" name="old_pass" id="" maxlength="4" style="width: 30%; border-radius:10px; " placeholder="Enter your old password" required><br>
        New Password: <br>
        <input type="password" name="new_pass" id="" maxlength="4" style="width: 30%; border-radius:10px;" placeholder="Enter the new password" required><br>
        Confirm password: <br>
        <input type="password" name="confirm_pass" id="" maxlength="4" style="width: 30%; border-radius:10px;" placeholder="Enter the new password again" required><br>
        <input type="submit" name="change" id="" value="CHANGE" class="btn btn-primary">

</form>
</body>
</html>
<?php }
?>