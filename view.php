<?php  include "blackconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }
        .alb{
            height: 200px;
            width: 200px;
            padding: 5px;
        }
        .alb img{
            height: 100%;
            width: 100%;
           
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <a href="photoupload.php">&#8592</a>
    <?php
   
    $sql = "SELECT * FROM images ORDER BY id DESC";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        while($images = mysqli_fetch_assoc($res)){?>
        <div class="alb">
            <img src="images/<?=$images['img_url']?>" alt="">
        </div>
<?php
}
}
?>
        

    
    
</body>
</html>

<div class="all">
    <div class="tabur">
        <div class="card-header">STUDENT SECTION</div>
        <table class="table table-striped">
            <tr>
               <td> surname: <label for=""><?=$surname?></label>&nbsp;</td>
               <td>Othername: <label for=""><?=$othername?></label><br></td>
            </tr>
            <tr>
                <td>
Date of Birth : <label for=""><?=$dateofbirth?></label>&nbsp</td>
                <td>   Gender: <label for=""><?=$gender?></label><br></td>
            </tr>

            <tr>
                <td> Email: <label for=""><?=$email?></label>&nbsp</td>
                <td> Religion: <label for=""><?=$religion?></label><br></td>
            </tr>

            <tr>
                <td>   Home Address:  <label for=""><?=$home_address?></label><br></td>
                <td> Nationality:  <label for=""><?=$nationality?></label>&nbsp</td>
            </tr>

            <tr>
                <td>  City: <label for=""><?=$city?></label><br></td>
                <td> Section:  <label for=""><?=$section?></label>&nbsp</td>
            </tr>

            <tr>
                <td>
                Class:  <label for=""><?=$class?></label><br>
                </td>
                <td>
                    <!-- <a href="stuprofile_update.php?hisid=<?=$id1;?>">   <button class="btn btn-primary">Edit Student's profile</button></a> -->
             
                </td>
            </tr>
        </table>

        </div>

    </div>
    <tbody>
    <td>ENGLISH</td>
    <td><?=$ca1?></td>
    <td><?=$ca1?></td>
</tbody>
<?php
  }
        
}else{?>
    <td></td>
        <td colspan="2"><?=$not?></td>
    
    <?php
    }
    ?>

div class="output_math" style="width: 40%;">
<table class="table table-striped">

<?php 
      

<tbody>
    <td>MATH</td>
    <td><?=$ca3?></td>
    <td><?=$ca4?></td>
</tbody>
<?php
  }
}else{?>
<td></td>
    <td colspan="1"><?=$not_m?></td>

<?php
}
?>
</table>
</div>

<div class="output_bs" style="width: 40%;">
<table class="table table-striped">

<?php 
     
<tbody>
    <td>BASIC-SCIENCE</td>
    <td><?=$ca5?></td>
    <td><?=$ca6?></td>
    
</tbody>
<?php
  }
}else{?>
<td></td>
    <td><?=$not_s?></td>
    <td></td>

<?php
}
?>
</table>
</div>


    </div>
    </div>
   