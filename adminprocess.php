<?php
session_start();
if(isset($_GET['submit-admin'])){
    $code = $_GET['code-admin'];
    $pin = $_GET['pin-admin'];
    $incorrect = "";
     
    if(empty($code) && empty($pin)){
            echo "FILL THE FORM PLS";
    }
    else{
        if($code=='admin' && $pin=='1234'){
            $_SESSION['code'] = $code;
           include("adminstu.php");
        }
        else{
          
    $incorrect = "try another password";
        }
    }
}

?>