<?php
include ("blackconnect.php");
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
    $passwprd_n = strlen($password);
    
    if($passwprd_n==4){

  $sql = "SELECT * FROM registration_aya WHERE email = '$email' and student_password = '$password'";
  $qur = mysqli_query($conn,$sql);
  

  if(mysqli_num_rows($qur)==0){
     $errorfind = "Sorry we can't find this user.";
  }
  else{
    while($gt = mysqli_fetch_assoc($qur)){
        $id = $gt['id'];
        $surname = $gt['surname'];
        $othername = $gt['othername'];
        $sec = $gt['section'];
        $fullname = $surname." ".$othername;
        if($sec =='Nursery'){

            session_start();
            $_SESSION['id'] = $id;
            header("location:studentdashb.php");
        }
        elseif($sec =='Primary'){

            session_start();
            $_SESSION['id'] = $id;
            header("location:studentdashb.php?id=$id");
        }

        
     
      

    }
     
  }
}
else{
    $passlen = 'Your password length should be four(4) ';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentlogin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="icon" href="realaya.png" type="image/x-icon">
    <title>Student login</title>
</head>
<body>


    
<div>
      <a href="spage.php"> <i class="fas fa-arrow-left fa-2x"></i></a> 
    </div>

      
 
       <form action="" method="post">
           <?php
       if(isset($_POST['login'])){
           if(!empty($errorfind)){?>
           <div class="dive"><?=$errorfind;?></div>
           <?php
           }}?>

           <?php
           if(isset($_POST['login'])){
           if(!empty($passlen)){?>
           <div class="divei"><?=$passlen;?></div>
           <?php
           }}?>
           
      
            STUDENT'S EMAIL: <br><input type="email" placeholder="enter your email" name="email" required><br>
            STUDENT'S PASSWORD: <br><input type="password" placeholder="enter your password" name="password" required maxlength="4"><br>
            <div class="frgt">
                <a href="#">Forget password?</a></div>
           
            <input type="submit" name="login" value="Login">
            
        </form>
        <footer id="footer">
        <p>BLACK-AYA INT'L SCHOOL <span>STUDENT LOGIN</span></p>
    </footer>

    <footer id="foot">
        <p>All right reserved &copy; 2021 Developed by : <span>BLACK-AYA</span></p>
    </footer>
</body>

</html>