<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 if(isset($_GET['error'])):?>
        <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
    <form action="uploadprocess.php" method="POST" enctype="multipart/form-data" >
      name: <input type="date" name="text" id="">
    photo : <input type="file" name="my_image" id="">
    <input type="submit" name="submit" id="" value="upload">
    </form>

</body>
</html>