

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
 <link rel="stylesheet" href="adminst.css">
</head>
<body>
  <!-- <div class="navi">
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
          <span>Home</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fa fa-users"></i></span>
          <span>Student assessment</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fa fa-male"></i></span>
          <span>Register student</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fa fa-question-circle"></i></span>
          <span>Help</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"> <i class="fa fa-cog"></i></span>
          <span>Settings</span>
        </a>
      </li>

      <li>
        <a href="#">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span>Sign Out</span>
        </a>
      </li>
    </ul>
  </div> -->

  <!-- <div class="toggle" onclick="togglemenu()"> <i class="fas fa-align-justify fa-2x"></i></div> -->

  <header>
        <div class="container">
            <div class="branding">
               
                <h1><span class="highlight"> Administrative</span> Black-aya int'l school</h1>

            </div>
            <nav>
                <ul>
                    <li class="active"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="siwes9.html">Comments</a></li>
                    <li><a href="siwes8.html" target="_blank">Settings</a></li>
                </ul>
            </nav>
        </div>
    </header>
   
<form action="adminstuprocess.php" method="GET">

<label class="selc"> Select current term please.</label>
    <div class="btn-md">
      <!-- <a href="newhaha.php?term=<?=$firstterm?>"></a> -->
      <input type="submit" value="1st term" class="btn1" name="btn1">
   
   <!-- <a href="newhaha.php?term=<?=$secondterm?>">   </a> -->
   <input type="submit" value="2nd term" class="btn2" name="btn2">
   
   <!-- <a href="newhaha.php?term=<?=$thirdterm?>"></a> -->
   <input type="submit" value="3nd term" class="btn3" name="btn3">
   


   
    </div>
    <a href="adminstuprocess.php"><i class="fas fa-arrow-right fa-2x"></i></a>


</form>
  
    
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