<?php
include "blackconnect.php";
 $id = $_GET['id'];
$sel = "SELECT * FROM complains where id = '$id'";
if($huh = mysqli_query($conn,$sel)){
    while($zen = mysqli_fetch_assoc($huh)){
        $idd = $zen['user_id'];
		$replyying = $zen['admin_reply'];
      

        $sll = "SELECT * FROM registration_aya where id = '$idd'";
if($hu = mysqli_query($conn,$sll)){
    while($zeeg = mysqli_fetch_assoc($hu)){
        
        $surname = $zeeg['surname'];
        $othernamw = $zeeg['othername'];
        $full = $surname.' '.$othernamw;
            }
}
    }}
if(isset($_POST['reply'])){
    $reg_id = $_POST['reg_id'];
    $name = $_POST['name'];
    $reply = $_POST['replies'];
 $date = date('Y.M.d H:i');
 
$putin = "UPDATE complains set timeofreply = '$date',admin_reply='$reply' where id = '$id'";
if($yayi = mysqli_query($conn,$putin)){
    $wel ='YOUR REPLY HAS BEING DROPPED SUCESSFULLY';
    header("refresh:2 url=comments.php");
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <title>COMMENT REPLY</title>
	<style>
		.alert-success{
			text-align: center;
		}
	</style>
</head>
<body>
    <br>
    <a href="comments.php"><i class="fas fa-arrow-left fa-3x ml-3"></i></a>
    <?php
if(!empty($wel)){
    echo '<div class="alert alert-success">
    REPLY HAS BEING DROPPED SUCCESSFULLY.
</div>';
}?>
<div class="container">
    
		<div class="card  mt-5">
			<div class="card-header">
			
        <h3>REPLIES TO COMMENTS/COMPLAINS/QUERIES</h3></div>
			<div class="card-body">
		

					<table class='table table-striped'>
						<form action="" method="post">
								<tbody>
									<tr>
										<th>REG_ID : </th>
										<td><input type="text" name="reg_id"  class="form-control" value="<?=$id?>" ></td>
									</tr>
									<tr>
										<th>NAME: </th>
										<td><input type="text" name="name" class="form-control" value="<?=$full?>"></td>
									</tr>
									<tr>
										<th>REPLY: </th>
										<td><input type="text" name="replies" class="form-control" value="<?=$replyying?>"></td>
                                        
                                    </td>

									</tr>
								

										<th> </th>
										<td>
											<button type="submit" name="reply" class="btn btn-primary"><i class="fas fa-paste"></i> &nbsp SEND REPLY</button>
										<?php 
									
										?>
									</tr>

								</tbody>
						</form>
					</table>


			</div>
		</div>
	</div>


</body>
</html>