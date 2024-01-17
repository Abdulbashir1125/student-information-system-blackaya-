<?php
  $incorrect = "";
  $empty = "";
  session_start();
if(isset($_GET['submit-admin'])){
  
    $code = $_GET['code-admin'];
    $pin = $_GET['pin-admin'];


    
    if(empty($code) || empty($pin)){
            $empty = "FILL THE FORM PLS";
    }
    else{
        if($code=='admin' && $pin=='1234'){
            
         header("location:adminstu.php");
        }
        else{
          
    $incorrect = "try another password";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <style>
        .danger{
            color: rgb(121, 16, 16.5);
            font-size: 20px;
            text-decoration: underline;
            
        }
        body{
            background-color: grey;
        }
       
       
    </style>
</head>
<body>
    
<header>
    
               
                <h1> <i class="fas fa-home"></i>&nbsp<span class="highlight"> Admin login </span>of Black-aya int'l school</h1>
        
                <ul>
                    <li class="active"><a href="admin.php">Administrative page</a></li>
                    <li><a href="index.php">home</a></li>
                    <li><a href="siwes8.html" target="_blank">Settings</a></li>
                </ul>
            
          
        
    </header>

    <section class="sec-admin">
<!-- <p>WELCOME ADMIN!</p> -->
    </section>

    <form action="" class="form-admin">
        
         <!-- <span> ENTER YOUR DETAILS:</span><br> -->
         <?php
    if($incorrect){
        ?>
        <div class="danger" style="color: red;"><?php echo $incorrect;?></div>
        <?php
    }?>
<?php
if($empty){
        ?>
        <div class="danger" style="color: red;"><?php echo $empty;?></div>
        <?php
    }?>
    <label for="" style="color:white; font-size:20px;"> USERNAME:</label><br><input type="text" placeholder="enter your code" name="code-admin"> <br>
    <label for="" style="color:white; font-size:20px;"> PIN:</label><br><input type="PASSWORD" placeholder="enter your password" name="pin-admin"> <br>
 
    
    

        <input type="submit" name="submit-admin" id="" value="ENTER" class="btn btn-primary">

    </form>

    <!-- <footer id="footer">
        <p>All right reserved &copy; 2021 Developed by : <span>BLACK-AYA</span></p>
    </footer> -->
</body>
</html>