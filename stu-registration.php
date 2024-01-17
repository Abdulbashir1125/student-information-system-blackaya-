<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="stu-registration.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>
<script>
function my_fun(str){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById('pol1').innerHTML = this.responseText;

        }
    }
    xmlhttp.open("GET","stureg-helper.php?value="+str,true);
    xmlhttp.send();
}
function my_func(str){
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById('pol2').innerHTML = this.responseText;

        }
    }
    xmlhttp.open("GET","stureg-helper.php?valuee="+str,true);
    xmlhttp.send();
}



</script>

<body>
    
<header>
        <div class="container"style="text-align: center;" >
            <div class="branding" style="text-align: center;">
               
                <h1><span class="highlight"> Student</span> Registration</h1>

            </div>
            <nav>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="siwes9.html">Comments</a></li>
                    <li><a href="siwes8.html" target="_blank">Student management</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article class="arti">
        The submission of this form is valid only if both student and parent section are filled 
        appropriately.
    </article>
   <?php if(isset($_GET['error'])):?>
        <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
        
        <?php if(isset($_GET['welcome'])):?>
        <p><?php
         echo '<div class="alert alert-success">'.
         $_GET['welcome'];
     '</div>';
        ?></p>
        <?php endif ?>
     
        <?php if(isset($_GET['password-error'])):?>
        <p><?php echo $_GET['password-error'];
         ?></p>
        <?php endif ?>

        <?php if(isset($_GET['emailerror'])):?>
        <p><?php echo $_GET['emailerror']; ?></p>
        <?php endif ?>
        
    <form action="stu-regis-page.php" method="POST" enctype="multipart/form-data"> 
    <div style="text-align: center;" class="di">
    <table class="table table-striped">
    <h3 class="card-header" style="margin-top: 5px;  color:grey;">Candidate/Student to-be Section</h3>
   
       <tr> <td> <div style="margin-left: 22%;">Candidate photo upload:<input type="file" name="my_image" id="" required style="border-radius: 1px;"></div>  <br></td></td>
 
   <tr>
       <td>Surname:<br><input type="text" name="surname" required><br></td>
   </tr>
   <tr>
       <td>
       Other names:<br><input type="text" name="othername" required><br>
 
       </td>
   </tr>
   <tr>
       <td>
       Year of Study: <br><select name="session-year" id="" required>
   <option value="">-select year of study-</option>
       <option value="2020/2021">2020/2021</option>
       <option value="2021/2022">2021/2022</option>
       <option value="2022/2023">2022/2023</option>
   </select><br>
       </td>
   </tr>
   <tr>
       <td> Date of birth:<br><input type="date" name="date"required><br></td>
   </tr>
   
       <tr>
           <td>
           Gender: <br><select name="gender" id=""required>
<option value="">-Select your Gender-</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select><br>
           </td>

       </tr>
       <tr>
           <td>
           Email: <br><input type="email" placeholder="enter your email address" name="email"required><br>
           </td>
       </tr>
       <tr>
           <td>
           Religion: <br><select name="religion" id=""required>
<option value="">-Select your Religion-</option>
<option value="Islam">Islam</option>
<option value="Christianity">Christianity</option>
<option value="No religion"> I dont have a religion</option>
</select><br>

           </td>
       </tr>
<tr>
    <td>Home/Contact address: <br><input type="text" name="address"required><br></td>
</tr>
<tr>
    <td>
    Nationality:<br>
<select name="country" id="SelectA" onchange="my_fun(this.value);"required>
<option value="">-select your country-</option>
<option value="America">America</option>
<option value="China">China</option>
<option value="Nigeria">Nigeria</option>
<option value="South Africa">South Africa</option>
<option value="Russia">Russia</option>
</select><br>

    </td>
</tr>
<tr>
    <td><div id="pol1">
state/city:<br><select name="" id="">
<option value="">-Select your city-</option>
</select><br>

</div> </td>
</tr>
<tr>
    <td>
    school category:<br>
<select name="section" id="SelectB" onchange="my_func(this.value);" required>
<option value="">-Select student section-</option>
<option value="Nursery">nursery</option>
<option value="Primary">primary</option>
<option value="Junior secondary">Junior secondary</option>
<option value="Senior secondary">Senior secondary</option>

</select>
    </td>
</tr>
<tr>
    <td> <div class="cate">

</div>
<div id="pol2">
state/city:<br><select name="" id="">
<option value="">-Select student class-</option>
</select><br>

</div> </td>
</tr>
 <tr>
     <td>Create a password for your tab: <br><input type="password" name="pass-stu" placeholder="enter the password of your choice" maxlength="4"><br>
   </td>
 </tr>
   <tr>
       <td> Re-enter the password: <br><input type="password" name="pass-stuu" placeholder="re-enter the password please" maxlength="4"> <br>
   </td>
   </tr>
   
  
    </div>
    
        
   
    
 <br>
 
      
<tr><td>
<div style="text-align: center; color:blue;">
    <h3 class="card-header" style="margin-top: 5px; color:grey;">Student/Candidate representative section(STUDENT ADMIN)</h3>
</td>

</tr>
<tr>
    <td>  Surname:<br><input type="text" name="par-surname" id=""required><br></td>
</tr>
<tr>
    <td> Other names:<br> <input type="text" name="par-othername" id="" required><br></td>
</tr>
    <tr>
<td>   PhoneNumber: <br><input type="number" name="par-number"required><br></td>
    </tr>
    <tr>
        <td>  Address: <br><input type="text" name="par-address"required><br></td>
    </tr>
    <tr>
        <td>
        Relationship with Candidate:<br><select name="rship-student" id=""required>
              <option value="">-who are you to the candidate?-</option>
                  <option value="parent">Parent</option>
                  <option value="family-member">Family member</option>
                  <option value="just-responsible">Just Responsible</option>
          </select><br>
        </td>
    </tr>
    <tr>
        <td>Gender: <br><select name="par-gender" id="" required>
              <option value="">-select gender-</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
          </select><br></td>
    </tr>
    <tr>
        <td> Access id-name:<br><input type="text" name="id-name"required><br></td>
    </tr>
    <tr>
        <td>
        Access id-key:<br><input type="password" name="id-key"required><br>
        </td>
    </tr>
     <tr>
         <td>
          NIN(National identification Number):<br><input type="number" name="nin" required><br></td>
     </tr>
      </table>
              <div class="huh">
        </div>
          <button type="reset" class="btn btn-secondary" id="btnn">RESET</button>
        <button type="submit" name="submit"  class="btn btn-primary" id="btns">SUBMIT </button>
          </div>
    
 
   
  
  
     <!-- <input type="reset" name="" id="" class="btn btn-secondary"> -->
        <!-- <input type="submit" name="submit" id="" class="btn btn-primary" id="btns"> -->
    </form>
    <a href="studentwelcome.php"></i>&nbsp<i class="fas fa-university fa-4x"></i></a>
</body>
</html>