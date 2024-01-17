<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Abdurrahman Usman Bashir">
    <meta name="keyword" content="Website,Programming,HTML,CSS,JAVASCRIPT">
    <meta name="DESCRIPTION" content="this is my first responsive website design and effective practical outcome">
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="bootstrap.5.0.0/css/bootstrap.css"> -->
    <title>Black intl school</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="icon" href="realaya.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container">
            <div class="branding">
                <?php
                include("blackconnect.php");
                session_start();
                  $sql = "SELECT * FROM school_term WHERE sn = '1'";
                  if($query = mysqli_query($conn,$sql)){
                    while($hold = mysqli_fetch_assoc($query)){
                    echo  $hol = $hold['term'];
                   
                    }
                }
                     
                     
                ?>
                <h1><i class="fas fa-home"></i>&nbsp<span class="highlight"> BLACK-AYA</span> int'l school</h1>

            </div>
            <nav>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="siwes9.html">Services</a></li>
                    <li><a href="siwes8.html" target="_blank">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="showcase">
        <div class="container">
        <h2 class="ttt">Black-aya intl School</h2>
        <label class="textt">
        Empowering and inspiring all students to excel as life long learners.
          We make it our goal as it is our duty to make our children,siblings,parents and community academically sound.
        
        </label>
          
    </div>

    </section>

    <div class="boxes">
        <div class="container">
            <div class="box"> <a href="spage.php" class="stu-d">
            <i class="fas fa-users fa-8x"></i>
                <h3>STUDENT?</h3>
               
            </a>
                <!-- <img src="html.png" alt="" width="100px"> -->

            </div>
            
            <div class="box"> <a href="#" class="pa-r">
            <i class="fas fa-male fa-8x"></i>
                <h3>PARENT?</h3>
               
            </a>
                <!-- <img src="html.png" alt="" width="100px"> -->

            </div>
                
            <div class="box"> <a href="admin.php" class="ad-m">
            <i class="fas fa-user-secret fa-8x"></i>
                <h3>ONLY ADMIN</h3>
               
            </a>
                <!-- <img src="html.png" alt="" width="100px"> -->

            </div>
        </div>
    </div>
    <footer id="footer">
        <p>All right reserved &copy; 2021 Developed by : <span>BLACK-AYA</span></p>
    </footer>
</body>
</html>