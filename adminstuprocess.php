<?php
session_start();
include("blackconnect.php");
if(isset($_GET['btn1'])){
     $sql = "SELECT * FROM school_term WHERE term = 'first term'";
    if($query = mysqli_query($conn,$sql)){
      while($hold = mysqli_fetch_assoc($query)){
         $hol = $hold['id'];
       
        $myq = "UPDATE school_term set sn = '1' WHERE term = 'first term'";
        if(mysqli_query($conn,$myq)){
          // echo  "changed successful";
          $miq = "UPDATE school_term set sn = '3' WHERE term = 'second term'";
          if(mysqli_query($conn,$miq)){
            // echo  "changed successful";
            $mtq = "UPDATE school_term set sn = '3' WHERE term = 'third term'";
            if(mysqli_query($conn,$mtq)){
              // echo  "changed successful";
            }
          }
    }
}
}
}



elseif(isset($_GET['btn2'])){
 
  $sql = "SELECT * FROM school_term WHERE term = 'second term'";
  if($query = mysqli_query($conn,$sql)){
    while($hold = mysqli_fetch_assoc($query)){
     $hol = $hold['id'];
      $hol;
     
     $myq = "UPDATE school_term set sn = '1' WHERE term = 'second term'";
     if(mysqli_query($conn,$myq)){
      //  echo  "changed successful";
       $miq = "UPDATE school_term set sn = '3' WHERE term = 'First term'";
       if(mysqli_query($conn,$miq)){
        //  echo  "changed successful";
         $mtq = "UPDATE school_term set sn = '3' WHERE term = 'third term'";
         if(mysqli_query($conn,$mtq)){
          //  echo  "changed successful";
         }
       }
 }
  else{
    echo 'wrong  changing term';
  }
}
}

    
   
}



elseif(isset($_GET['btn3'])){
  $sql = "SELECT * FROM school_term WHERE term = 'third term'";
  if($query = mysqli_query($conn,$sql)){
    while($hold = mysqli_fetch_assoc($query)){
       $hol = $hold['id'];
     
      $myq = "UPDATE school_term set sn = '1' WHERE term = 'third term'";
        if(mysqli_query($conn,$myq)){
          // echo  "changed successful";
          $miq = "UPDATE school_term set sn = '3' WHERE term = 'first term'";
          if(mysqli_query($conn,$miq)){
            // echo  "changed successful";
            $mtq = "UPDATE school_term set sn = '3' WHERE term = 'second term'";
            if(mysqli_query($conn,$mtq)){
              // echo  "changed successful";
            }
          }
    }
  else{
    echo 'wrong  changing term';
  }
}
}
}


else{
 
}
$sss = "SELECT * FROM complains";
if($ssq = mysqli_query($conn,$sss)){
  $count = mysqli_num_rows($ssq);

}

 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
 <link rel="stylesheet" href="adprocess.css">
</head>
<body>
  <div class="navi">
    <ul>

    <li>
        <a href="#">
          <span class="icon"><i class="fa "></i></span>
          <span></span>
        </a>
      </li>

      <li>
        <a href="index.php">
          <span class="icon"><i class="fa fa-home"></i></span>
          &nbsp;&nbsp;&nbsp;&nbsp;<span>Home</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fa fa-users"></i></span>
          &nbsp;&nbsp;&nbsp;&nbsp;<span>Student assessment</span>
        </a>
      </li>

      <li>
        <a href="stu-registration.php">
          <span class="icon"><i class="fa fa-male"></i></span>
          &nbsp;&nbsp;&nbsp;&nbsp; <span>Register student</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fa fa-question-circle"></i></span>
          &nbsp;&nbsp;&nbsp;&nbsp;<span>Help</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"> <i class="fa fa-cog"></i></span>
          &nbsp;&nbsp;&nbsp;&nbsp; <span>Settings</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          &nbsp;&nbsp;&nbsp;&nbsp; <span>Sign Out</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="toggle" onclick="togglemenu()"> <i class="fas fa-align-justify fa-2x"></i></div>

  <header>
        <div class="container">
            <div class="branding">
               
                <h1><span class="highlight"> Administrative</span> of Black-aya int'l school</h1>

            </div>
            <nav>
                <ul>
                    <li class="active"><a href="#">Student management</a></li>
                    <li><a href="siwes9.html">Comments</a></li>
                    <li><a href="siwes8.html" target="_blank">Settings</a></li>
                </ul>
            </nav>
        </div>
    </header>
   
<form action="adminstuprocess.php" method="GET">

<label class="selc">OPERATIONS 101.</label>
<div class="boxess">
        <div class="container">
            <div class="box"> <a href="stu-registration.php" class="stu-d">
            <i class="fas fa-id-card fa-8x"></i>
                <h3>Registration?</h3>
               </a>
             </div>
            
            <div class="box"> <a href="acadmanagement.php" class="pa-r">
            <i class="fas fa-edit fa-8x"></i>
                <h3>Academic Management</h3>
               </a>
            </div>
                
            <div class="box"> <a href="comments.php" class="ad-m">
            <i class="fas fa-comment fa-8x"></i>
                <h3>Comment/Query</h3>  
                <div class="count"><?=$count?></div>

            </a>
        </div>
        </div>
    </div>

    <div class="boxes">
        <div class="container">
            <div class="box"> <a href="#" class="stu-d">
            <i class="fas fa-question-circle fa-8x"></i>
                <h3>Help?</h3>
               </a>
             </div>
            
            <div class="box"> <a href="#" class="pa-r">
            <i class="fas fa-cog fa-8x"></i>
                <h3>Settings?</h3>
               </a>
            </div>
                
            <div class="box"> <a href="studentwelcome.php" class="ad-m">
            <i class="fas fa-university fa-8x"></i>
                <h3>ENTER SCHOOL</h3>  
            </a>
        </div>
        </div>
    </div>


</form>
<a href="adminstu.php"><i class="fas fa-arrow-left fa-2x"> back</i></a>

    
  <script>

    function togglemenu(){
      let navigation = document.querySelector('.navi');
      let toggle = document.querySelector('.toggle');
      navigation.classList.toggle('active');
      toggle.classList.toggle('active');
    }
  </script>
</body>
</html>

