<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    xmlhttp.open("GET","helper.php?value="+str,true);
    xmlhttp.send();
}

</script>
<body>
    <form action="helper.php" method="GET">  <div>

        <select name="drink" id="SelectA" onchange="my_fun(this.value);">
        <option value="">select type of drink</option>
        <option value="Hot">hot drinks</option>
        <option value="Cold">cold drinks</option>
        </select>
    </div>

    <div id="pol1">
        <select name="" id="">
            <option value="">Select drinks</option>
        </select>
        <input type="submit" name="submit">
    </div></form>
  
</body>
</html>