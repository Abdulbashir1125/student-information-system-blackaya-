studnrt<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(grey,coral) no-repeat;
            /* background-position: center; */
            /* background-size: cover; */
            height:fit-content;
        }
        ul{
            text-align: center;
        }
        li{
            display: inline-block;
            padding-right: 10px;
            background-color: coral;
            
        }
        li button{
            background: grey;
            transform: rotate(10deg);
            border-top-left-radius: 40px;
        }
        li button:hover{
            background: linear-gradient(white,grey);
            transition: 1s;
            /* content: 'hello'; */
            color: white;
            /* padding: 20px; */
            opacity: 70%;

          
            
        }
        
        .tt{
            width: 50%;
            margin: auto;
            text-align: center;
            border: 2px slateblue solid;

            font-size: 30px;
        }
     .tut{
        width: 50%;
            margin: auto;
           

     }
        .tut .tt{
            margin-bottom: 10%;
            float: left;
            width: 33%;
            box-sizing: border-box;
        }
   @media screen and (max-width: 750px){
       li{
           font-size: 20px;
       }
       .tt{
            width: 80%;
            margin: auto;
            text-align: center;
            border: none;
line-height: 1em;
            font-size: 20px;
        }
        .tut{
        width: 100%;
            margin: auto;

     }
        .tut .tt{
            width: 100%;
          font-size: 30px;
          float: none;
         /* position: relative; */
          /* box-sizing: border-box; */
      }
    
    
       
   }
   .fl{
          clear: both;
          display: flex;
          justify-content: center;
          align-items: center;
          /* margin-top: 20%; */
          
          
      }
      .fle img{
          border: 2px  solid black;
          height: 100px;
          margin-left: 100px;
          border-radius: 30px;
       
      }
      @media screen and (max-width: 750px){
        .fl{
          clear: both;
          display: block;
          text-align: center;
          font-size: 30px;
          /* margin-top: 20%; */
          
          
      }
      .fle{
       text-align: center;
          /* border: 2px  solid black; */
          height: 100px;
          width: 60%;
          /* margin-left: 100px; */
          border-radius: 30px;
       
      }  
      }
    </style>
</head>
<body>
    <header>
<ul>
    <li>
        <button>home</button> </li>
    <li>services</li>
    <li>about us</li>
    <li>services</li>
</ul>

    </header>

        <div>

<div class="tt">
<p>this is black-aya</p>
    black aya is a suituated at 10crescent afican area gombe
</div>
        </div>

        <div>

<div class="tt">
<p>this is abdullahi</p>
    black aya is a suituated at 10crescent afican area gombe
</div>
        </div>
        <div class="tut">

<div class="tt">
<p>this is abdullahi</p>
    black aya is a suituated at 10crescent afican area gombe
</div>
<div class="tt">
<p>this is abdullahi</p>
    black aya is a suituated at 10crescent afican area gombe
</div>
<div class="tt">
<p>this is abdullahi</p>
    black aya is a suituated at 10crescent afican area gombe
</div>
        </div>
    <div class="fl">
<div>
    <p>hello who is this </p>
</div>
<div class="fle">
<img src="zac.jpg" alt="">

</div>


    </div>
    <div class="fl">
<div>
    <p>hello who is this </p>
</div>
<div class="fle">
<img src="zac.jpg" alt="">

</div>


    </div>
       
</body>
</html>